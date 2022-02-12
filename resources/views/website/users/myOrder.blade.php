@extends('website.layouts.main')
@section('title', trans('website.myOrders').'  '.trans('website.pages_title'))
@section('content')




    <section class="main-wrapper">
        <article class="container">	


            <section class="inner-wrapper">

                <div class="caption-sec myordertitle">
                    <h1>{{trans('website.myOrders')}}</h1>
                </div>

                <div class="inner-content">
                    <div class="tab_section full-width">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation"><a href="#home" aria-controls="home" role="tab"
                                                                      data-toggle="tab">  {{trans('website.completedOrders')}}</a></li>
                            <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab"
                                                       data-toggle="tab">{{trans('website.currentOrders')}}</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane " id="home">


                                @if(count($oOrderResults))
                                    @foreach($oOrderResults as $oOrderResult)
@if($oOrderResult->status == config('array.order_status_delivered_index'))

                                        @if(isset($oOrderResult->cart ) )
                                            {{--*/ $coffeeIds='';$coffeeQuantity='';
                                            $coffeeSizes='';
                                            $unitPrice='';
                                            $specialRequest='';
                                            $options='';
                                            /*--}}
                                            @foreach($oOrderResult->cart as $cart)
                                                {{--*/ $coffeeIds.='&coffee_id[]='.$cart->coffee_id;
                                                 $coffeeQuantity.='&quantity['.$cart->coffee_id.']='.$cart->quantity;
                                                 $coffeeSizes.='&size['.$cart->coffee_id.']='.$cart->size_id;
                                                 $unitPrice.='&unit_price['.$cart->coffee_id.']='.$cart->unit_price;
                                                 $specialRequest.='&special_request['.$cart->coffee_id.']='.$cart->special_request;



                                                 /*--}}

                                                {{--*/

                                                if(count($cart->product_option)){
                                                                foreach($cart->product_option as $option){
                                                                   $options.='&options['.$cart->coffee_id.']['.$option->product_option_id.']='.$option->product_option_id;
                                                                    }
                                                                    }

                                                /*--}}
                                            @endforeach
                                        @endif


                                        <div class="full-width orders">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 for-small">
                                                    <img src="{{$oOrderResult->shop->img}}" style="width:120px;height: 90px;" alt="caf"/>
                                                    
                                   <!--<img src="{{$oOrderResult->shop->img}}" style="width:120px;height: 90px;" alt="caf"/>-->

                                                    <h2>{{$oOrderResult->shop->{'name_'.config('app.locale')} }}
                                                        <span>Order #{{$oOrderResult->success_order_id}}</span>
                                                        <span>{{$oOrderResult->deliver_date}}</span>
                                                        <span>{{$oOrderResult->deliver_time}}</span>
                                                    </h2>
                                                </div>
                                                <!-- /.col-lg-6 -->
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 for-small txt_right">
                                                    <a href="/order/create?{{ $coffeeIds }}{{$coffeeQuantity}}{{$coffeeSizes}}{{$unitPrice}}{{$specialRequest}}{{$options}}&reorder=1&redirectToOrder={{$oOrderResult->id}}">
                                                        <img src="/assets/website/images/re_order.png" alt="reorder"/>
                                                        <span>{{trans('website.reOrder')}}</span>
                                                    </a>

                                                    <a href="/cart?order_id={{$oOrderResult->id}}" target="_blank">
                                                        <img src="/assets/website/images/receipt.png" alt="reorder"/>
                                                        <span>{{trans('website.receipt')}}</span>
                                                    </a>
                                                </div>
                                                <!-- /.col-lg-6 -->
                                            </div>
                                            <!-- /.row -->
                                        </div>

                                        @endif


                                    @endforeach
                                @endif


                            </div>
                            <!-- /.first tab -->
                            <div role="tabpanel" class="tab-pane active" id="profile">





                                @if(count($oOrderResults))
                                    @foreach($oOrderResults as $oOrderResult)
                                        @if($oOrderResult->status != config('array.order_status_delivered_index')
                                        && $oOrderResult->status != config('array.order_status_pending_index'))

                                            {{--*/$sumTotalFromCart=0;/*--}}
                                            @if(isset($oOrderResult->cart ) )
                                                {{--*/ $coffeeIds='';$coffeeQuantity=''; /*--}}
                                                @foreach($oOrderResult->cart as $cart)
                                                    {{--*/ $coffeeIds.='&coffee_id[]='.$cart->coffee_id;
                                                     $coffeeQuantity.='&quantity['.$cart->coffee_id.']='.$cart->quantity;
                                                     $sumTotalFromCart+=floatval($cart->unit_price) *floatval($cart->quantity);
                                                     /*--}}
                                                @endforeach
                                            @endif
                                            <div class="full-width orders" style="xxx_background-color:{{config('array.order_status_color')[$oOrderResult->status]}} !important;">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 for-small">
                                                        <img src="{{isset($oOrderResult->shop->img)?$oOrderResult->shop->img:''}}" style="width:120px; height: 120px; " alt="caf"/>
                                                        
                                                        


                                                        <h2>{{isset($oOrderResult->shop->img)?$oOrderResult->shop->{'name_'.config('app.locale')}:'' }}
                                                            <span>Order #{{$oOrderResult->success_order_id}}</span>
                                                            <span>{{$oOrderResult->deliver_date}}</span>
                                                            
                                                            <span>{{$oOrderResult->deliver_time}}</span>
                                                            <span>{{ ($oOrderResult->total > 0)? $oOrderResult->total:$oOrderResult->sub_total +$oOrderResult->shop->service_charge }}{{-- $sumTotalFromCart --)}} {{trans('website.kd')}}</span>
                                                            {{--<span>{{trans('website.status')}} : {{config('array.order_status')[$oOrderResult->status] }}</span>--}}
                                                        </h2>
                                                    </div>
                                                    <!-- /.col-lg-6 -->
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 for-small txt_right">


                                                        @if( $oOrderResult->deliver_type!=config('array.shop_deliver_type_pickup_index'))

                                                        <a href="/order-step?order_id={{$oOrderResult->id}}" id="orderSummary_{{$oOrderResult->id}}" class="aWithResponse" data-success-place="#generalPopupModel  .modal-body">
                                                            <img src="/assets/website/images/summary.png" alt="summary"/>
                                                            <span>{{trans('website.summary')}}</span>
                                                        </a>
                                                        @endif
                                                        <a href="/cart?order_id={{$oOrderResult->id}}" target="_blank">
                                                            <img src="/assets/website/images/receipt.png" alt="reorder"/>
                                                            <span>{{trans('website.receipt')}}</span>
 

                                                        </a>
 
                                                        <a style="display: none" href="/receipt/receipt_pdf?order_id={{$oOrderResult->id}}" target="_blank">
                                                            <img src="/assets/website/images/pdf.png" alt="reorder" style="    width: 32px;
" />
                                                            <span>{{trans('website.receipt_pdf')}}</span>
 

                                                        </a>

                                                        <a  style="display: none" onclick="window.open('/cart?order_id={{$oOrderResult->id}}','Print','').print()">
                                                            <img src="/assets/website/images/print.png" alt="reorder" width="30px" />
                                                            <span>{{trans('website.print')}}</span>
 




                                                        </a>



                                                    </div>
                                                    <!-- /.col-lg-6 -->
                                                </div>
                                                <!-- /.row -->
                                            </div>

                                        @endif


                                    @endforeach
                                @endif




                            </div>
                        </div>
                    </div>
                    <!-- /.accordian_example -->
                </div>





            </section>


        </article>
    </section>


@stop

@section('script')
    @parent
    <script>


    </script>
@stop























