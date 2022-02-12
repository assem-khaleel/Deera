<?php

namespace App\Http\Controllers\website\users;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Session;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Order as mOrder;
use App\Models\Cart as mCart;
use App\Models\Payment as mPayment;
use App\Models\Coffee as mCoffee;
use App\Models\Shop as mShop;
use App\Models\Users as mUsers;
use App\Models\CartProductOption as mCartProductOption;
use App\Models\VoucherUsers as mVoucherUsers;

use App\Repositories\website\order\OrderContract as rOrder;
use App\Repositories\website\area\AreaContract as rArea;
use App\Repositories\website\coffee\CoffeeContract as rCoffee;
use App\Repositories\website\cart\CartContract as rCart;
use App\Repositories\website\address\AddressContract as rAddress;
use App\Repositories\website\shop\ShopContract as rShop;
use App\Repositories\website\operation_hour\OperationHourContract as rOperationHour;
use App\Repositories\website\payment\PaymentContract as rPayment;

use App\Repositories\website\voucher\VoucherContract as rVoucher;
use App\Repositories\admin\voucher_users\VoucherUsersContract as rVoucherUsers;

use Illuminate\Support\Facades\DB;


use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class Order extends Controller
{

    private $rOrder;
    private $rCoffee;
    private $rCart;
    private $rAddress;
    private $rVoucher;
    private $rVoucherUsers;

    public function __construct(rOrder $rOrder, rCoffee $rCoffee, rCart $rCart,rAddress $rAddress,rVoucher $rVoucher, rVoucherUsers $rVoucherUsers)
    {
        $this->rOrder = $rOrder;
        $this->rCoffee = $rCoffee;
        $this->rCart = $rCart;
        $this->rAddress = $rAddress;
        $this->rVoucher=$rVoucher;
        $this->rVoucherUsers=$rVoucherUsers;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request,rOrder $rOrder) {


//dd($request->selected_day,$request->selected_date,$request->selected_time);
        if (!isset($request->order_id)) {return Redirect::back();  }

        $oOrder = $rOrder->show($request->order_id);


        $inputData=[

            'order_id'=>$request->order_id,
            'selected_date'=>isset($request->selected_date)?$request->selected_date:null,
            'selected_time'=>isset($request->selected_time)? $request->selected_time:null,
            'selected_day'=>isset($request->selected_day)? $request->selected_day:null,
            'pickupTime'=>isset($request->pickupTime)? $request->pickupTime:null,
            'timeType'=>isset($request->timeType)? $request->timeType:null,
            'note'=>isset($request->note)? $request->note:null,
            'payment_type'=>isset($request->payment_type)? $request->payment_type:null,
            'selected_address_id'=>isset($request->selected_address_id)? $request->selected_address_id:null,
            'branch'=>isset($request->branch)? $request->branch:null,
            'voucher'=>isset($request->voucher)? $request->voucher:null,

        ];


        $data=$this->getOrderRenderData($inputData,$oOrder);

if(isset($request->users_email) && $request->users_email != ''){
    
    mUsers::find(current_user()->getUser()->id)->update([
        'guest_email'=>$request->users_email,
        'first_name'=>$request->users_name,
        'phone'=>$request->users_phone,]);
}

        $validationErrors=[];

        if (isset($request->proceedToPayment) ) {



            $validationErrors=$this->getValidationErrors($data);

            if(true || count($validationErrors) == 0){

                $this->confirmOrder($oOrder,$data);
                $initPaymentId=$this->initPayment($oOrder,$data);


                if($inputData['payment_type']==config('array.payment_type_knet_index')){

                    $knet= new \App\Http\Controllers\common\payment\knet\Knet();


                    //   $url= $knet->makePayment(($data['subTotal']-$data['totalDiscount']),$inputData['order_id']);
                    $payment_id=0;

                    $voucher_discount=0;
                    $voucher_id=0;
                    if(isset($request->voucher)){
                        $voucher_discount= $this->updateVoucherValue($request->voucher,($data['subTotal']+$data['deliver_charge']));

                        $voucher=$this->checkVoucher($request->voucher);
                        $voucher_id=($voucher)? $voucher->id:0;
                    }
                    list($url,$payment_id)= $knet->makePayment($data['pickupTotal'],$inputData['order_id']);


                    //  return Redirect::to('http://fintolog.com/knet');
                    mPayment::where('id','=',$initPaymentId)->update(['module_id'=>$payment_id,'voucher_amount'=>$voucher_discount,'voucher_id'=>$voucher_id]);

                    if(isset($request->voucher)){
                        $this->updateVoucherValue($request->voucher,($data['subTotal']+$data['deliver_charge']));
                    }


                    return Redirect::to($url);
                }else if($request->payment_type==config('array.payment_type_cash_index')){
            return redirect('/cashon/'.$request->order_id);
            }
                if($inputData['payment_type']==config('array.payment_type_voucher_index')){

                    mPayment::where('id','=',$initPaymentId)->update(['status'=>config('array.payment_status_completed_index')]);

                }
                return Redirect::to('/my-order');
            }

        }


        if(!isset($request->selected_address_id)){
            $request->merge(['selected_address_id'=>$data['selected_address_id']]);
        }

        return view('website.users.order',compact('oOrder', 'request'))->with($data)->withErrors($validationErrors);
    }
    /**
     * todo this function for one order and one date
     *
     * @return void
     */
    public function xxx_oneDateForOneOrder(Request $request,rOrder $rOrder) {

//dd($request->selected_day,$request->selected_date,$request->selected_time);
        if (!isset($request->order_id)) {return Redirect::back();  }


        $oOrder = $rOrder->show($request->order_id);
        $inputData=[

            'order_id'=>$request->order_id,
            'selected_date'=>isset($request->selected_date)?$request->selected_date:null,
            'selected_time'=>isset($request->selected_time)? $request->selected_time:null,
            'timeType'=>isset($request->timeType)? $request->timeType:null,
            'note'=>isset($request->note)? $request->note:null,
            'payment_type'=>isset($request->payment_type)? $request->payment_type:null,
            'selected_address_id'=>isset($request->selected_address_id)? $request->selected_address_id:null,
            'pickupTime'=>isset($request->pickupTime)?$request->pickupTime:null,

        ];



        $data=$this->getOrderRenderData($inputData,$oOrder);



        $validationErrors=[];

        if (isset($request->proceedToPayment) ) {

            $validationErrors=$this->getValidationErrors($data);

            if(count($validationErrors) == 0){
                $this->confirmOrder($oOrder,$data);
                $this->initPayment($oOrder,$data);
                return Redirect::to('/my-order');
            }

        }


        if(!isset($request->selected_address_id)){
            $request->merge(['selected_address_id'=>$data['selected_address_id']]);
        }

        return view('website.users.order',compact('oOrder', 'request'))->with($data)->withErrors($validationErrors);
    }
    /*_________________________________________________________________________________validation__*/

    public function validateDeliverInArea(&$data){
        $errors=[];

        if (array_key_exists($data['selected_area_id'], $data['allAreaAvailableDayTime'])) {

            return true;
        }

        $errors=[
            'messages'=>[trans('website.validateDeliverInArea')],
            'data'=>[
                'areaId'=>$data['selected_area_id'],
            ]

        ];

        return $errors;
    }

    public function validateDate(&$data){

        $errors=[];

        if (array_key_exists($data['selected_area_id'], $data['allAreaAvailableDayTime'])) {
            $dayOfWeek = date('w', strtotime( $data['selected_date']));

            $areaDateData = $data['allAreaAvailableDayTime'][$data['selected_area_id']];

            $fromDate=$data['current_date'];
            $toDate=$fromDate;

            if($data['offline_order']){
                $toDate=date('Y-m-d', strtotime($fromDate. ' + '.$data['order_accept_days'].' day'));
            }

            if  (in_array($dayOfWeek,$areaDateData['days']) && $fromDate<= $data['selected_date'] &&  $toDate>= $data['selected_date']) {
                return true;
            }
        }


        $errors=[
            'messages'=>[trans('website.validateDate').'( '.$data['selected_date'].' )'],
            'data'=>[
                'date'=> $data['selected_date'],
                'order_accept_days'=> $data['order_accept_days'],
            ]

        ];
        return $errors;
    }

    public function validateTime(&$data){
        $errors=[];

        if (array_key_exists($data['selected_area_id'], $data['allAreaAvailableDayTime'])) {

            $areaDateData = $data['allAreaAvailableDayTime'][$data['selected_area_id']];
            if (  ($areaDateData['from'] <= $data['selected_time'] && $areaDateData['to'] >= $data['selected_time'])) {
                return true;
            }
        }else{
            return true;
        }


        $errors=[
            'messages'=>[trans('website.validateTime').'('.$data['selected_time'].' ) the allowed time ('.$areaDateData['from'] .' - '.$areaDateData['to'] .')'],
            'data'=>[
                'time'=> $data['selected_time'],
                'from'=>$areaDateData['from'],
                'to'=>$areaDateData['to'],
            ]

        ];
        return $errors;
    }

    public function validateClose(&$data){
        $errors=[];
        if($data['shop_status'] ==  config('array.shop_status_open_index') || $data['offline_order'] == config('array.shop_offline_order_enable_index')){
            return true;
        }

        $errors=[
            'messages'=>[trans('website.validateClose')],
            'data'=>[
                'shop_status'=> $data['shop_status'],
            ]

        ];
        return $errors;
    }

    public function validateMinimumAmount(&$data){

        $errors=[];

        if (array_key_exists($data['selected_area_id'], $data['allAreaMinAmount'])) {

            $areaMinAmountData = $data['allAreaMinAmount'][$data['selected_area_id']];
            if (  $areaMinAmountData['min_amount'] <= $data['subTotal'] ) {
                return true;
            }
        }else{

            return true;
        }

        $errors=[
            'messages'=>[trans('website.validateMinimumAmount').' ( '.$areaMinAmountData['min_amount'].' )'],
            'data'=>[
                'min_amount'=>$areaMinAmountData['min_amount']
            ]

        ];
        return $errors;

    }

    public function validateAvailableQuantity(&$data){
        $errors=[];

        foreach($data['allItemData'] as $itemId=>$itemData){
            if($itemData['quantity']  > $itemData['availableQuantity'] ){
                $errors['messages']=[trans('website.validateAvailableQuantity').' ( '.$itemData['name'] .' ) '];
                $errors['data']['products'][]=$itemId;
            }
        }


        return (count($errors))?$errors:true;
    }

    public function validateAvailableItemDate(&$data){
        $errors=[];

        foreach($data['allItemData'] as $itemId=>$itemData){
            if($data['selected_date'] < $itemData['available_from'] || $data['selected_date']  > $itemData['available_to'] ){
                $errors['messages']=[trans('website.validateAvailableItemDate').' ( '.$itemData['name'].' - '.$itemData['available_from']. ' - '.$itemData['available_to'].'  ) '];
                $errors['data']['products'][]=$itemId;
            }
        }

        return (count($errors))?$errors:true;
    }


    /*________________________________________________________________________END_________validation__*/



    /*_________________________________________________________________________________data__*/



    public function getOrderRenderData($inputData,$oOrder){
        if($inputData['timeType'] =='now'){

            $inputData['selected_date'] = gmdate('Y-m-d') ;
            $inputData['selected_time'] = gmdate('H:i')  ;
        }else if($inputData['timeType'] =='pickup'){
          //  $inputData['timeType'] ='now';

            $inputData['selected_date'] = gmdate('Y-m-d') ;

            $now = time();

            $inputData['selected_time'] = array_key_exists('pickupTime',$inputData)?  date("H:i:s", strtotime('+'.'180'.' minutes', $now)):gmdate('H:i') ;//$inputData['pickupTime']

        }







        $oAddressResults = $this->rAddress->getByFilter(['users_id' => current_user()->getUser()->id,'getAllRecords' => 1]);

        list($addressId,$addressList)=$this->getSelectedAddressId($inputData['selected_address_id'],$oAddressResults);

        $selected_area_id=$this->getSelectedAreaId($addressId,$oAddressResults);
        list($total,$totalDiscount)=$this->countTotalWithDiscount($oOrder);


        list($allAreaCharge,$deliver_charge,$site_charge)= $this->areaCharge($oOrder->shop,$selected_area_id);




        list($aBranchList,$aBranchServiceChargeList)=$this->getBranchList($oOrder->shop);


        $data = [
            /* user input */
            'selected_area_id' => $selected_area_id,
            'selected_date' => $inputData['selected_date'],


            'selected_time' => $inputData['selected_time'],
            'pickup_period'=>$inputData['pickupTime'],

            'selected_day'=>$inputData['selected_day'],
            'timeType'=>$inputData['timeType'],
            'branch'=>$inputData['branch'],

            'subTotal'=>$total,
            'totalDiscount'=>$totalDiscount,

            "address_id" => $addressId,
            'customer_note'=>$inputData['note'],
            'payment_type'=>$inputData['payment_type'],
            'selected_address_id'=>$addressId,
            'addressList'=>$addressList,
            /* date data */

            'current_day_index' => date('w'),
            'current_hour' => date('H:i'),
            'current_date' => date('Y-m-d'),
            'allAreaAvailableDayTime' => $this->allAreaAvailableDayTime($oOrder->shop),

            'offline_order' => $oOrder->shop->offline_order,
            'order_accept_days' => $oOrder->shop->order_accept_days,
            'order_accept_days' => $oOrder->shop->order_accept_days,
            /* deliver charge  */
            'allAreaCharge' => $allAreaCharge,

            "deliver_charge" => ($inputData['timeType'] =='pickup' )? (array_key_exists($inputData['branch'],$aBranchServiceChargeList)? $aBranchServiceChargeList[$inputData['branch']]:$oOrder->shop->service_charge): $deliver_charge,
            "site_charge" => $site_charge,

            /* minimum amount  */
            'allAreaMinAmount' => $this->allAreaMinAmount($oOrder->shop),
            /* All order Item data */
            'allItemData' => $this->allItemData($oOrder),
            /* shop data */
            'shop_status' => $oOrder->shop->status,
            'pickup_interval'=>$oOrder->shop->pickup_interval,
            'deliver_type'=>$oOrder->shop->deliver_type,
//            'branchList'=>$this->getBranchList($oOrder->shop),
            'pickupTotal'=>0,

            'branchList'=>$aBranchList,
        'aBranchServiceChargeList'=>$aBranchServiceChargeList,




        ];


        $data['areaAvailableDayTime']=array_key_exists($data['selected_area_id'],$data['allAreaAvailableDayTime'])? $data['allAreaAvailableDayTime'][$data['selected_area_id']]:null;
        $data['extra_charge'] = 0;
        $data['totalWithExtraDiscount'] = ($data['deliver_charge'] + $data['extra_charge'] + $data['subTotal']) - $data['totalDiscount'];//+ $data['deera_deliver_charge']



        $product_option_total=$oOrder->product_option_total();


        $data['voucher']='';
        $data['voucher_id']=0;
        $data['voucher_discount']=0;
        if(isset($inputData['voucher']) && !empty($inputData['voucher']) ){
            $voucher_discount= $this->updateVoucherValue($inputData['voucher'],($product_option_total+$data['subTotal']+$data['deliver_charge']));

            $voucher=$this->checkVoucher($inputData['voucher']);
            $voucher_id=($voucher)? $voucher->id:0;

            $data['voucher']=$inputData['voucher'];
            $data['voucher_id']=$voucher_id;
            $data['voucher_discount']=$voucher_discount;
        }


        $countDay=count($data['selected_day'])>1? count($data['selected_day']):1;
$countDay=$inputData['payment_type']==config('array.payment_type_cash_index')? 1:$countDay;



$countDay=$inputData['timeType']=="now"? 1:$countDay;

$data['pickupTotal']=(($data['subTotal']+$data['deliver_charge']) *$countDay)-$data['voucher_discount'] ;

        $data['pickupTotal']+=($product_option_total*$countDay);

        return $data;

    }

    public function getBranchList($shop){
        $oBranchList=[];
        if( $shop->branch > 0){

            $oBranchList=mShop::where('branch','=',$shop->branch)->orWhere('id','=',$shop->branch)->get();
        }else{

            $oBranchList=mShop::where('branch','=',$shop->id)->get();
        }

        $aBranchList=[];
        $aBranchServiceChargeList=[];
        foreach($oBranchList as $branch){
            $aBranchList[$branch->id]=$branch->{'name_'.config('app.locale')};
            $aBranchServiceChargeList[$branch->id]=$branch->service_charge;
        }

        //mShop::
        return [$aBranchList,$aBranchServiceChargeList];
    }
    /**
     *
     * get areas can deliver to and times from to and days to deliver
     *
     * @param $oShop
     * @return array of days and time from to (for each area)['areaId']['from','to','days']
     */
    public function allAreaAvailableDayTime(&$oShop)
    {

        $areaAvailableDayTime = [];

        $allDays = array_keys(config('array.days'));

        $areaAvailableDayTime[$oShop->area_id] = [
            'from' => $oShop->deliver_time_from,
            'to' => $oShop->deliver_time_to,
            'days' => $allDays
        ];


        if (count($oShop->shop_area)) {
            foreach ($oShop->shop_area as $oneArea) {

                $areaAvailableDayTime[$oneArea->area_id] = [
                    'from' => $oneArea->deliver_time_from,
                    'to' => $oneArea->deliver_time_to,
                    'days' => []
                ];

                if (isset($oneArea->operation_hour) && count($oneArea->operation_hour)) {
                    foreach ($oneArea->operation_hour as $day) {
                        $areaAvailableDayTime[$oneArea->area_id]['days'][] = $day->day;
                    }
                } else {
                    $areaAvailableDayTime[$oneArea->area_id]['days'] = $allDays;
                }

            }
        }


        return $areaAvailableDayTime;
    }

    /**
     *
     * get areas charge for each area
     *
     * @param $oShop
     * @return array of charge  (for each area)['areaId']['deliver_charge','site_charge']
     */
    public function areaCharge(&$oShop,$selected_area_id)
    {
        $allAreaCharge = [];
        $deliver_charge=$oShop->deliver_charge;
        $site_charge=0;

        $allAreaCharge[$oShop->area_id] = [
            'deliver_charge' =>$deliver_charge,
            'site_charge' => $site_charge,
        ];


        if (count($oShop->shop_area)) {
            foreach ($oShop->shop_area as $oneArea) {

                $allAreaCharge[$oneArea->area_id] = [
                    'deliver_charge' => $oneArea->delivery_charge,
                    'site_charge' => $oneArea->deera_charge,
                ];
                if($oneArea->area_id == $selected_area_id){
                    $deliver_charge=$oneArea->delivery_charge;
                    $site_charge=$oneArea->deera_charge;
                }


            }
        }


        return [$allAreaCharge,$deliver_charge,$site_charge];
    }

    /**
     *
     * get areas minimum amount for order for each area
     *
     * @param $oShop
     * @return array of minimum amount  (for each area)['areaId']['min_amount']
     */
    public function allAreaMinAmount(&$oShop)
    {

        $allAreaMinAmount = [];

        $allAreaMinAmount[$oShop->area_id] = [
            'min_amount' => $oShop->min_amount,
        ];


        if (count($oShop->shop_area)) {
            foreach ($oShop->shop_area as $oneArea) {

                $allAreaMinAmount[$oneArea->area_id] = [
                    'min_amount' => $oneArea->min_amount,
                ];


            }
        }


        return $allAreaMinAmount;
    }


    /**
     *
     * git info for each product in the cart and product info
     *
     * @param $oOrder
     * @return array [productId]['price','quantity','availableQuantity','oneDiscount','available_from','available_to']
     */
    function allItemData(&$oOrder)
    {

        $oShop = $oOrder->shop;
        $shopDiscountType = $oShop->discount_type;
        $shopDiscount = $oShop->discount;

        $allItemData = [];


        if (count($oOrder) && count($oOrder->cart)) {

            foreach ($oOrder->cart as $cart) {

                //if the discount for item null it will take shop descount
                $itemDiscountValue = ((isset($cart->coffee->discount) && $cart->coffee->discount != null) ? $cart->coffee->discount : $shopDiscount);
                $discount = ($shopDiscountType == config('array.shop_discount_type_percentage_index')) ? ($cart->unit_price * $itemDiscountValue / 100) : $itemDiscountValue;

                $allItemData[$cart->id] = [
                    'name'=>$cart->coffee->{'name_'.config('app.locale')},
                    'price' => $cart->unit_price,

                    'quantity' => $cart->quantity,
                    'availableQuantity' => $cart->coffee->quantity,
                    'oneDiscount' => round($discount, 3),
                    'available_from' => $cart->coffee->available_from,
                    'available_to' => $cart->coffee->available_to,
                ];


            }
        }

        return $allItemData;
    }

    /**
     * @param $oOrder
     * @return array [$total,$totalDiscount]
     */

    public function  countTotalWithDiscount(&$oOrder){
        $oShop=$oOrder->shop;
        $totalDiscount = 0;
        $total = 0;
        $shop_discount = $oShop->discount;

        if (count($oOrder) && count($oOrder->cart)) {

            foreach ($oOrder->cart as $cart) {

                $discount = (isset($cart->coffee->discount) && $cart->coffee->discount != null) ? $cart->coffee->discount : $shop_discount;
                if ($oShop->discount_type == config('array.shop_discount_type_percentage_index')) {
                    $totalDiscount += ($cart->unit_price * $cart->quantity * $discount / 100);
                } else {

                    $totalDiscount += ($cart->quantity * $discount);
                }
                $total += floatval($cart->unit_price) * $cart->quantity;






            }
        }
        $totalDiscount = round($totalDiscount, 2);

        return [$total,$totalDiscount];
    }


    public function getSelectedAddressId($selected_address_id,&$oAddressResults){

        $lastAddressId = 0;
        $addressList = [];
        foreach ($oAddressResults as $address) {
            $addressList[$address->id] = $address->name;
            $lastAddressId = $address->id;
        }


        $addressId = ($selected_address_id == null) ?  $lastAddressId:$selected_address_id;


        return [$addressId,$addressList];
    }


    public function getSelectedAreaId($addressId,&$oAddressResults){

        if(\Session::has('area_id')){
            return \Session::get('area_id');
        }

        $oAddress=[];

        if(count($oAddressResults)){

            foreach ($oAddressResults as $address) {
                if($addressId ==$address->id){
                    $oAddress =$address;
                }

            }
        }




        $selected_area_id = (isset($oAddress->area_id)) ? $oAddress->area_id :0;

        return $selected_area_id;

    }
    /*___________________________________________________________________________END______data__*/




    /*________________________________________________________________________order_confirm*/



    public function getValidationWithData($data){


        $validationMessages = [
            'deliverInArea' => $this->validateDeliverInArea($data),
            'close' => $this->validateClose($data),
         //   'minimumAmount' => $this->validateMinimumAmount($data),
            'availableQuantity' => $this->validateAvailableQuantity($data),
            /* todo fix foreach date from schedule  and remove comment */
            //   'availableItemDate' => $this->validateAvailableItemDate($data),

        ];

        if($data['timeType'] !='now' && $data['timeType'] !='pickup' && is_array($data['selected_day'])){

            $originSelectedDate=$data['selected_date'];
            $originSelectedTime=$data['selected_time'];
            foreach($data['selected_day'] as $dayIndex){

                $data['selected_date']=$originSelectedDate[$dayIndex];
                $data['selected_time'] = $originSelectedTime[$dayIndex];

                $validationMessages['date_'.$dayIndex]= $this->validateDate($data);
                $validationMessages['time_'.$dayIndex] = $this->validateTime($data);

            }


            $data['selected_date']=$originSelectedDate;
            $data['selected_time']=$originSelectedTime;

        }elseif($data['timeType'] =='now' || $data['timeType'] =='pickup' ){
            $validationMessages['date']= $this->validateDate($data);
            $validationMessages['time'] = $this->validateTime($data);

        }else{

            $data['selected_date']='';
            $data['selected_time'] ='';

            $validationMessages['date']= $this->validateDate($data);
            $validationMessages['time'] = $this->validateTime($data);

        }
        return $validationMessages;
    }





    public function getValidationErrors($data){

        $validationMessagesWithData = $this->getValidationWithData($data);

        $errors=[];
        foreach($validationMessagesWithData as $errorName=>$messagesWithData){
            if($messagesWithData!==true){
//if(!array_key_exists('messages',$messagesWithData)){dd($errorName,$messagesWithData);}
                foreach($messagesWithData['messages'] as $oneMessage){
                    /* todo get all messages not just one */
                    $errors[$errorName]=$oneMessage;
                }
            }
        }

        return $errors;

    }

    public function confirmOrder($oOrder,$data){

        $orderData = [
            "area_id" => $data['selected_area_id'],
            "address_id" => $data['address_id'],
            "deliver_time" => $data['selected_time'],
            "pickup_period"=>$data['pickup_period'],
            "deliver_date" => $data['selected_date'],
            "note" => $data['customer_note'],
            "deliver_charge" => $data['deliver_charge'],
            "deera_charge" => $data['site_charge'],
            "extra_charge" => $data['extra_charge'],
            "branch" => $data['branch'],
            "sub_total" => $data['subTotal'],
            "total" => $data['pickupTotal'],
            'deliver_type'=>(($data['timeType'] =='pickup' )? config('array.shop_deliver_type_pickup_index'):config('array.shop_deliver_type_deliver_index')),
           // "status" => config('array.order_status_payed_index'),
            "notification" => 0
        ];




        if($data['timeType'] !='now' && $data['timeType'] !='pickup'  && is_array($data['selected_day'])){

            $originSelectedDate=$data['selected_date'];
            $originSelectedTime=$data['selected_time'];

            $i=0;
            $countDay=count($data['selected_day']);
            if($countDay >1){
                mOrder::where('parent_id',$oOrder->id)->delete();
            }
            foreach($data['selected_day'] as $dayIndex){
                if($i==0){

                    $orderData["deliver_time"] = $data['selected_time'][$dayIndex];
                    $orderData["deliver_date"] = $data['selected_date'][$dayIndex];
                    $orderData[ "deliver_charge"] = $data['deliver_charge']*$countDay;
                    $orderData["deera_charge"] = $data['site_charge']*$countDay;
                    $orderData["extra_charge"] = $data['extra_charge']*$countDay;
                    $orderData[ "sub_total"] = $data['subTotal']*$countDay;
                    $orderData["total"] = $data['totalWithExtraDiscount']*$countDay;


                    $oOrder->update($orderData);
                }else{

                    $orderData["deliver_time"] = $data['selected_time'][$dayIndex];
                    $orderData["deliver_date"] = $data['selected_date'][$dayIndex];
                    $orderData[ "deliver_charge"] = 0;
                    $orderData["deera_charge"] = 0;
                    $orderData["extra_charge"] = 0;
                    $orderData[ "sub_total"] = 0;
                    $orderData["total"] = 0;
                    $orderData['parent_id']=$oOrder->id;
                    $this->copyOrder($oOrder,$orderData);
                }
                $i++;
            }


        }else{

            $oOrder->update($orderData);

        }





//        if ( count($oOrder->cart)) {
//            foreach ($oOrder->cart as $cart) {
//                mCoffee::find($cart->coffee_id)->update(['quantity' => DB::raw('quantity - ' . $cart->quantity)]);
//
//            }
//        }

    }

    public function copyOrder($oOrder,$changedValue=[]){

        $oNewOrder=$this->copyRecord($oOrder,$changedValue);

        if(isset($oOrder->cart) && count($oOrder->cart)){
            foreach($oOrder->cart as $cart){
                $oNewCart=$this->copyRecord($cart,['order_id'=>$oNewOrder->id]);
            }

        }
        return true;
    }

    public function copyRecord($modelObject,$changedValue=[]){
        $denyCopy=['id','created_at','updated_at'];

        $insertedData=[];
        foreach($modelObject->getFillable() as $column){
            if(in_array($column,$denyCopy)){continue;}

            if(array_key_exists($column,$changedValue)){$insertedData[$column]=$changedValue[$column];}else{
                $insertedData[$column]=$modelObject->$column;
            }


        }

        $modelObject = $modelObject->create($insertedData);
        return $modelObject;
    }

    public function initPayment($oOrder,$data){

        $initPaymentData=[
            "order_id" => $oOrder->id,
            "users_id" => current_user()->getUser()->id,
            "amount" =>$data['pickupTotal'],
            "status" => 0,
            "type" => $data['payment_type'] ,
            "notification" => 0
        ];

        $paymentExist = mPayment::where(['order_id' => $oOrder->id])->first();
        $newId=0;
        if (count($paymentExist)) {

            $paymentExist->update( $initPaymentData);
            $newId=$paymentExist->id;
        } else {
            $newPaymentRow=mPayment::create($initPaymentData);

            $newId=$newPaymentRow->id;
        }
        return $newId;
    }

    /*________________________________________________________________________order_confirm*/

    public function timeToSecond($str_time)
    {


        $str_time = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "$1:$2:00", $str_time);

        $str_time_array = explode(':', $str_time);

        return $str_time_array[0] * 3600 + $str_time_array[1] * 60 + $str_time_array[2];
    }











































    public function validateCheckout(
        &$oShop,
        $selected_area_id,
        $total,
        $selected_day = null,
        $selected_time = null
    ) {
        $errors = [];
        $shop_status = $oShop->status;

        if ($shop_status == config('array.shop_status_busy_index')) {
            $errors['busy'] = trans('website.errorMessageBusy');
        }
        if (($shop_status == config('array.shop_status_close_index') ||$shop_status == config('array.shop_status_busy_index') ) && $oShop->offline_order == 0) {
            $errors['close'] = trans('website.errorMessageClose');
        }

//if($oShop->status ==config('array.shop_status_open_index')){}
        $current_day = date('w');
        $current_hour = date('H:i');
        $current_date = date('Y-m-d');
//    $current_date_number=strtotime($current_date);

        $deliver_time_from = $oShop->deliver_time_from;
        $deliver_time_to = $oShop->deliver_time_to;
        $min_amount = $oShop->min_amount;
        $shop_deliver_charge = $oShop->deliver_charge;
        $deera_deliver_charge = config('project.deliver_charge');

        /* todo determined the commission according to the $commission_type */
        //   $commission_type=$oShop->commission_type;

        $order_accept_days = $oShop->order_accept_days;

        $shop_area_id = $oShop->area_id;

        $area = '';

        if (count($oShop->shop_area)) {
            foreach ($oShop->shop_area as $oneArea) {
                if ($selected_area_id == $oneArea->area_id) {
                    $area = $oneArea;
                }
            }

            if ($area == '') {
                $errors = ['deliver_area' => trans('website.errorMessageDeliverArea')];
            }
        }

        if ($area == '' && $selected_area_id != $oShop->area_id) {
            $errors = ['deliver_area' => trans('website.errorMessageDeliverArea')];
        }

        if ($area != '') {
            $min_amount = $area->min_amount;

            $deliver_time_from = $area->deliver_time_from;
            $deliver_time_to = $area->deliver_time_to;

            $shop_deliver_charge = $area->delivery_charges;
            $deera_deliver_charge = $area->deera_charge;
        }

        $all_days = config('array.days');
        $operation_hour_day = [];
        if (isset($area->operation_hour) && count($area->operation_hour)) {
            foreach ($area->operation_hour as $day) {
                $operation_hour_day[$day->day] = $all_days[$day->day];
            }
        }
        if (count($operation_hour_day) == 0) {
            $operation_hour_day = $all_days;
        }

        if ($min_amount > $total) {
            $errors['amount'] = trans('website.errorMessageMinimum') . $min_amount;
        }


        $available_days = [];
        $available_days_date = [];
        $j = 1;
        for ($i = $current_day + 1; $i < $current_day + 1 + $order_accept_days; $i++) {
            $index = $i % 7;
            if (isset($operation_hour_day[$index])) {
                $available_days_date[$index] = date('Y-m-d', strtotime($current_date . ' + ' . $j . ' days'));
                $available_days[$index] = $all_days[$index] . ', ' . $available_days_date[$index];
            }
            $j++;
        }

        $current_shop_status = ($oShop->status == config('array.shop_status_open_index')) ? 'open' : 'close';

        $current_shop_status = ($current_shop_status == 'open' &&
            $current_hour >= $deliver_time_from &&
            $current_hour <= $deliver_time_to &&
            isset($operation_hour_day[$current_day])
        ) ? 'open' : 'close';


        if ($current_shop_status == 'close' && $oShop->offline_order == 0) {
            $errors['close'] = trans('website.errorMessageClose') .
                trans('website.errorMessageCloseOpenHours') . ' (' . $deliver_time_from . ' - ' . $deliver_time_to . ' )';
        }


        $available_deliver_times = [];
        if ($current_shop_status == 'open') {

            for ($i = $this->timeToSecond($current_hour) + (config('project.deliver_period') * 60); $i < $this->timeToSecond($deliver_time_to); $i += (config('project.deliver_period') * 60)) {
                $available_deliver_times['today'][] = date('H:i', $i);
            }
        }

        if ($oShop->offline_order == 1) {
            $parts_of_day = [];
            for ($i = $this->timeToSecond($deliver_time_from) + (config('project.deliver_period') * 60); $i < $this->timeToSecond($deliver_time_to); $i += (config('project.deliver_period') * 60)) {
                $parts_of_day[] = date('H:i', $i);
            }
            foreach ($available_days as $day_index => $available_day) {

                $available_deliver_times[$day_index] = $parts_of_day;
            }


        }


        if ($selected_day != null || $selected_time != null) {
            if (array_key_exists($selected_day,
                    $available_deliver_times) && $selected_time >= $deliver_time_from && $selected_time <= $deliver_time_to
            ) {

            } else {
                $errors['deliver_time'] = trans('website.errorMessageNoDeliverTime');
            }
        }


        return [
            'orderErrors' => $errors,
            'operation_hour_day' => $operation_hour_day,
            'order_accept_days' => $order_accept_days,
            'min_amount' => $min_amount,
            'available_days' => $available_days,
            'available_deliver_times' => $available_deliver_times,
            'offline_order' => $oShop->offline_order,
            'deliver_time_from' => $deliver_time_from,
            'deliver_time_to' => $deliver_time_to,
            'shop_deliver_charge' => $shop_deliver_charge,
            'deera_deliver_charge' => $deera_deliver_charge,
            'available_days_date' => $available_days_date
        ];


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request)
    {
//        \Event::listen('illuminate.query', function($query)
//{
//    print_r($query);
//    echo '<br><br><br>
//';
//});

        if (!isset($request->coffee_id)) {
            return new JsonResponse(['Please select coffee.'], 422);
        }
        if (!isset(current_user()->getUser()->id)) {
            $this->greatGestUser();
        }

        $users_id = current_user()->getUser()->id;

        $coffee_ids = (is_array($request->coffee_id)) ? $request->coffee_id : [$request->coffee_id];

        foreach ($coffee_ids as $coffee_id) {
            $oCoffee = $this->rCoffee->show($coffee_id);
            $shop_id = $oCoffee->shop_id;

            $oCurrentOrder = mOrder::where([
                'users_id' => $users_id,
                'shop_id' => $shop_id,
                'status' => config('array.order_status_pending_index')
            ])->first();

            $order_id = 0;
            if (!isset($oCurrentOrder->id) ) {//|| isset($request->reorder)
                $oOrder = mOrder::create([
                    'users_id' => $users_id,
                    'shop_id' => $shop_id,
                    'status' => config('array.order_status_pending_index')
                ]);
                $oOrder->save();

                $order_id = $oOrder->id;

                /*
                $aProductSize=[];
                $aProductUnitPrice=[];
                if(isset($oCurrentOrder->id)){

                    if(count($oCurrentOrder->cart)){
                        foreach($oCurrentOrder->cart as $cart){
                            $aProductSize [$cart->coffee_id]=$cart->size_id;
                            $aProductUnitPrice[$cart->coffee_id]=$cart->unit_price;
                        }
                    }

                }
                $request->merge(['aProductSize'=>$aProductSize,'aProductUnitPrice'=>$aProductUnitPrice]);
*/
            } else {
                $order_id = $oCurrentOrder->id;
            }
            $this->addCoffeeToOrder($request, $order_id, $coffee_id);


        }

//dd($request);
        if ($request->ajax()) {
            return new JsonResponse(['status' => 'success'], 200);

        } else {
            if (isset($request->redirectToOrder) &&  isset($request->reorder)) {
                return Redirect::to('/order?order_id=' . $order_id);
            }
            if (isset($request->redirectToOrder)) {
                return Redirect::to('/order?order_id=' . $request->redirectToOrder);
            }
            return Redirect::back();
        }
    }

    public function greatGestUser()
    {

        $credentials = [

            'email' => 'guest_' . rand(99999, 99999999) . '_' . rand(99999, 99999999) . '@deera.com',
            'password' => rand(99999, 99999999) . '_' . rand(99999, 99999999),
            'type' => config('array.users_type_guest_index'),
        ];

        $user = Sentinel::registerAndActivate($credentials);

        $role = Sentinel::findRoleByName('client');
        $role->users()->attach($user);


        $role2 = Sentinel::findRoleByName('guest');
        $role2->users()->attach($user);

        Sentinel::login($user);
    }

    public function addCoffeeToOrder($request, $order_id, $coffee_id)
    {
        $users_id = current_user()->getUser()->id;
        $quantity = 1;
        if (isset($request->quantity) && isset($request->quantity[$coffee_id])) {
            $quantity = $request->quantity[$coffee_id];
        } elseif (isset($request->quantity) && $request->quantity > 0) {
            $quantity = $request->quantity;
        }


        $oOrder = $this->rOrder->show($order_id);
        $oCoffee = $this->rCoffee->show($coffee_id);

        $oCart = mCart::where(['users_id' => $users_id, 'order_id' => $order_id, 'coffee_id' => $coffee_id])->first();

        if (count($oCart)) {
            $oCart->quantity += $quantity;

            $oCart->save();
        } else {

            $oCart = mCart::create([
                'users_id' => $users_id,
                "shop_id" => $oOrder->shop_id,
                'order_id' => $order_id,
                'coffee_id' => $coffee_id,
                'size_id'=>(isset($request->size) && isset($request->size[$coffee_id]))? $request->size[$coffee_id] : 0,
                'unit_price'=>(isset($request->unit_price) && isset($request->unit_price[$coffee_id]))? $request->unit_price[$coffee_id] :  $oCoffee->price,
                'quantity' => $quantity,
                'special_request' => ((isset($request->special_request) && is_array($request->special_request) && isset($request->special_request[$coffee_id])) ? $request->special_request[$coffee_id] : '')

            ]);
            $oCart->save();

        }

        if(isset($request->options) && isset($request->options[$coffee_id])){
            $options=is_array($request->options[$coffee_id])? $request->options[$coffee_id] :[$request->options[$coffee_id]];
            foreach($options as $option){
                $oCartProductOption= mCartProductOption::create(['cart_id'=>$oCart->id,'product_option_id'=>$option]);
            }
        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {


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
    public function update($id, Request $request)
    {

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


    /*
     * just check if the voucher code exist and active
     */
    public function checkVoucher($code)
    {


        $oResults=$this->rVoucher->getByCode($code);


        if(count($oResults) &&  $oResults->status==config('array.voucher_status_active_index') && $oResults->total_number > $oResults->used_number){

            $oVoucherUsersResult=mVoucherUsers::where(['voucher_id'=>$oResults->id,'users_id'=>current_user()->getUser()->id])->get();

            if(count($oVoucherUsersResult)){
                return false;
            }else{
                return $oResults;
            }

        }else{
            return false;

        }
    }

/*
 * this function update voucher code current_amount - orderTotal and return the discount
 *
 * @return float this voucher code discount
 */
    public function updateVoucherValue($code,$orderTotal)
    {


$voucher_type_fixed_index=config('array.voucher_type_fixed_index');
    $voucher_type_percentage_index=    config('array.voucher_type_percentage_index');

        $oResults=$this->rVoucher->getByCode($code);

        if(count($oResults) && $oResults->status==config('array.voucher_status_active_index')){


            $new_current_amount= ($oResults->current_amount  <= $orderTotal)? 0: $oResults->current_amount - $orderTotal;
            $new_current_amount=($oResults->type == $voucher_type_fixed_index)? $new_current_amount:0;

            //$updateResult=$this->rVoucher->update($oResults->id,['current_amount'=>$new_current_amount]);


            $discount= ($oResults->type == $voucher_type_percentage_index)? ($oResults->current_amount/100 * $orderTotal):($oResults->current_amount - $new_current_amount);

            return ($discount<0)? 0:$discount;

        }else{
            return 0;

        }
    }





}
