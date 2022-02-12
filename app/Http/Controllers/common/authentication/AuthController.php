<?php

namespace App\Http\Controllers\common\authentication;

use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Users;
use App\Models\Contacts;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Cartalyst\Sentinel\Laravel\Facades\Activation;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Cartalyst\Sentinel\Laravel\Facades\Reminder;
use App\Http\Controllers\common\email\EmailController as Email;

use Cartalyst\Sentinel\Addons\Social\Laravel\Facades\Social;
use Cartalyst\Sentinel\Addons\Social\Models\LinkInterface;
use App\Repositories\website\order\EloquentOrderRepository as rOrder;


use Illuminate\Http\JsonResponse;



class AuthController extends Controller
{


    public function __construct()
    {

    }

    public function getLogin()
    {

        return view('common.authentication.login')
            ->with('random', rand(1, 3));
    }

    public function postLogin(Request $oRequest)
    {
        $oUser=[];
//dd($oRequest);
        try {

            if(isset($oRequest->token) && !isset($oRequest->email)){


                $oCodeUserId=DB::table('activations')->where('code','=',$oRequest->token)->first();

                $oUser = Sentinel::findById($oCodeUserId->user_id);

                 Sentinel::login($oUser);
                $user_check =  current_user()->getUser()->id;


            }else{
               // echo json_encode(['status'=>'success','redirect'=>route('users.index')]);exit();

                $oUser = Sentinel::authenticate([
                    'email' => $oRequest->email,
                    'password' => $oRequest->password,
                ]);
            }

            $permissions='';
            $deny_permissions='';
            if(isset($oUser->roles ) && count($oUser->roles )){
            foreach($oUser->roles as $role){
                $permissions.=$role['attributes']['permissions'];
                $deny_permissions.=$role['attributes']['deny_permissions'];
            }
            }
            \Session::set('permissions',$permissions);
            \Session::set('deny_permissions',$deny_permissions);

            if(isset($oRequest->order_id)){
                $oOrder =new rOrder(); $oOrder->update($oRequest->order_id,['users_id'=>$oUser->id]);
            }
        } catch (ThrottlingException $e) {

        } catch (NotActivatedException $e) {

        } catch (Exception $e) {
            return Redirect::route('common.authentication.login')->withErrors([trans('user.InvalidLogin')]);
        }

        if($oRequest->ajax() && !isset($oUser->id)){

            return new JsonResponse(['status' => 'error','messages'=>'Login Failed. Either your Email/password is incorrect.'], 422);

        }


        if(isset($oRequest->device_id) || isset($oRequest->ios_device_id)  ){
            $devicesArray=[];
            if(isset($oRequest->device_id)){$devicesArray['android_device_id']=$oRequest->device_id;}
            if(isset($oRequest->ios_device_id)){$devicesArray['ios_device_id']=$oRequest->ios_device_id;}

            if(count($devicesArray)){
            DB::table('users')->where('id','=',$oUser->id)->update($devicesArray);
            }
        }

//        DB::table('users')->where('id','=',$oUser->id)->update(['permissions'=>json_encode($oRequest->all())]);
        if($oRequest->ajax()){
            $oCode=DB::table('activations')->where('user_id','=',$oUser->id)->first();

            echo json_encode(['status'=>'success','token'=>$oCode->code,'redirect'=>route('users.index')]);//exit();
        }else {
            return Redirect::intended($this->userAfterLoginPage());
        }


    }
    public function userAfterLoginPage(){
        if(\Sentinel::inRole('driver') || \Sentinel::inRole('dispatcher')){

            return route('admin.order_driver.index');
        }else{

            return route('dashboard.index');
        }

    }


    public function getLogout(){
        Sentinel::logout(null, true);
        return redirect()->route('client.auth.login');
    }

    public function getWebsiteLogout(){
        Sentinel::logout(null, true);
        return redirect('/');
    }


















    public function getRecover()
    {
        return view('website.users.forgetPassword')
            ->with('random', rand(1, 3));
    }

