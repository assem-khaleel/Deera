<?php

namespace App\Http\Controllers\website\users;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

use Illuminate\Http\JsonResponse;

use App\Http\Requests\website\users\createRequest;
use App\Http\Requests\website\users\editRequest;


use App\Models\Users as mUsers;
use App\Repositories\website\users\UsersContract as rUsers;
use App\Repositories\admin\users\UsersContract as rAdmenUsers;
use App\Repositories\website\area\AreaContract as rArea;
use App\Repositories\website\address\AddressContract as rAddress;
use App\Repositories\website\order\OrderContract as rOrder;


use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

use Cartalyst\Sentinel\Laravel\Facades\Reminder;
use App\Models\User;

class Users extends Controller
{


    public function __construct()
    {
    }


    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request, rUsers $rUsers, rAddress $rAddress, rOrder $rOrder, rArea $rArea)
    {
        $oUsers = $rUsers->show(current_user()->getUser()->id);
        $request->merge(['users_id' => current_user()->getUser()->id]);


        $oAddress = [];
        if (isset($request->selected_address_id)) {
            $oAddress = $rAddress->show($request->selected_address_id);
        }


        $oAddressResults = $rAddress->getByFilter($request->all());
        $oOrderResults = $rOrder->getByFilter($request->all());

        $areaList = $rArea->getAllList($request);
        return view('website.users.account',
            compact('request', 'oUsers', 'oAddressResults', 'oOrderResults', 'oAddress', 'areaList'));
    }

    /**
 * user orders
 *
 */
    public function myOrder(Request $request, rUsers $rUsers, rAddress $rAddress, rOrder $rOrder, rArea $rArea)
    {

        $request->merge(['users_id' => current_user()->getUser()->id]);


        $oOrderResults = $rOrder->getByFilter($request->all());

        return view('website.users.myOrder',
            compact('request', 'oOrderResults'));
    }

    /**
     * popup order steps
     *
     */
    public function orderStep(Request $request, rOrder $rOrder)
    {
        $request->merge(['users_id' => current_user()->getUser()->id]);


        $oOrderResult = $rOrder->show($request->order_id);

        return view('website.users.orderStep',
            compact('request', 'oOrderResult'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create(Request $request, rArea $rArea)
    {

        $areaList = $rArea->getAllList();
        return view('website.users.create', compact('request', 'areaList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request, rAdmenUsers $rUsers, rAddress $rAddress,rOrder $rOrder)
    {
        $credentials = [

            'email' => $request->email,
            'password' => $request->password,

            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'Country'=>$request->Country,


        ];

        $user = Sentinel::registerAndActivate($credentials);


        $role = Sentinel::findRoleByName('client');
        $role->users()->attach($user);


//        $role2 = Sentinel::findRoleByName('guest');
//        $role2->users()->attach($user);

        Sentinel::login($user);

        $mUsers=mUsers::find($user->id);
        $mUsers->update(['Country'=>$request->Country,'phone'=>$request->phone,'gender'=>$request->gender,'area_id'=>$request->area_id,'birth_day'=>$request->birth_day]);


        if(isset($request->order_id)){
            $rOrder->update($request->order_id,['users_id'=>$user->id]);

            return Redirect::to( '/order?order_id='.$request->order_id);
        }

        if($request->ajax()){


            return new JsonResponse(trans('api.success'),200);
        } else {

            Session::flash('flash_success', trans('website.registerThanks'));


        //    $oCode=\DB::table('activations')->where('user_id','=',current_user()->getUser()->id)->first();
            return Redirect::to('/users/create?email='.$request->email.'&password='.$request->password);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return void
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return void
     */
    public function edit($id)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     *
     * @return void
     */
    public function update($id, editRequest $request, rUsers $rUsers)
    {
        $id = current_user()->getUser()->id;


        $tempRequest=$request;

            if($request->password == ''){
                $tempRequest=$request->except(['password']);
            }else{
                $request->merge(['password'=>password_hash($request->password,PASSWORD_DEFAULT)]);
                $tempRequest=$request;
            }

       $result = $rUsers->update($id, $tempRequest);



       if ($request->ajax()) {
            return new JsonResponse(trans('api.success'), 200);
        } else {
           return redirect('/users');
     }
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return void
     */
    public function destroy($id)
    {

    }


    public function createGuestUser(){
current_user()->greatGestUser();

        $oCode=\DB::table('activations')->where('user_id','=',current_user()->getUser()->id)->first();

        echo json_encode(['status'=>'success','token'=>$oCode->code,'redirect'=>route('users.index')]);//exit();
    }

}
