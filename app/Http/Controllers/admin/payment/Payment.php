<?php

namespace App\Http\Controllers\admin\payment;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\payment\createRequest;
use App\Http\Requests\admin\payment\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

use App\Models\Coffee as mCoffee;

use App\Models\Payment as mPayment;
use App\Repositories\admin\payment\PaymentContract as rPayment;

use App\Repositories\admin\order\OrderContract as rOrder;
use App\Models\Order as mOrder;
use App\Repositories\admin\users\UsersContract as rUsers;
use App\Repositories\admin\shop\ShopContract as rRestaurnat;
use App\Repositories\admin\area\AreaContract as rArea;
use App\Repositories\admin\voucher\VoucherContract as rVoucher;
use App\Repositories\admin\voucher_users\VoucherUsersContract as rVoucherUsers;


use App\Models\Knet as mKnet;
use App\Repositories\admin\knet\KnetContract as rKnet;


use Barryvdh\DomPDF\Facade as PDF;


class Payment extends Controller
{
    private $rPayment;

    public function __construct(rPayment $rPayment)
    {
        $this->rPayment = $rPayment;
    }

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request,rRestaurnat $rRestaurnat,rArea $rArea,rUsers $rUsers)
    {


        $this->rPayment->exportExcel($request);

        $statistic = [];
        $oResults = $this->rPayment->getByFilter($request, $statistic);
        $shopList=$rRestaurnat->getAllList();
        $areaList=$rArea->getAllList();
        $usersList=$rUsers->getAllList(['users_type'=>config('array.users_type_registered_index')]);

        return view('admin.payment.index', compact('oResults', 'request', 'statistic','shopList','areaList','usersList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request, rOrder $rOrder, rUsers $rUsers)
    {

        $orderList = $rOrder->getAllList();
        $usersList = $rUsers->getAllList();

        return view('admin.payment.create', compact('request', 'orderList', 'usersList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults = $this->rPayment->create($request->all());

        return redirect('admin/payment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return view
     */
    public function show($id, Request $request)
    {


        $payment = $this->rPayment->show($id);
        $request->merge(['payment_id' => $id, 'page_name' => 'page']);


        return view('admin.payment.show', compact('payment', 'request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return view
     */
    public function edit($id, rOrder $rOrder, rUsers $rUsers)
    {


        $payment = $this->rPayment->show($id);


        $orderList = $rOrder->getAllList();
        $usersList = $rUsers->getAllList();
        return view('admin.payment.edit', compact('payment', 'orderList', 'usersList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     *
     * @return redirect
     */
    public function update($id, editRequest $request)
    {

        $result = $this->rPayment->update($id, $request);

        return redirect('admin/payment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return redirect
     */
    public function destroy($id)
    {
        $payment = $this->rPayment->destroy($id);
        return redirect('admin/payment');
    }



    public function getKnetSuccess(Request $request,rKnet $rKnet,rOrder $rOrder,rVoucher $rVoucher,rVoucherUsers $rVoucherUsers){
        $oPayment=mPayment::where('module_id','=',$request->PaymentID)->first();
        $oPayment->status=config('array.payment_status_completed_index');
        $oPayment->save();


  $oOrders=mOrder::where(['id'=>$oPayment->order_id])->get();

if(!isset(current_user()->getUser()->id)){
  $oUser = Sentinel::findById($oOrders->first()->users_id);

                 Sentinel::login($oUser);

}
//if need success genrator 
//,'create_success_order_id'=>1
  $rOrder->update($oPayment->order_id,[ "status" => config('array.order_status_payed_index'),'create_success_order_id'=>1] );



        $oVoucher=$rVoucher->show($oPayment->voucher_id);
        if($oVoucher){
            $newVoucherCurrentAmount=$oVoucher->current_amount - $oPayment->voucher_amount;
            $newVoucherCurrentAmount=($oVoucher->type ==config('array.voucher_type_percentage_index') )? 0:$newVoucherCurrentAmount;
//            $updateResult=$rVoucher->update($oPayment->voucher_id,['current_amount'=>($newVoucherCurrentAmount<0? 0:$newVoucherCurrentAmount )]);

            $updateVoucherResult=$rVoucher->update($oPayment->voucher_id,['used_number'=>$oVoucher->used_number+1]);
            $updateVoucherUsersResult=$rVoucherUsers->create(['voucher_id'=>$oVoucher->id,'users_id'=>current_user()->getUser()->id,'order_id'=>$oPayment->order_id]);

        }




        $oOrders=mOrder::where(['id'=>$oPayment->order_id])->get();

if(isset($oOrders->first()->cart) && count($oOrders->first()->cart)){
    foreach($oOrders->first()->cart as $oneCart){
        $oneCartCoffee=$oneCart->coffee;

        $newQuantity=$oneCartCoffee->quantity - $oneCart->quantity ;
        $newQuantity=($newQuantity <0)?0:$newQuantity;
        mCoffee::where('id','=',$oneCart->coffee_id)->update(['quantity'=>$newQuantity]);
    }
}

//website.payment.knet.success_email

        \Mail::send('website.cart.receiptInlineCss', ['oOrders'=>$oOrders,'request'=>$request,'oPayment'=>$oPayment], function($message) use ($oPayment)
        {

            $message->from('info@cofedistrict.com', 'Cofe District | Order Confirmation | Order no. '.$oPayment->order_id)->subject('CofeDistrict - Success Order');
    
         
            $userEmail=(current_user()->getUser()->type == config('array.users_type_guest_index') && current_user()->getUser()->guest_email != '')? current_user()->getUser()->guest_email: current_user()->getUser()->email;
            $message->to($userEmail);

        });



        $request->merge([
            'payment_id'=>$oPayment->id,
            'users_id'=>current_user()->getUser()->id,
            'order_id'=>$oOrders->first()->success_order_id,
            'amount'=>$oPayment->amount,
        ]);

        $oCreatKnetResults=mKnet::where(['PaymentID'=>$request->PaymentID])->update(          [

            'payment_id'=>$oPayment->id,
            'users_id'=>current_user()->getUser()->id,
            'order_id'=>$oOrders->first()->success_order_id,
            'amount'=>$oPayment->amount,

            "PaymentID" =>$request->PaymentID,
            "Result" =>$request->Result,
            "PostDate" =>$request->PostDate,
            "TranID" =>$request->TranID ,
            "Auth" =>$request->Auth ,
            "Ref" =>$request->Ref ,
            "TrackID" =>$request->TrackID ,
            "UDF1" =>$request->UDF1 ,
            "UDF2" =>$request->UDF2 ,
            "UDF3" =>$request->UDF3 ,
            "UDF4" =>$request->UDF4 , "UDF5" =>$request->UDF5 ,
        ]);


        return redirect('/cart?order_id='.$oPayment->order_id);
        return view('website.payment.knet.success', compact('request', 'oPayment'));
        return  Redirect::to('/payment-thank');
    }
    public function getKnetError(Request $request,rKnet $rKnet){

        $oPayment=mPayment::where('module_id','=',$request->PaymentID)->first();


        $request->merge([
            'payment_id'=>$oPayment->id,
            'users_id'=>current_user()->getUser()->id,
            'order_id'=>$oPayment->order_id,
            'amount'=>$oPayment->amount,
        ]);

        $oCreatKnetResults=mKnet::where(['PaymentID'=>$request->PaymentID])->update(
            [

                'payment_id'=>$oPayment->id,
                'users_id'=>current_user()->getUser()->id,
                'order_id'=>$oPayment->order_id,
                'amount'=>$oPayment->amount,

                "PaymentID" =>$request->PaymentID,
                "Result" =>$request->Result,
                "PostDate" =>$request->PostDate,
                "TranID" =>$request->TranID ,
                "Auth" =>$request->Auth ,
                "Ref" =>$request->Ref ,
                "TrackID" =>$request->TrackID ,
                "UDF1" =>$request->UDF1 ,
                "UDF2" =>$request->UDF2 ,
                "UDF3" =>$request->UDF3 ,
                "UDF4" =>$request->UDF4 , "UDF5" =>$request->UDF5 ,
            ]
        );


        return view('website.payment.knet.error', compact('request', 'oPayment'));
//        return  Redirect::to('/payment-error');
//        dd($request->PaymentID);

    }
    public function getKnetResponse(Request $request){

        /*Created by saqib  18-08-2009*/
        $PaymentID =isset($request->paymentid)? $request->paymentid:'';// $_POST['paymentid'];
        $presult =isset($request->result)? $request->result:'';//  $_POST['result'];
        $postdate = isset($request->postdate)? $request->postdate:'';// $_POST['postdate'];
        $tranid = isset($request->tranid)? $request->tranid:'';// $_POST['tranid'];
        $auth = isset($request->auth)? $request->auth:'';// $_POST['auth'];
        $ref =isset($request->ref)? $request->ref:'';//  $_POST['ref'];
        $trackid = isset($request->trackid)? $request->trackid:'';// $_POST['trackid'];
        $udf1 = isset($request->udf1)? $request->udf1:'';// $_POST['udf1'];
        $udf2 = isset($request->udf2)? $request->udf2:'';// $_POST['udf2'];
        $udf3 = isset($request->udf3)? $request->udf3:'';// $_POST['udf3'];
        $udf4 =isset($request->udf4)? $request->udf4:'';//  $_POST['udf4'];
        $udf5 =isset($request->udf5)? $request->udf5:'';//  $_POST['udf5'];

        /*******************************************************************
        /*******************************************************************

        Use the payment ID or Merchant Tracking ID to fetch the transaction
        data from Merchant database.

        If Payment ID not found in database, redirect customer to error URL

        echo "REDIRECT=https://www.yourdomain.com/error.php"

        We will use Payment ID here to match the transaction response with request

        If payment ID Not Equal to stored payment ID, output REDIRECT=<Error URL>
        and log error payment ID not found if desired. Payment Gateway shall
        process the output and redirect the customer accordingly
        This step is not really necessary if you have used Payment ID to fetch
        the transaction data from database.

        If (PaymentID != PaymentID) Then

        echo "REDIRECT=https://www.yourdomain.com/error.php"

        You need to check that the track ID is the same also for more authentication
        If it was mismatch, send customer to error page
        In production, you must also ensure you have not received two responses
        for the same Payment ID Or Tracking ID

        elseIf (TrackID !== TrackID)
        echo "REDIRECT=https://www.yourdomain.com/error.php";

         */


        if ( $presult == "CAPTURED" )
        {
            $result_url =config('knet.success_link');

            $result_params = "?PaymentID=" . $PaymentID . "&Result=" . $presult . "&PostDate=" . $postdate . "&TranID=" . $tranid . "&Auth=" . $auth . "&Ref=" . $ref . "&TrackID=" . $trackid . "&UDF1=" . $udf1 . "&UDF2=" .$udf2  . "&UDF3=" . $udf3  . "&UDF4=" . $udf4 . "&UDF5=" . $udf5  ;

            /*******************************************************************
            /*******************************************************************

            Merchant must send the email to customer containing all the transaction details if the transactino was successfull

             */
        }
        else
        {
            $result_url = config('knet.error_link');
            $result_params = "?PaymentID=" . $PaymentID . "&Result=" . $presult . "&PostDate=" . $postdate . "&TranID=" . $tranid . "&Auth=" . $auth . "&Ref=" . $ref . "&TrackID=" . $trackid . "&UDF1=" . $udf1 . "&UDF2=" .$udf2  . "&UDF3=" . $udf3  . "&UDF4=" . $udf4 . "&UDF5=" . $udf5  ;

        }
        return "REDIRECT=".$result_url.$result_params;


        /*******************************************************************
        /*******************************************************************
        You must Update the database with the result of the transaction in this page only for the security reasons as this page is called by Knet PG to pass the data and the user has not interaction with it.
        save the data in the later / receipt page will lead to data forgery.

         */





    }
}