    public function postRecover(Request $oRequest)
    {
        $message = trans('user.PleaseTryAgain');
        $credentials = [
            'email' => $oRequest->email,
        ];

        $user = Sentinel::findByCredentials($credentials);


        if ($user) {
            $oReminder = Reminder::create($user);

            if ($oReminder) {


                // TODO email template new way
//                $oEmail = new Email();
//                $oEmail->forgetPassword();
               /* $email=new  Email();
                $email->sendForgetPassword(['id'=> $oReminder->id,'status'=>[0]]);
*/
                $emailInfo= $this->forgetPasswordEmailInfo(['id'=> $oReminder->id,'status'=>[0]]);
                \Mail::send('website.users.forgetEmail',$emailInfo, function($message) use ($emailInfo)
                {

                    $message->from('info@cofedistrict.com', 'Cofe District  - Forget Password');


                    $message->to($emailInfo['accountInfo_email'])->subject('Cofe District - Forgot password');


                });


                $message = trans('user.checkEmailResetPassword');


                if($oRequest->ajax()  ){
                    return new JsonResponse(['status' => 'success','messages'=>$message], 200);
                }
            }

        } else {
            $message = trans('user.userNotExist');

            if(isset($oRequest->web) ){
                return new JsonResponse(['status' => 'error','messages'=>$message], 422);
            }
            if($oRequest->ajax()  ){
                return new JsonResponse(['status' => 'error','messages'=>$message], 200);
            }
        }



        return view('website.users.forgetPassword')
            ->with('random', rand(1, 3))
            ->withErrors($message);
    }



    public function forgetPasswordEmailInfo($templateInfo){

        $oReminder=\Cartalyst\Sentinel\Laravel\Facades\Reminder::find($templateInfo['id']);
        $oRequest=new Request();

        if($oReminder){
            return   $this->convertRowToArray('reminder',$oReminder)
            +$this->getClientInfo($oReminder->user_id)
            +     ['website'=>$oRequest->root(),
                "resetLink"=>'/client/resetForgetPassword/' .$oReminder->user_id . '/' . $oReminder->code];
        }
        return [];

    }


    public function convertRowToArray($tableName,$oResult){
        $returnData=[];

        if(count($oResult)){
            $aResult=(is_array($oResult))?$oResult:$oResult->toArray();
            foreach($aResult as $key => $value){
                $returnData[$tableName.'_'.$key]=$value;
            }
        }
        return $returnData;
    }


    public function getClientInfo($users_id){

        $accountInfoResult=[];


        if($users_id>0){

            $accountInfoResult=Users::find($users_id)->toArray();
        }else{
            $accountInfoResult = current_user()->getUser()->toArray();
        }

        $accountInfo = [];
        foreach ($accountInfoResult as $key => $value) {
            $accountInfo['accountInfo_' . $key] = $value;
        }
        return $accountInfo;
    }


    public function getAdminRecover()
    {
        return view('common.authentication.recover') ->with('random', rand(1, 3));
    }

    public function postAdminRecover(Request $oRequest)
    {
        $message = trans('user.PleaseTryAgain');
        $credentials = [
            'email' => $oRequest->email,
        ];

        $user = Sentinel::findByCredentials($credentials);


        if ($user) {
            $oReminder = Reminder::create($user);

            if ($oReminder) {


                // TODO email template new way
//                $oEmail = new Email();
//                $oEmail->forgetPassword();
                $email=new  Email();
                $email->sendForgetPassword(['id'=> $oReminder->id,'status'=>[0]]);



                $message = trans('user.checkEmailResetPassword');
            }

        } else {
            $message = trans('user.userNotExist');
        }


        return view('common.authentication.recover')
            ->with('random', rand(1, 3))
            ->withErrors($message);
    }

    function getResetForgetPassword($userId, $code)
    {

        return view('website.users.resetForgetPassword')
            ->with('random', rand(1, 3));
    }

