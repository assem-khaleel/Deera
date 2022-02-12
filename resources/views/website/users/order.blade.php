<!---->@extends('website.layouts.main')
@section('title', trans('website.checkOut').'  '.trans('website.pages_title'))
@section('content')



    <section class="main-wrapper">
        <article class="container">


            <section class="inner-wrapper New" style="padding-bottom:0px;">


                <div class="caption-sec bottomlow">
                    <h1> {{trans('website.checkOut')}}</h1>
                </div>


                <div class="check_wrapper">

                    @if(isset(current_user()->getUser()->id ) && current_user()->getUser()->type==config('array.users_type_guest_index'))
                        <div class="row" style="" id="guestLoginBox">
                            <aside class="col-md-6">
                                <div class="logwrapp">
                                    {!! Form::open( [
    'method' => isset($request->mobileRequest)? 'GET':'POST',
    'url' => '/login',
    'class' => isset($request->mobileRequest)? '':'formWithResponse',
    'id'=>'checkoutLoginForm',
    'onsubmit'=>isset($request->mobileRequest)?  '':"formWithResponse('#checkoutLoginForm');",
    'data-success-function'=>'hideGuestLoginBox',
    'data-wait-function'=>'dummyDum',
    'data-success-place'=>'#addressListDiv',
    'data-wait-place'=>'#guestWatingPlace'

    ]) !!}
                                    <script>
                                        window.hideGuestLoginBox=function(form, targetPlace, data){

                                          window.location.reload();
                                          $('#guestLoginBox').hide();

                                        }
                                        window.dummyDum=function(a,b,c){

                                        }
                                    </script>
                                    <div class="sign_in">
                                        <h3> {{trans('website.login')}} </h3>

                                        <div style="clear:both" id="guestWatingPlace" ></div>
                                        <div class="log_fill"><input class="text_log" name="email"
                                                                     placeholder="{{trans('website.emailAddress')}}"
                                                                     type="text" required></div>
                                        <div class="log_fill">
                                            <input name="password" class="text_log" placeholder="{{trans('website.password')}}" type="password" required>

                                            {!! Form::hidden('order_id',$oOrder->id,['id'=>'order_id']) !!}
                                        </div>
                                        <div class="log_fill">
                                            <aside class="rmr">
                                                <div class="custom-checkbox">
                                                    <input id="cb10" type="checkbox">
                                                    <label for="cb10">{{trans('website.rememberMe')}}</label>
                                                </div>


                                            </aside>
                                            <aside class="frgt">
                                                <a href="/recover" id="recoverA" class="aWithResponse" data-success-place="#generalPopupModel .modal-body"> {{trans('website.forgetPassword')}}</a>
                                            </aside>
                                        </div>
                                        <h5>{{trans('website.dontHaveAccount')}}&nbsp;
                                            <a  href="/users/create?order_id={{$oOrder->id}}">{{trans('website.createAnAccount')}}</a>

                                        </h5>
                                    </div>




                                </div>
                                <input class="log_btn" value="{{trans('website.login')}}" type="submit">
                                {!! Form::close() !!}
                            </aside>

                            <aside class="col-md-6">
                                <div class="logwrapp gustsec">
                                    <div class="sign_in">
                                        <h3>{{trans('website.continueAsGuest')}}</h3>



                                        {!! Form::model(current_user()->getUser(), [
                                            'method' => 'PATCH',
                                            'url' => ['/users', current_user()->getUser()->id],
                                            'id'=>'updateUserInfoForm',
                                            'class' => 'form-horizontal formWithResponse',
                                            'data-wait-place'=>'#waitPlace',
                                            'data-wait-function'=>'waitUpdateFunction',
                                            'data-success-pace'=>'#waitPlace',
                                            'data-success-function'=>'successUpdateFunction',
                                        ]) !!}

                                        <script>

                                            window.waitUpdateFunction=function(form,selector,data){}
                                            window.successUpdateFunction=function(form,selector,data){
                                              //  $('#allOrderForm').submit();
                                            }

                                        </script>
                                        <div class="log_fill">
                                            <span style="color:#ff0000" id="guest_first_name_error"></span>
                                            <div>

                                                {!! Form::text('first_name','',['placeholder'=>trans('website.fullName'),'class'=>'text_log','onchange'=>"$('#userNameHidden').val($(this).val());"]) !!}
                                            </div>
                                        </div>
                                        <div class="log_fill">
                                            <span style="color:#ff0000" id="guest_phone_error"></span>
                                            <div>
                                                {!! Form::text('phone','',['placeholder'=>trans('website.Phone'),'class'=>'text_log','onchange'=>"$('#userPhoneHidden').val($(this).val());"]) !!}
                                            </div>
                                        </div>
                                        <div class="log_fill">
                                            <span style="color:#ff0000" id="guest_email_error"></span>
                                            <div>

                                                {!! Form::email('email','',['placeholder'=>trans('website.emailAddress'),'class'=>'text_log'
                                                ,'onchange'=>"$('#userEmailHidden').val($(this).val());"]) !!}
                                            </div>

                                        </div>

                                        {!! Form::hidden('last_name',null)  !!}
                                        {!! Form::hidden('gender',null)  !!}

                                        {!! Form::close() !!}
                                    </div>

                                </div>
                            </aside>

                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-12">
                            <div class="logwrapp">
                                <div class="sign_in">
                                    <h3>{{trans('website.orderSummary')}}</h3>
                                    <h3>  {{isset( $oOrder->shop->name_en)?$oOrder->shop->name_en:'' }} </h3>


                                    <div class="summaryy">
                                        {{--*/$total=0;
                                        $customErrors=[];/*--}}
                                        @if($oOrder->cart)
                                            @foreach($oOrder->cart as $cart)
                                                {{--*/$total+=floatval($cart->unit_price) * $cart->quantity;
                                                if($cart->coffee->quantity < $cart->quantity){$customErrors[]='No enough quantity of '.$cart->coffee->{'name_'.config('app.locale')} ;}
                                                /*--}}
                                                <h4><a style="display:none;" href="/cart?order_id={{$oOrder->id}}"
                                                       data-success-place="#generalPopupModel  .modal-body"
                                                       id="oneCart_{{$cart->id}}" class="aWithResponse"> <i
                                                                class="fa fa-pencil "></i>
                                                    </a>{{$cart->coffee->{'name_'.config('app.locale')} }}
                                                     </h4>
                                            <span style="display: block;">  Quantity {{$cart->quantity}}</span>
                                             <span>  {{$cart->special_request}}</span>

                                                <h4>{{isset($cart->size->id)? $cart->size->{'name_'.config('app.locale')}:'' }}<span>{{number_format(floatval($cart->unit_price) * floatval($cart->quantity),3)}}
                                                        {{trans('website.kd')}}</span></h4>
                                                <hr/>
                                            @endforeach
                                        @endif

                                        {{--*/
                                        $fees=$oOrder->shop->deliver_charge;
                                        if( (\Session::has('deliver_type')&&\Session::get('deliver_type')==config('array.shop_deliver_type_pickup_index'))){
                                        $fees=(isset($oOrder->shop->service_charge) && $oOrder->shop->service_charge>0)? $oOrder->shop->service_charge:'0';
                                        }


                                        /*--}}

                                        <h4>{{trans('website.subTotal')}}<span>{{number_format(floatval($total),3)}} {{trans('website.kd')}}</span>
                                        </h4>
                                        <h4>

                                            @if( ($oOrder->deliver_type==config('array.shop_deliver_type_pickup_index')))
                                                {{trans('website.serviceFees')}}  <span> <b id="serviceChargeb">{{ number_format(floatval($fees),3) }}</b> {{trans('website.kd')}} </span>
                                            @else
                                                {{trans('website.delevaryFees')}}<span><b id="serviceChargeb">{{number_format(floatval($fees),3) }}</b> {{trans('website.kd')}}</span>
                                            @endif


                                        </h4>
                                        {{--*/$product_option_total=$oOrder->product_option_total();/*--}}
                                        <h4 @if($product_option_total ==0) style="display: none" @endif>Add Ons<span>{{number_format(floatval($product_option_total),3)}} {{trans('website.kd')}}</span>
                                        </h4>

                                        <h4> {{trans('website.total')}} <span><b
                                                        id="totalNumber">{{number_format(floatval($total)+floatval($product_option_total) + floatval($fees),3)  }}</b>    {{trans('website.kd')}}</span>
                                        </h4>
                                        <h4 id="totalWithVoucherH4" style="display: none;"> Total with voucher discount <span>
                                                <b >{{number_format(floatval($total)*1 + floatval($fees),3)  }} </b>    {{trans('website.kd')}}</span>
                                        </h4>

                                        <h4  style="display:none">Total Schedule : <span><b id="totalWithScheduleB">1
                                                    X {{$total*1 + $fees}}
                                                    = {{$total*1 + $fees }}</b>{{trans('website.kd')}} </span>
                                        </h4>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row" style="display:none;">
                        <div class="col-md-12">
                            <div class="logwrapp">
                                <div class="sign_in">


                                    <div class="heading">
                                        <h3>{{trans('website.availableArea')}} {{$oOrder->shop->{'name_'.config('app.locale')} }} </h3>
                                    </div>
                                    <div class="row">

                                        <div class="col-sm-12">


                                            <table width="100%" border="0" cellspacing="0" cellpadding="0"
                                                   id="shopDeliverAreaTable">
                                                <tbody>
                                                <tr>
                                                    <th> {{trans('website.area')}}</th>
                                                    <th> {{trans('website.minimumAmount')}}</th>
                                                    <th>{{trans('website.deliveryCharge')}}</th>
                                                    {{--<th>Deera charge</th>--}}
                                                    <th>{{trans('website.deliverTimeFrom')}}</th>
                                                    <th>{{trans('website.deliverTimeTo')}}</th>


                                                    <th>{{trans('website.openDays')}}</th>
                                                    <th></th>
                                                </tr>


                                                @if( count($oOrder->shop->shop_area) )
                                                    @foreach($oOrder->shop->shop_area as $area)


                                                        <tr>
                                                            <td>{{$area->area->{'name_'.config('app.locale')} }}</td>
                                                            <td>{{$area->min_amount}}</td>
                                                            <td>{{$area->delivery_charges}}</td>
                                                            {{--                                                        <td>{{$area->deera_charge}}</td>--}}

                                                            <th>{{$area->deliver_time_from}}</th>
                                                            <th>{{$area->deliver_time_to}}</th>
                                                            <td>

                                                                @if(count($area->operation_hour))
                                                                    @foreach($area->operation_hour as $oneDay)
                                                                        - {{ (array_key_exists($oneDay->day,config('array.days')))? config('array.days')[$oneDay->day]:$oneDay->day }}

                                                                    @endforeach
                                                                @else
                                                                    {{trans('website.allDays')}}
                                                                @endif
                                                            </td>
                                                            <td></td>
                                                        </tr>





                                                    @endforeach
                                                @else



                                                    <tr>
                                                        <td>{{$oOrder->shop->area->{'name_'.config('app.locale')} }}</td>
                                                        <td>{{$oOrder->shop->min_amount}}</td>
                                                        <td>{{$oOrder->shop->deliver_charge}}</td>
                                                        <td>{{$oOrder->shop->deliver_time_from}}</td>
                                                        <td>{{$oOrder->shop->deliver_time_to}}</td>
                                                        <td>{{config('project.deliver_charge')}}</td>
                                                        <td>

                                                            {{trans('website.allDays')}}
                                                        </td>
                                                        <td></td>
                                                    </tr>


                                                @endif


                                                </tbody>
                                            </table>


                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

            </section>


            <div class="row"
                 @if( ($oOrder->deliver_type==config('array.shop_deliver_type_pickup_index')))
                 style="display:none;"
                    @endif
                    >
                <div class="col-md-12">
                    <div class="logwrapp">
                        <div class="sign_in">
                            <h3> {{trans('website.deliveryAddress')}} <a href="/address/create"
                                                                         data-reveal-id="add-addresss"
                                                                         data-animation="fade"
                                                                         class="aWithResponse add_location"
                                                                         id="addAddressLink"
                                                                         data-success-place="#generalPopupModel  .modal-body"></a>
                            </h3>

                            <div class="clearfix"></div>
                            @if (isset($validationErrors) && isset($validationErrors['deliver_area']))

                                <div class="alert alert-danger alert-dark">
                                    <button data-dismiss="alert" class="close" type="button">×</button>
                                    {!! $validationErrors['deliver_area'] !!}
                                </div>

                            @endif

                            {!! Form::model($request,['method'=>'get','id'=>'selectAddressForm','class'=>'']) !!}

                            <div id="addressListDiv">


                                @foreach($addressList as $address_id=>$address_name)

                                    <label class="oneAddressSelectLabel" id="oneAddressSelectLabel_{{$address_id}}" >
                                        {!! Form::radio('selected_address_id',$address_id,null,['class'=>'oneAddressRadio','onchange'=>'/*$("#selectAddressForm").submit();*/']) !!}
                                        <span class="addressNameSpan">{{$address_name}}</span>
                                        <a class="pull-right aWithResponse"
                                           href="/address/create?address_id={{$address_id}}"
                                           id="oneAddressSelectA_{{$address_id}}"
                                           data-success-place="#generalPopupModel  .modal-body"><i
                                                    class="fa fa-pencil"></i> </a>
                                    </label>
                                @endforeach
                                {!! Form::hidden('order_id',null) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>


            {!! Form::model($request,['method'=>'get','style'=>'margin:0px;padding:0px;','onsubmit'=>'','id'=>'allOrderForm']) !!}

            {!! Form::hidden('users_email',null,['id'=>'userEmailHidden']) !!}
            {!! Form::hidden('users_phone',null,['id'=>'userPhoneHidden']) !!}
            {!! Form::hidden('users_name',null,['id'=>'userNameHidden']) !!}
            <div class="row">
                <div class="col-md-12">
                    <div class="logwrapp">
                        <div class="sign_in">
                            <h3 id="typeOfTimeHeader"> {{trans('website.SelectMethod')}}</h3>

                            <div class="dlivry_selct">


                                @if($deliver_type== config('array.shop_deliver_type_both_index') ||$deliver_type== config('array.shop_deliver_type_deliver_index') )

                                    @if($oOrder->deliver_type==config('array.shop_deliver_type_deliver_index'))
                                        <div class="custom-radio">

                                            {!! Form::radio('timeType','now', ($oOrder->deliver_type==config('array.shop_deliver_type_deliver_index')),['id'=>'rb1']) !!}
                                            <label for="rb1"> {{trans('website.orderNow')}}</label>
                                        </div>

                                    @endif
                                @endif

                                {{--@if(false && $deliver_type== config('array.shop_deliver_type_both_index') ||$deliver_type== config('array.shop_deliver_type_deliver_index') )--}}

                                    @if($oOrder->deliver_type==config('array.shop_deliver_type_deliver_index'))

                                        <div class="custom-radio" onclick="" >

                                            {!! Form::radio('timeType','schedule',null,['id'=>'scheduleRadioInput','onchange'=>"if($(this).prop('checked') == true) { $('#showScheduleATriger').click();}"]) !!}
                                            <label for="scheduleRadioInput" onchange="">
                                                <a href="#" id="showScheduleATriger" data-reveal-id="shedule-time"
                                                   data-animation="fade" onclick="$('#scheduleRadioInput').prop('checked',true);hideShowCashMethod();">
                                                 {{trans('website.scheduleDelivery')}}

                                                    <i class="fa fa-calendar"></i> </a>
                                            </label>
                                        </div>
                                    @endif
                                {{--@endif--}}


                                @if($deliver_type== config('array.shop_deliver_type_both_index') ||$deliver_type== config('array.shop_deliver_type_pickup_index') )
                                    @if($oOrder->deliver_type==config('array.shop_deliver_type_pickup_index'))

                                        <div class="custom-radio" style="padding-left: 16px ">

                                            {!! Form::radio('timeType','pickup',($oOrder->deliver_type==config('array.shop_deliver_type_pickup_index'))? true:null,['id'=>'pickupRadio']) !!}
                                            <label for="pickupRadio"> {{trans('website.pickUp')}}

                                            </label>
                                        </div>
                            </div>
                            <div class="dlivry_selct">
                                <div class="col-md-6">
                                         {!! Form::select('pickupTime',['20'=>'20 mins','30'=>'30 mins','40'=>'40 mins'],null,['id'=>'pickupTimeSelect_xxx','class'=>'dlivry_time']) !!}
                                </div>
                                <div class="col-md-6">
                                    {!! Form::select('branch',[0=>'Main Branch']+$branchList,null,['id'=>'branch','onchange'=>'changeBranchServiceCharge($(this));','class'=>'dlivry_time col-xs-6']) !!}
                                </div>


                            </div>

                            @endif
                            @else
                        </div>
                        @endif


                    </div>
                </div>
            </div>
            </div>


            <div id="shedule-time" class="reveal-modal3" style="display:block;">

                <div class="sign_in">
                    <h3>{{trans('website.scheduleYourCoffee1')}}  </h3>


                    <div class="popup-cal-icon">



                        <div class="input-group date form_date col-md-12 clnrd" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                            <input class="text_box6 schedule_select_date_input" placeholder="{{trans('website.selectYourWeek')}}
                                    " readonly type="text">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span> </div>

                    </div>

                    <div class="shedule-wrapper">
                        <div class="table-responsive22">


                            <table class="table"  id="scheduleDaysRowsTable">


                                <tbody >


                                {{--*/$currentDate=date('Y-m-d');
                                 $currentDayIndex=date('w');
                                 /*--}}
                                @foreach(config('array.days') as $dayIndex=>$dayName)

                                    {{--*/
                                    if($dayIndex < $currentDayIndex){
                                    $dayDate=date('Y-m-d', strtotime($currentDate . ' + ' . (6- ($currentDayIndex -$dayIndex) +1) . ' days'));
                                    }else{

                                    $dayDate=date('Y-m-d', strtotime($currentDate . ' + ' . ($dayIndex - $currentDayIndex) . ' days'));
                                    }
                                    /*--}}
                                    <tr class="scheduleRowDateTime" id="scheduleRowDateTime_{{$dayIndex}}">
                                        <td width="40%">
                                            <div class="calender-date">
                                                <label class="dayName">{{config('array.days')[$dayIndex]}} </label>
                                                <span class="dateLabel">{{(!isset($request->selected_date[$dayIndex])? $dayDate: $request->selected_date[$dayIndex])}}</span>
                                                {!! Form::hidden('selected_date['.$dayIndex.']',(!isset($request->selected_date[$dayIndex])? $dayDate: $request->selected_date[$dayIndex]),['id'=>'selected_date_'.$dayIndex,'class'=>'schedule_select_date_input','data-day-index'=>''.$dayIndex]) !!}

                                            </div>
                                        </td>
                                        <td width="40%">


                                            <div class="select-div-col">

                                                {!! Form::select('selected_time['.$dayIndex.']',[''=>trans('website.setTime')],(!isset($request->selected_time[$dayIndex])? $areaAvailableDayTime['from']: $request->selected_time[$dayIndex]),['id'=>'selected_time_'.$dayIndex,'class'=>'newstyle form-control scheduleTimeSelect ']) !!}

                                            </div>

                                        </td>
                                        <td width="20%" align="center" valign="middle"><label class="switch">

                                                <input id="schedule_day_{{$dayIndex}}"
                                                       name="selected_day[{{$dayIndex}}]"
                                                       class="schedule_day_checkbox" type="checkbox"
                                                       value="{{$dayIndex}}"

                                                       @if(is_array($areaAvailableDayTime['days']) && in_array($dayIndex,$areaAvailableDayTime['days']) )
                                                       checked
                                                @else
                                                    {{--disabled--}}
                                                        @endif>

                                                <div class="slider round"></div>
                                            </label></td>

                                    </tr>

                                @endforeach


                                </tbody>
                            </table>









                            <input type="button"  class="log_btn" onclick="$('.close-reveal-modal').click();" value="  {{trans('website.schedule')}}  ">



                        </div>

                    </div>


                </div>
                <a class="close-reveal-modal"></a>
            </div>


            <div class=" @if($oOrder->deliver_type!=config('array.shop_deliver_type_deliver_index')) row  @endif ">
                <div class="col-md-12">
                    <div class="logwrapp">
                        <div class="sign_in">
                            <h3> {{trans('website.paymentMethod')}}</h3>

                            <div class="payy">

                                @if(current_user()->getUser()->type == config('array.users_type_registered_index'))
                                <div class="code">
                                    <div class="custom-radio">
                                       <div style="display: none;"><input id="voucherRadio" style="display:none;" name="payment_type" value="{{config('array.payment_type_voucher_index')}}" type="radio"></div>
                                        <label for="voucherRadio">
                                          
                                        </label>
                                             <input type="text" id="voucherCodeInterFaceInput" name="voucher" onclick="/*$('#voucherRadio').prop('checked',true);*/" placeholder="{{trans('website.addVoucherCode') }}" oninput="checkVoucherCode($(this))" onchange="checkVoucherCode($(this))" style="float: left;">
                                            <img src="/assets/website/images/confirm.png" alt="" id="successValidationImg" data-success="false" style="display:none;">
                                            <img src="/assets/website/images/close2.png" alt="" id="errorValidationImg" style="display:none;">
                                        <div id="voucherErrorPlace" style="color:red;clear:both;display:none;"></div>
                                    </div>
                                </div>
                                @endif

                                <div class="custom-radio">
                                    <input id="knetRadio" name="payment_type" value="{{config('array.payment_type_knet_index')}}" type="radio">
                                    <label for="knetRadio"><img src="/assets/website/images/knet-icon.png"  alt=""> {{trans('website.KNET')}}</label>
                                </div>

                                <div style="display: none;" class="custom-radio">
                                    <input id="rb5" name="payment_type"  value="{{config('array.payment_type_visa_index')}}" type="radio">
                                    <label for="rb5"><img src="/assets/website/images/visa-icon.png"
                                                          alt=""> {{trans('website.creditCard')}}</label>
                                </div>

                                <div class="custom-radio" id="cashOnDeliveryDiv">
                                    <input id="rb6" name="payment_type"  value="{{config('array.payment_type_cash_index')}}" type="radio">
                                    <label for="rb6"><img src="/assets/website/images/cash-icon.png"
                                                          alt=""> {{trans('website.Cash')}}</label>
                                </div>

                            </div>



                        </div>
                    </div>

                    <div style="clear:both"></div>

                    @include('common.partials.messages')

                    {!! Form::hidden('selected_address_id',null,['id'=>'finalAddressIdInput'])  !!}
                    {!! Form::hidden('order_id',null)  !!}
                    {!! Form::hidden('proceedToPayment',1)  !!}


                    <div id="agreementAllDiv">
                        <input type="checkbox" id="agreementCheckbox" name="agreement" required>

                       <label for="agreementCheckbox" style="padding-left: 18px"> By Placing an order, You agree to the
                        <a href="/privacy">Privacy policy and  Terms Of Use</a>.</label>
                        <div style="color:red;" class="errorDiv"></div>
                    </div>


                    @if( isset( $oOrder->shop->id) &&$oOrder->shop->isClose())
                        <div style="color:red;" class="errorDiv">{{trans('shop.shopClose')}}</div>
                    @endif

                    @if(count($customErrors))
                        @foreach($customErrors as $oneError )


                            <div style="color:red;" class="errorDiv">{{$oneError}}</div>
                            @endforeach

                    @endif
                    <input type="submit" onclick="validateForm();" value="{{trans('website.placeOrder')}}" name="proceedToPayment" class="sub_btn">

                    {!! Form::close() !!}
                </div> </div>

            </div>

    </section>







    <div style="display:none" id="showRightPush"> this dummy div to fix javascript getElementById </div>

















    {!! Form::open( [
'method' => 'POST',
'url' => '/voucher',
'class' => '  formWithResponse',
'id'=>'voucherHiddenForm',
'onsubmit'=>"formWithResponse('#voucherHiddenForm');",
'data-success-function'=>'successResponseVoucher',
'data-errir-function'=>'errorResponseVoucher',
'data-wait-function'=>'dummyDum',
'data-success-place'=>'#addressListDiv',
'data-wait-place'=>'#guestWatingPlace',
'style'=>'display:none;',

]) !!}
    <script>

        window.dummyDum=function(a,b,c){

        }
        var voucher_type_fixed_index={{config('array.voucher_type_fixed_index')}};
        var voucher_type_percentage_index={{config('array.voucher_type_percentage_index')}};

        function checkVoucherCode(voucherInputNode){
            var voucherCode=voucherInputNode.val();

            $('#hiddenCodeInHiddenForm').val(voucherCode);
            formWithResponse('#voucherHiddenForm');
        }

       function countTotalWithVoucher(voucherCurrentAmount,type){

          var voucherDiscountAmount=(type == voucher_type_percentage_index)? $('#totalNumber').text()*1 * voucherCurrentAmount/100:voucherCurrentAmount ;

           var totalWithVoucher =($('#totalNumber').text()*1- voucherDiscountAmount    <=0)? 0:$('#totalNumber').text()*1 - voucherDiscountAmount;
           $('#totalWithVoucherH4 b').text(parseFloat((totalWithVoucher <=0)? 0:totalWithVoucher  ).toFixed(3)) ;
        }

        window.successResponseVoucher=function(form,id,data){

            data=JSON.parse(data);


            if(data.status =='success'){

               $('#voucherCodeInterFaceInput').attr("readonly","readonly");

                countTotalWithVoucher( data.voucher.current_amount , data.voucher.type );

                    $('#successValidationImg,#totalWithVoucherH4').show();
                    $('#successValidationImg').attr('data-success','true');

                    $('#errorValidationImg,#voucherErrorPlace').hide();

            }else{
                $('#successValidationImg,#totalWithVoucherH4').hide();

                $('#errorValidationImg,#voucherErrorPlace').show();

                if(typeof data.messages != "undefined"){

                    $('#voucherErrorPlace').text(data.messages);
                }
            }

        }

        window.errorResponseVoucher=function(form,id,data){
            $('#successValidationImg').hide();


        }


        function showVoucherError(message){

        }
    </script>
    <div><div>
            <input class="text_log" name="code"
                   placeholder="{{trans('website.code')}}"
                   id="hiddenCodeInHiddenForm"  type="text" >
        </div></div>
    <input type="submit" value="check">
    {!! Form::close() !!}




    </article></section>








    {{--<link href="/assets/website/css/bootstrap-datetimepicker.css" rel="stylesheet" media="screen">--}}



@stop

@section("script")
    @parent






    <script type="text/javascript" src="/assets/website/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript">
        $('.form_datetime').datetimepicker({
            //language:  'fr',
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            forceParse: 0,
            showMeridian: 1
        });
        $('.form_date').datetimepicker({
            language: 'en',
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        });
        $('.form_time').datetimepicker({
            language: 'en',
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 1,
            minView: 0,
            maxView: 1,
            forceParse: 0
        });
    </script>
    <script>
        $('.schedule_select_date_input').eq(0).change(function () {

        });

        function countTotalWithSchedule() {
            if ($('[name=timeType]:checked').val() == 'schedule') {
                $('#totalWithScheduleB').parent().parent().show();
            } else {
                $('#totalWithScheduleB').parent().parent().hide();
            }
            var total = $('#totalNumber').text() * 1;
            var selected_days = $('.schedule_day_checkbox:checked').length;
            var html = selected_days + ' X ' + total + ' =  ' + (total * selected_days) + ' ';
            $('#totalWithScheduleB').html(html);

            $('.schedule_day_checkbox').each(function () {

                if (!$(this).prop('checked')) {
                    $(this).closest('.scheduleRowDateTime').find('.scheduleTimeSelect').attr('disabled', 'disabled');
                } else {
                    $(this).closest('.scheduleRowDateTime').find('.scheduleTimeSelect').attr('disabled', false);
                }

            });

        }

        $('[name=timeType]').change(function () {
            countTotalWithSchedule()
        });
        $('.schedule_day_checkbox').change(function () {
            countTotalWithSchedule()
        });
        countTotalWithSchedule();
    </script>

    <script src="/assets/website/lib/js/date.js"></script>
    <script>
        {{--$('.schedule_select_date_input').change(function () {--}}
        {{--scheduleUpdateWeekDate($(this).val());--}}
        {{--});--}}
        {{--var allDays = {!! json_encode(config('array.days')) !!};--}}

        {{--function scheduleUpdateWeekDate(startDate) {--}}
        {{--var startDate = new Date(startDate);--}}


        {{--for (var i = 0; i < 7; i++) {--}}
        {{--var date = startDate.addDay(i);--}}
        {{--var dayIndex = date.getDay();--}}

        {{--var rowNode = $('#scheduleRowDateTime_' + dayIndex);--}}
        {{--rowNode.find('.dayName').text(allDays[dayIndex]);--}}
        {{--rowNode.find('.schedule_select_date_readonly,.schedule_select_date_input').val(date.format());--}}
        {{--rowNode.find('.dateLabel').text(date.format());--}}


        {{--}--}}
        {{--}--}}
        {{--scheduleUpdateWeekDate(new Date().format());--}}


    </script>
    <script>

        {{--function insertScheduleTimeInSelect() {--}}

        {{--var timeArray = dividePeriodToInterval(currentTime(), '{{ (isset($areaAvailableDayTime['to']))? $areaAvailableDayTime['to']:'23:59' }}', {{($pickup_interval > 0)? $pickup_interval:15 }});--}}
        {{--$('.scheduleTimeSelect ').html('<option value="">{{trans('website.setTime')}}</option>');--}}

        {{--for (var key in timeArray) {--}}
        {{--$('.scheduleTimeSelect').append('<option value="' + key + '">' + timeArray[key] + '</option>');--}}
        {{--}--}}
        {{--}--}}


        {{--function insertPickupTimeInSelect() {--}}
        {{--if ($('[name=timeType]:checked').val() != 'pickup') {--}}
        {{--$('#pickupTimeSelect ').parent().hide();--}}
        {{--$('#typeOfTimeHeader').text('{{trans('website.deliveryTime')}}');--}}
        {{--return false;--}}
        {{--} else {--}}

        {{--$('#typeOfTimeHeader').text('{{trans('website.pickupTime')}}');--}}
        {{--$('#pickupTimeSelect ').parent().show();--}}
        {{--}--}}
        {{--var timeArray = dividePeriodToInterval(currentTime(), '{{ (isset($areaAvailableDayTime['to']))? $areaAvailableDayTime['to']:'23:59' }}', {{($pickup_interval > 0)? $pickup_interval:15 }});--}}
        {{--$('#pickupTimeSelect ').html('<option value="">{{trans('website.pickupTime')}}</option>');--}}

        {{--for (var key in timeArray) {--}}
        {{--$('#pickupTimeSelect ').append('<option value="' + key + '">' + timeArray[key] + '</option>');--}}
        {{--}--}}
        {{--}--}}

        {{--$('[name=timeType]').change(function () {--}}
        {{--insertPickupTimeInSelect();--}}
        {{--});--}}
        {{--insertPickupTimeInSelect();--}}
        {{--insertScheduleTimeInSelect();--}}
    </script>
    <script>


        function hideShowCashMethod() {
            if ($('[name=timeType]:checked').val() == 'pickup' || $('[name=timeType]:checked').val() == 'schedule') {
                $('#cashOnDeliveryDiv ').hide();

            } else {

                $('#cashOnDeliveryDiv ').show();
            }
            $('#knetRadio').prop('checked', true);

        }
        $('[name=timeType]').change(function () {

            hideShowCashMethod();
        });
        hideShowCashMethod();
    </script>

    <script>

        function getScheduleTimeOptions() {
            var html='';
            var timeArray = dividePeriodToInterval('08:00', '23:59', {{($pickup_interval > 0)? $pickup_interval:15 }});
            html+='<option value="">{{trans('website.setTime')}}</option>';

            for (var key in timeArray) {
                html+='<option value="' + key + '">' + timeArray[key] + '</option>';
            }

            return html;
        }


        function getScheduleRow(date){



            var dayIndex=date.getDay();


            var allDays = {!! json_encode(config('array.days')) !!};
            var availableDays= {!! json_encode((is_array($areaAvailableDayTime['days']) ? $areaAvailableDayTime['days']:[] )) !!};



            var html='' +
                    ' 	<tr  class="scheduleRowDateTime" id="scheduleRowDateTime_'+dayIndex+'">'+
                    '<td width="40%">'+
                    '<div class="calender-date" >      '+allDays[dayIndex]+' 	  '+ date.format()+'</div>'+
                    '<input type="hidden" name="selected_date['+dayIndex+']" value="'+ date.format()+'" id="selected_date_'+dayIndex+'" class="schedule_select_date_input" data-day-index="'+dayIndex+'">'+
                    '</td>'+
                    '<td width="40%">'+
                    '<div class="select-div-col">'+
                    '<select name="selected_time['+dayIndex+']" id="selected_time_'+dayIndex+'" class="newstyle form-control scheduleTimeSelect">'+
                    getScheduleTimeOptions()+
                    '</select>'+
                    '</div>'+
                    '</td>'+
                    '<td width="20%" align="center" valign="middle"><label class="switch">'+
                    '<input type="checkbox" value="'+dayIndex+'" onchange="countTotalWithSchedule();" id="schedule_day_'+dayIndex+'" name="selected_day['+dayIndex+']"  class="schedule_day_checkbox" ';

            if( availableDays.indexOf(dayIndex)){
                html+='checked';
            }else{
                html+='disabled';
            }
            html+=' >'+
                    '<div class="slider round"></div>'+
                    '</label></td>'+
                    '</tr>';
            return html;
        }

        function addScheduleRows(date){
            var date = new Date(date);
            $('#scheduleDaysRowsTable tbody').html('');

            for(var i=0;i<7;i++){
                var oneRowHtml=getScheduleRow(date.addDay(i));

                $('#scheduleDaysRowsTable tbody').append(oneRowHtml);
            }
        }
        $('.schedule_select_date_input').change(function () {
            addScheduleRows($(this).val());

            countTotalWithSchedule();
        });

        addScheduleRows(new Date().format());
    </script>
    <script>


        function getPickupTimeOptions() {
            var html='';
            var intervalPeriod={{($pickup_interval > 0)? $pickup_interval:15 }};
            var timeArray = dividePeriodToInterval(currentTime(), '23:59',intervalPeriod );
            html+='<option value="">{{trans('website.setTime')}}</option>';
            var nextTime=intervalPeriod;

            for (var key in timeArray) {

                html+='<option value="' + key + '">' + nextTime + ' mins</option>';
                nextTime+=intervalPeriod;
            }

            return html;
        }

        $('#pickupTimeSelect').html(getPickupTimeOptions());
    </script>
    <script>
        function validateForm(){

            var errors=[];

            var addressValidate=validateAddress();
            if(addressValidate !== ''){
                errors.push(addressValidate);
            }

            var dateValidate=validateDate();
            if(dateValidate !== ''){
                errors.push(dateValidate);
            }

            var timeValidate=validateTime();
            if(timeValidate !== ''){
                errors.push(timeValidate);
            }


                    @if((  isset( $oOrder->shop->id) &&$oOrder->shop->isClose())||count($customErrors))

                event.preventDefault();
            event.stopPropagation();
            return false;
                 @endif

                             var guestValidate=validateGuest();
            if(guestValidate !==''){

                event.preventDefault();
                event.stopPropagation();
                return false;
                errors.push(guestValidate);
            }
            var voucherValidate=validateVoucher();
            if(voucherValidate !==''){
                errors.push(voucherValidate);
            }

            var agreementValidate=validateAgreement();
            if(agreementValidate !==''){
                errors.push(agreementValidate);

                $('#agreementAllDiv .errorDiv').html(agreementValidate);

                event.preventDefault();
                event.stopPropagation();
                return false;
            }else{
                $('#agreementAllDiv .errorDiv').html('');
            }


            if(errors.length > 0){

                var html = '<div style="text-align:center;padding:10px;color:#bf2828;padding-bottom: 50px;    font-size: 24px;">'+errors.join('<br>')+'</div>';
                $('#generalPopupModel  .modal-body').html(html);
                $('#generalPopupModel').modal('show');

                event.preventDefault();
                event.stopPropagation();
            }
//        else{
//            $('#allOrderForm').submit();
//        }

        }

        function validateAddress(){
            var errors='';
            if($('.oneAddressRadio[type=radio]:checked').length ==0 && $('[name=timeType]:checked').val() != 'pickup' ){


                errors= '{{trans('website.errorMessageDeliverArea')}} <br>';
            }

            return errors;
        }

        function validateDate(){
            var errors='';
            if( $('[name=timeType]:checked').val() == 'now' ){return '';}

            var currentDate=new Date().format();
            $('[name^=selected_date]').each(function(){
                if($(this).val() < currentDate){
                    errors+='You can not select previous date : '+$(this).val()+' <br>'
                }
            });

            return errors;
        }


        function validateTime(){
            var errors='';
            return '';

            if( $('[name=timeType]:checked').val() == 'now' ){return true;}

            $('[name^=selected_time]').each(function(){
                if($(this).val() ==''){
                    errors='please select time <br>'
                }
            });

            return errors;
        }

        function validateGuest(){
            var errors='';

            @if(!(isset(current_user()->getUser()->id ) && current_user()->getUser()->type==config('array.users_type_guest_index')))

    //return '';
            @else

            if($('#updateUserInfoForm input[name=first_name]').val()==''){$('#guest_first_name_error').text('Please fill Guest Name');
               errors+='Please fill Guest Name<br>';
                }
            if($('#updateUserInfoForm input[name=phone]').val()==''){$('#guest_phone_error').text('Please fill Guest phone');
               errors+='Please fill Guest phone<br>';
            }

            var emailExpretion = /\S+@\S+\.\S+/;

            if($('#updateUserInfoForm input[name=email]').val()=='' || ! emailExpretion.test($('#updateUserInfoForm input[name=email]').val())){

                $('#guest_email_error').text('Please fill Guest email with a corect email format');
               errors+='Please fill Guest email with a corect email format <br>';
            }
            if(errors == ''){
               // formWithResponse('#updateUserInfoForm');
            }
            @endif


                    return  errors;

        }

        function validateVoucher(){
            var errors='';

            if($('[name=payment_type]:checked').val() =='{{config('array.payment_type_voucher_index')}}' && $('#successValidationImg').attr('data-success') != 'true'){
                errors="{{trans('website.validationVoucherCode')}}";
            }
            return errors;
        }

        function validateAgreement(){
            var errors='';

            if(!$('#agreementCheckbox').prop('checked')){
                errors="{{trans('website.validateAgreement')}}";
            }
            return errors;
        }
    </script>


    <script>
      function  changeBranchServiceCharge(selectBranchNode){
          var aBranchServiceChargeList={!! json_encode($aBranchServiceChargeList) !!};

          if(typeof aBranchServiceChargeList[selectBranchNode.val()] == "undefined"){
              return false;
          }

          $('#totalNumber').text($('#totalNumber').text() - $('#serviceChargeb').text() +aBranchServiceChargeList[selectBranchNode.val()] );
          $('#serviceChargeb').text(aBranchServiceChargeList[selectBranchNode.val()]);


          checkVoucherCode($('#voucherCodeInterFaceInput'));
      }

      changeBranchServiceCharge($('#branch'));
    </script>
@stop





