    function postResetForgetPassword(Request $oRequest, $userId, $code)
    {
        
     

        $message = trans('user.PleaseTryAgain');
        $user = Sentinel::findById($userId);

        /* TODO validate password and confirm from Request not from code */

        if($oRequest->password ==$oRequest->confirmPassword && strlen($oRequest->password) > 4){
            if ($reminder = Reminder::complete($user, $code, $oRequest->password))
            {
                $oReminder=Reminder::where(['code'=>$code,'user_id'=>$userId])->first();
                // TODO email template new way
//                $email=new  Email();
//                $email->sendForgetPassword(['id'=> $oReminder->id,'status'=>[1]]);

                // Reminder was successfull
                //return Redirect::route('client.auth.login');
              //  return Redirect::to('/');
                \Session::flash('flash_success', 'Your password has been update.Click <a href="/">here</a> to continue.');

            }
        }else{

            $message='The minimum characters number for password is 5 characters   ';//trans('user.invalidPassord');
        }



        return view('website.users.resetForgetPassword')
            ->with('random', rand(1, 3))
            ->withErrors($message);
    }


    function getActivateAccount(Request $oRequest,$userId,$code){

        $message=trans('PleaseTryAgain');
        $user = Sentinel::findById($userId);

        if (Activation::complete($user,$code)) {
            // Reminder was successfull


            $assignMt4UsresByEmail=$this->oMt4User->getMt4UsersByEmail($user);

            return Redirect::route('client.auth.login');
        }



        return view('client.user.activateAccountResult')
            ->with('random', rand(1, 3))
            ->withErrors($message);
    }

    function postResendActivateEmail(Request $oRequest,$userId,$code){

        $oUser = Sentinel::findById($userId);
        $oActivation = Activation::create($oUser);



        $oEmail = new Email;
        @$oEmail->activeAccount(['email'=>$oUser->email,
            'code'=>$oActivation->code,
            'userId'=>$userId,
            'website'=>$oRequest->root()
        ]);

        return view('client.user.activateAccountResult')
            ->with('random', rand(1, 3));
    }


    public function getFacebookLogin()
    {

        Social::addConnection(Config('project.facebookLoginProvider'), [
                'driver' => Config('project.facebookLoginDriver'),
                'identifier' => Config('project.facebookLoginIdentifier'),
                'app_id' => Config('project.facebookLoginApp_id'),
                'secret' => Config('project.facebookLoginSecret'),
                'scopes' => ['email'],
            ]
        );
        $callback =Config('project.facebookLoginCallback');
        $url = Social::getAuthorizationUrl('facebook', $callback);
        header('Location: ' . $url);
        exit;
    }

    public function getFacebookLoginCallback(\Illuminate\Support\Facades\Request $oRequest)
    {
        $callback =Config('project.facebookLoginCallback');
        Social::addConnection(Config('project.facebookLoginProvider'), [
                'driver' => Config('project.facebookLoginDriver'),
                'identifier' => Config('project.facebookLoginIdentifier'),
                'app_id' => Config('project.facebookLoginApp_id'),
                'secret' => Config('project.facebookLoginSecret'),
                'scopes' => ['email'],
            ]
        );
        try {
            $user = Social::authenticate('facebook', $callback, function (LinkInterface $link, $provider, $token, $slug) {

                $user = $link->getUser();

                $data = $provider->getUserDetails($token);

                $user->save();

                Sentinel::login($user);
                if (!$user->inRole('client')) {
                    $activation = Activation::create($user);
                    $activation_code = $activation->code;
                    $role = Sentinel::findRoleByName('client');
                    $role->users()->attach($user);

//                    $aCredentialsFullDetails = [
//                        'users_id' => $user->id,
//                        'nickname' => (isset($data->nickname)) ? $data->nickname : '',
//                        'address' => (isset($data->location)) ? $data->location : '',
//                        'birthday' => (isset($data->birthday)) ? $data->birthday : ' ',
//                        'phone' => (isset($data->phone)) ? $data->phone : ' ',
//                        'country' => (isset($data->country)) ? $data->country : ' ',
//                        'city' => (isset($data->city)) ? $data->city : ' ',
//                        'zip_code' => (isset($data->zip_code)) ? $data->zip_code : ' ',
//                        'gender' => (isset($data->gender) && $data->gender == 'female') ? 1 : 0
//                    ];
//                    $details = new UsersDetails($aCredentialsFullDetails);
//                    $details->save();
                }
            });
        } catch (Cartalyst\Sentinel\Addons\Social\AccessMissingException $e) {

            return redirect()
                ->route('client.auth.login')
                ->withErrors([trans('user.InvalidLogin')]);
        }catch(Cartalyst\Sentinel\Addons\Social\InvalidArgumentException $e){

        }
        return Redirect::intended('/users');
    }

    public function getGoogleLogin()
    {

        Social::addConnection(Config('project.googleProvider'), [
                'driver' => Config('project.googleDriver'),
                'identifier' => Config('project.googleIdentifier'),
                'secret' => Config('project.googleSecret'),
                'scopes' => ['email'],
            ]
        );

        $callback =Config('project.googleCallback');
        $url = Social::getAuthorizationUrl('google', $callback);


        header('Location: ' . $url);
        exit;
    }

    public function getGoogleLoginCallback(\Illuminate\Support\Facades\Request $oRequest)
    {

        $callback = Config('project.googleCallback');
        Social::addConnection(Config('project.googleProvider'), [
                'driver' => Config('project.googleDriver'),
                'identifier' => Config('project.googleIdentifier'),
                'secret' => Config('project.googleSecret'),
                'scopes' => ['email'],
            ]
        );
        try {

            $user = Social::authenticate('google', $callback, function (LinkInterface $link, $provider, $token, $slug) {

                $user = $link->getUser();
                $data = $provider->getUserDetails($token);
                $user->save();

                if (!$user->inRole('client')) {
                    $activation = Activation::create($user);
                    $activation_code = $activation->code;
                    $role = Sentinel::findRoleByName('client');
                    $role->users()->attach($user);

//                    $aCredentialsFullDetails = [
//                        'users_id' => $user->id,
//                        'nickname' => (isset($data->nickname)) ? $data->nickname : '',
//                        'address' => (isset($data->location)) ? $data->location : '',
//                        'birthday' => (isset($data->birthday)) ? $data->birthday : ' ',
//                        'phone' => (isset($data->phone)) ? $data->phone : ' ',
//                        'country' => (isset($data->country)) ? $data->country : ' ',
//                        'city' => (isset($data->city)) ? $data->city : ' ',
//                        'zip_code' => (isset($data->zip_code)) ? $data->zip_code : ' ',
//                        'gender' => (isset($data->gender) && $data->gender == 'female') ? 1 : 0
//                    ];
//
//                    $details = new UsersDetails($aCredentialsFullDetails);
//                    $details->save();
                }
            });
        } catch (Cartalyst\Sentinel\Addons\Social\AccessMissingException $e) {
            return redirect()
                ->route('client.auth.login')
                ->withErrors([trans('user.InvalidLogin')]);
        }
        return Redirect::intended('/users');
    }

    public function getLinkedinLogin()
    {


        Social::addConnection(Config('project.linkedinProvider'), [
                'driver' => Config('project.linkedinDriver'),
                'identifier' =>Config('project.linkedinIdentifier'),
                'secret' => Config('project.linkedinSecret'),
            ]
        );

        $callback = Config('project.linkedinCallback');
        $url = Social::getAuthorizationUrl('linkedin', $callback);
        header('Location: ' . $url);
        exit;
    }

    public function getLinkedinLoginCallback(\Illuminate\Support\Facades\Request $oRequest)
    {

        $callback = Config('project.linkedinCallback');


        Social::addConnection(Config('project.linkedinProvider'), [
                'driver' => Config('project.linkedinDriver'),
                'identifier' =>Config('project.linkedinIdentifier'),
                'secret' => Config('project.linkedinSecret'),
            ]
        );
        try {

            $user = Social::authenticate('linkedin', $callback, function (LinkInterface $link, $provider, $token, $slug) {

                $user = $link->getUser();
                $data = $provider->getUserDetails($token);
                $user->save();

                if (!$user->inRole('client')) {
                    $activation = Activation::create($user);
                    $activation_code = $activation->code;
                    $role = Sentinel::findRoleByName('client');
                    $role->users()->attach($user);

//                    $aCredentialsFullDetails = [
//                        'users_id' => $user->id,
//                        'nickname' => (isset($data->nickname)) ? $data->nickname : '',
//                        'address' => (isset($data->location)) ? $data->location : '',
//                        'birthday' => (isset($data->birthday)) ? $data->birthday : ' ',
//                        'phone' => (isset($data->phone)) ? $data->phone : ' ',
//                        'country' => (isset($data->country)) ? $data->country : ' ',
//                        'city' => (isset($data->city)) ? $data->city : ' ',
//                        'zip_code' => (isset($data->zip_code)) ? $data->zip_code : ' ',
//                        'gender' => (isset($data->gender) && $data->gender == 'female') ? 1 : 0
//                    ];
//
//                    $details = new UsersDetails($aCredentialsFullDetails);
//                    $details->save();
                }
            });
        } catch (Cartalyst\Sentinel\Addons\Social\AccessMissingException $e) {
            return redirect()
                ->route('client.auth.login')
                ->withErrors([trans('user.InvalidLogin')]);
        }
        return Redirect::intended('/users');
    }

//    public function getTwitterLogin()
//    {
//
//
//        Social::addConnection('twitter', [
//                'driver' => 'twitter',
//                'identifier' => 'ls4If9Mewb28kKF8DtjgBw7Os',
//                'secret' => 'OhjvkSm7P4yHEJ89FpHsChCWhgTwO9Xp5QT9kvkZx5G6I4sw82',
//                'scopes' => [],
//            ]
//        );
//
//        $callback = 'http://localhost:8000/client/twitter-callback-login';
//        $url = Social::getAuthorizationUrl('twitter', $callback);
//        header('Location: ' . $url);
//        exit;
//    }
//
//    public function getTwitterLoginCallback(\Illuminate\Support\Facades\Request $oRequest)
//    {
//
//        $callback = 'http://localhost:8000/client/twitter-callback-login';
//
//
//        Social::addConnection('twitter', [
//                'driver' => 'twitter',
//                'identifier' => 'ls4If9Mewb28kKF8DtjgBw7Os',
//                'secret' => 'OhjvkSm7P4yHEJ89FpHsChCWhgTwO9Xp5QT9kvkZx5G6I4sw82',
//                'scopes' => [],
//            ]
//        );
//        try {
//
//            $user = Social::authenticate('twitter', $callback, function (LinkInterface $link, $provider, $token, $slug) {
//
//                $user = $link->getUser();
//                $data = $provider->getUserDetails($token);
//                $user->save();
//
//                if (!$user->inRole('client')) {
//                    $activation = Activation::create($user);
//                    $activation_code = $activation->code;
//                    $role = Sentinel::findRoleByName('client');
//                    $role->users()->attach($user);
//
//                    $aCredentialsFullDetails = [
//                        'users_id' => $user->id,
//                        'nickname' => (isset($data->nickname)) ? $data->nickname : '',
//                        'address' => (isset($data->location)) ? $data->location : '',
//                        'birthday' => (isset($data->birthday)) ? $data->birthday : ' ',
//                        'phone' => (isset($data->phone)) ? $data->phone : ' ',
//                        'country' => (isset($data->country)) ? $data->country : ' ',
//                        'city' => (isset($data->city)) ? $data->city : ' ',
//                        'zip_code' => (isset($data->zip_code)) ? $data->zip_code : ' ',
//                        'gender' => (isset($data->gender) && $data->gender == 'female') ? 1 : 0
//                    ];
//
//                    $details = new UsersDetails($aCredentialsFullDetails);
//                    $details->save();
//                }
//            });
//        } catch (Cartalyst\Sentinel\Addons\Social\AccessMissingException $e) {
//            return redirect()
//                ->route('client.auth.login')
//                ->withErrors([trans('user.InvalidLogin')]);
//        }
//        return Redirect::intended('/client');
//    }




}
