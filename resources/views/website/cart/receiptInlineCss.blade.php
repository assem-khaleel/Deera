<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        @media only screen and (min-width: 300px) and (max-width: 699px) {
            .container {
                width: 100%;
                padding: 0 10px;
            }
            .logo {
                width: 50%;
            }
            .onlineContainer {
                width: 50%;
            }
            .logo img {
                width: 100px;
            }
            .OnlineTitle{font-size: 22px; text-align: right;}
            .brownContainer{width:100%; height: auto;}
            .ThankYouDiv{height:auto; position: relative;}
            .mapDiv{width:100%; height: auto; text-align: center;}
            .trackOrderContainer{position: relative; height: auto;}
            .track{left:inherit;}
            .orderNumber{left:inherit; padding: 0 0 10px 0;}
            .paddingTop10 td{height:auto !important; float: left; width:100%;}
            .paddingTop10 td .bigGrayContent table tr td{    width: 50%;
                height: auto;
                float: left; }
            .bigGrayContent table tr {margin: 0 0 10px 0; display: inline-block; width:100%;}
            .fontSize13{margin:  10px 0 5px;}
            .tableContiner table td{width:50%;}
        }
    </style>
</head>
<body style="box-sizing:border-box;font-family:Helvetica;">
<p style="box-sizing:border-box;">
    @if( count( $oOrders ) )
        @foreach( $oOrders as $oOrder )
</p>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>pdf</title>
<link rel="stylesheet" href="assets/website/css/cssNewPDF1.css" type="text/css">
<!-- Pick up-->
@if(true)

    <div class="container" style="box-sizing:border-box;width:700px;margin:0px auto;">
        <div class="header" style="box-sizing:border-box;padding-top:50px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="box-sizing:border-box;">
                <tr style="box-sizing:border-box;">
                    <td class="logo" style="box-sizing:border-box;height:auto;width:75%;">
                        <img src="https://cofedistrict.com/assets/website/images/logo.png" style="box-sizing:border-box;width:160px;height:auto;"/>
                    </td>
                    <td class="onlineContainer" style="box-sizing:border-box;height:auto;width:25%;">
              <span class="OnlineTitle" style="box-sizing:border-box;font-size:33px;line-height:0.8;display:inline-block;font-family:Helvetica;width:100%;margin-top:10px;font-weight:bold;float:right;">
                ONLINE<br style="box-sizing:border-box;"/>
                        RECIEPT
                    </span>
                    </td>
                </tr>
            </table>
        </div>
        <div class="paddingTop10" style="box-sizing:border-box;padding-top:6px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="box-sizing:border-box;">
                <tr style="box-sizing:border-box;">
                    <td class="brownContainer" style="box-sizing:border-box;height:auto;width:60%;background:#e6c5a6;position:relative;height:60px;">
                        <div class="ThankYouDiv" style="box-sizing:border-box;padding-top:20px;padding:10px;text-align:center;font-family:Helvetica;width:100%;height:53px;position:absolute;z-index:100;top:0px;left:0px;font-size:16px;font-size: 17px;">
                            <strong style="box-sizing:border-box;">THANK YOU!</strong> For Ordering Through Cofe Disctrict<br style="box-sizing:border-box;"/>
                            <strong style="box-sizing:border-box;">Your Coffee Is Being Prepared! !</strong>
                        </div>
                    </td>
                    <td style="box-sizing:border-box;height:auto;width:10px;height: 60px;">
                        <div style="box-sizing:border-box;">&nbsp;</div>
                    </td>
                    <td class="mapDiv" style="box-sizing:border-box;height:auto;font-size:15px;background:#f3f3f5;position:relative;height:60px;">
                        <div class="trackOrderContainer" style="box-sizing:border-box;height:60px;display:block;position:absolute;z-index:50;top:0px;left:0px;">
                            <div class="track" style="box-sizing:border-box;padding-top:5px;font-size:18px;position:relative;left:50px;text-align: center; font-size: 25px;"> <b style="box-sizing:border-box;">Your Order! </b>
                            </div>
                            <div class="orderNumber" style="box-sizing:border-box;position:relative;left:50px;">Your Order Number: 	@if
                            (isset($oOrder->parent->id))

                                    <a href="/cart?order_id={{$oOrder->parent->id}}">#{{ $oOrder->parent->success_order_id }}</a>


                                @else

                                    {{$oOrder->success_order_id}}
                                @endif
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="paddingTop10" style="box-sizing:border-box;padding-top:6px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="box-sizing:border-box;">
                <tr style="box-sizing:border-box;">
                    <td width="50%" style="box-sizing:border-box;height:auto;">
                        <div class="fontSize13" style="box-sizing:border-box;font-size:15px;font-weight: bold;">CUSTOMER INFORMATION </div>
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="box-sizing:border-box;">
                            <tr style="box-sizing:border-box;">
                                <td class="bigGrayContent" style="box-sizing:border-box;height:auto;background:#f3f3f5;padding:10px;">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="box-sizing:border-box;">
                                        <tr style="box-sizing:border-box;">
                                            <td style="box-sizing:border-box;height:auto;height:30px;">
                                                <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">First Name:</div>
                                            </td>
                                            <td style="box-sizing:border-box;height:auto;height:30px;">
                                                <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">{{  $oOrder->users->first_name}}</div>
                                            </td>
                                        </tr>
                                        <tr style="box-sizing:border-box;">
                                            <td style="box-sizing:border-box;height:auto;height:30px;">
                                                <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">Last Name:</div>
                                            </td>
                                            <td style="box-sizing:border-box;height:auto;height:30px;">
                                                <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">@if($oOrder->users->last_name!="guest")
                                                     {{ $oOrder->users->last_name}}
                                                   @endif</div>
                                            </td>
                                        </tr>
                                        <tr style="box-sizing:border-box;">
                                            <td style="box-sizing:border-box;height:auto;height:30px;">
                                                <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">Mobile:</div>
                                            </td>
                                            <td style="box-sizing:border-box;height:auto;height:30px;">
                                                <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">{{ ($oOrder->users->mobile=='')? $oOrder->users->phone:$oOrder->users->mobile }}</div>
                                            </td>
                                        </tr>



                                        @if(false && isset($oOrder->parent->id))


                                            <tr style="box-sizing:border-box;">
                                                <td style="box-sizing:border-box;height:auto;height:30px;">
                                                    <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">Origin Order Id:</div>
                                                </td>
                                                <td style="box-sizing:border-box;height:auto;height:30px;">
                                                    <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">

                                                        <a href="/cart?order_id={{$oOrder->parent->id}}">#{{ $oOrder->parent->success_order_id }}</a>
                                                    </div>
                                                </td>
                                            </tr>

                                            @endif



                                        @if($oOrder->deliver_type==config('array.shop_deliver_type_deliver_index'))

                                        <tr style="box-sizing:border-box;">
                                            <td style="box-sizing:border-box;height:auto;height:30px;">
                                                <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">Delivery Address:</div>
                                            </td>
                                            <td style="box-sizing:border-box;height:auto;height:30px;">
                                                <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">@if(isset($oOrder->address->name)) {{$oOrder->address->name}} @endif</div>
                                            </td>
                                        </tr>
                                        @endif
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="box-sizing:border-box;height:auto;width:10px;height: 60px;">
                        <div style="box-sizing:border-box;">&nbsp;</div>
                    </td>
                    <td style="box-sizing:border-box;height:auto;">
                        <div class="fontSize13" style="box-sizing:border-box;font-size:15px;font-weight: bold;"> ORDER DETAILS</div>
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="box-sizing:border-box;">
                            <tr style="box-sizing:border-box;">
                                <td class="bigGrayContent" style="box-sizing:border-box;height:auto;background:#f3f3f5;padding:10px;">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="box-sizing:border-box;">
                                        <tr style="box-sizing:border-box;">
                                            <td colspan="2" style="box-sizing:border-box;height:auto;height:30px;">
                                                <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">Coffee Shop:</div>
                                            </td>
                                            <td colspan="2" style="box-sizing:border-box;height:auto;height:30px;">
                                                <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">{{isset($oOrder->shop->name_en)? $oOrder->shop->name_en:'' }}</div>
                                            </td>
                                        </tr>
                                        <tr style="box-sizing:border-box;">
                                            <td width="40%" style="box-sizing:border-box;height:auto;height:30px;">
                                                <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">Order Date:</div>
                                            </td>
                                            <td width="10%" style="box-sizing:border-box;height:auto;height:30px;">
                                                <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">{{$oOrder->deliver_date}}</div>
                                            </td>
                                            <td colspan="2" style="box-sizing:border-box;height:auto;height:30px;">
                                                <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">Order Time:</div>
                                            </td>
                                            <td colspan="2" style="box-sizing:border-box;height:auto;height:30px;">
                                                <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">{{$oOrder->deliver_time}}</div>
                                            </td>
                                        </tr>
                                        <tr style="box-sizing:border-box;">
                                            <td width="25%" style="box-sizing:border-box;height:auto;height:30px;">
                                                <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">Transcation ID:</div>
                                            </td>
                                            <td width="25%" style="box-sizing:border-box;height:auto;height:30px;">
                                                <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">

                                                    {{$oOrder->transaction_id()}}
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="box-sizing:border-box;">
                                            <td width="40%" style="box-sizing:border-box;height:auto;height:30px;">
                                                <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">Payment Method:</div>
                                            </td>
                                            <td width="10%" style="box-sizing:border-box;height:auto;height:30px;">
                                                <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">@if(isset($oOrder->payment()->first()->type)) {{array_key_exists($oOrder->payment()->first()->type,config('array.payment_type') )?config('array.payment_type')[$oOrder->payment()->first()->type]:''}} @endif</div>
                                            </td>
                                            <!--  <td width="25%"><div class="fontSize9">Track ID</div></td>
                                                                <td width="25%"><div class="fontSize9">-</div></td> -->
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        <div class="tableContiner" style="box-sizing:border-box;border:1px solid #000000;margin-top:10px;">
            <table class="fontSize13" border="0" cellpadding="0" cellspacing="0" style="box-sizing:border-box;font-size:15px;width:100%;padding:10px;">
                <thead style="box-sizing:border-box;">
                <tr style="box-sizing:border-box;">
                    <th class="borderBottom" style="box-sizing:border-box;border-bottom:1px solid #000000;width:16.6666%;text-align:left;padding:10px 5px;font-size:11px;font-weight:bold;">Qty.</th>
                    <th class="borderBottom" style="box-sizing:border-box;border-bottom:1px solid #000000;width:16.6666%;text-align:left;padding:10px 5px;font-size:11px;font-weight:bold;">Item</th>
                    <th class="borderBottom" style="box-sizing:border-box;border-bottom:1px solid #000000;width:16.6666%;text-align:left;padding:10px 5px;font-size:11px;font-weight:bold;">Size</th>
                    <th class="borderBottom" style="box-sizing:border-box;border-bottom:1px solid #000000;width:16.6666%;text-align:left;padding:10px 5px;font-size:11px;font-weight:bold;">Request</th>
                    <th class="borderBottom" style="box-sizing:border-box;border-bottom:1px solid #000000;width:16.6666%;text-align:left;padding:10px 5px;font-size:11px;font-weight:bold;">Price</th>
                    <th class="borderBottom" style="box-sizing:border-box;border-bottom:1px solid #000000;width:16.6666%;text-align:left;padding:10px 5px;font-size:11px;font-weight:bold;">Total</th>
                </tr>
                </thead>
                {{--*/$total=0;/*--}} @if($oOrder->cart) @foreach($oOrder->cart as $cart) {{--*/$total+=floatval($cart->unit_price)* floatval($cart->quantity);/*--}}

                <tbody style="box-sizing:border-box;">
                <tr style="box-sizing:border-box;">
                    <td style="box-sizing:border-box;height:auto;width:16.6666%;padding:10px 2px;font-size:11px;">{{$cart->quantity}}</td>
                    <td style="box-sizing:border-box;height:auto;width:16.6666%;padding:10px 2px;font-size:11px;">{{$cart->coffee->{'name_'.config('app.locale')} }}</td>
                    <td style="box-sizing:border-box;height:auto;width:16.6666%;padding:10px 2px;font-size:11px;">@if(isset($cart->size->id)) {{ $cart->size->{'name_'.config('app.locale')} }} @endif </td>
                    <td style="box-sizing:border-box;height:auto;width:16.6666%;padding:10px 2px;font-size:11px;">{{$cart->special_request}}</td>
                    <td style="box-sizing:border-box;height:auto;width:16.6666%;padding:10px 2px;font-size:11px;">{{ number_format(floatval($cart->unit_price),3)}}</td>
                    <td style="box-sizing:border-box;height:auto;width:16.6666%;padding:10px 2px;font-size:11px;">{{ number_format(floatval($cart->unit_price) * floatval($cart->quantity),3)}}</td>
                </tr>
                </tbody>
                @endforeach @endif
            </table>
            <hr class="hr" style="box-sizing:border-box;border:none;border-bottom:1px solid #000000;">
            <div class="paddingTop10" style="box-sizing:border-box;padding-top:6px;">
                <table id="ListTable" border="0" cellpadding="0" cellspacing="0" width="100%" style="box-sizing:border-box;width:100%;padding:10px;">
                    <tr style="box-sizing:border-box;">
                        <td width="50%" style="box-sizing:border-box;height:auto;width:16.6666%;padding:10px 2px;font-size:11px;max-height:20px;">{{ trans('website.subTotal') }}</td>
                        <td width="50%" class="text-right" style="box-sizing:border-box;height:auto;text-align:right;width:16.6666%;padding:10px 2px;font-size:11px;max-height:20px;">{{number_format(floatval($total),3)}}{{trans('website.kd')}}</td>
                    </tr>
                    <!-- <tr>
                                    <td width="50%">DISCOUNT</td>
                                    <td width="50%" class="text-right">0.500 KD</td>
                                </tr> -->
                    <tr style="box-sizing:border-box;">
                        <td width="50%" style="box-sizing:border-box;height:auto;width:16.6666%;padding:10px 2px;font-size:11px;max-height:20px;">

                            @if($oOrder->deliver_type==config('array.shop_deliver_type_deliver_index'))
                                Deliver Fees
                            @else
                                Service Fees
                            @endif
                        </td>
                        <td width="50%" class="text-right" style="box-sizing:border-box;height:auto;text-align:right;width:16.6666%;padding:10px 2px;font-size:11px;max-height:20px;">{{ number_format($fees,3)}} {{trans('website.kd')}}</td>
                    </tr>
                    {{--*/$product_option_total=$oOrder->product_option_total();/*--}}
                    <tr style="box-sizing:border-box;  @if($product_option_total==0) display:none; @endif ">
                        <td width="50%" style="box-sizing:border-box;height:auto;width:16.6666%;padding:10px 2px;font-size:11px;max-height:20px;">Add Ons</td>
                        <td width="50%" class="text-right" style="box-sizing:border-box;height:auto;text-align:right;width:16.6666%;padding:10px 2px;font-size:11px;max-height:20px;">{{number_format(floatval($product_option_total),3)}}  {{trans('website.kd')}}</td>
                    </tr>


                    <tr style="box-sizing:border-box;">
                        {{--*/$subTotla=floatval($total) *1 +$product_option_total+ $fees;/*--}}

                        <td width="50%" style="box-sizing:border-box;height:auto;width:16.6666%;padding:10px 2px;font-size:11px;max-height:20px;">{{ trans('website.TOTAL') }}</td>
                        <td width="50%" class="text-right" style="box-sizing:border-box;height:auto;text-align:right;width:16.6666%;padding:10px 2px;font-size:11px;max-height:20px; text-align:right;">{{number_format(floatval($subTotla),3)}} {{trans('website.kd')}}</td>
                    </tr>


                    @if(count($oOrder->children))


                        <tr style="box-sizing:border-box;">

                            <td width="50%" style="box-sizing:border-box;height:auto;width:16.6666%;padding:10px 2px;font-size:11px;max-height:20px;">Schedule Orders</td>
                            <td width="50%" class="text-right" style="box-sizing:border-box;height:auto;text-align:right;width:16.6666%;padding:10px 2px;font-size:11px;max-height:20px; text-align:right;">{{ count($oOrder->children) }}</td>
                        </tr>


                    @endif
                    @if($oOrder->total != $subTotla)
                        <tr>
                            <td width="50%">Total with Voucher  Discount :</td>
                            <td width="50%" class="text-right" style="text-align:right;">{{number_format(floatval($oOrder->total),3)}} {{trans('website.kd')}}</td>
                        </tr>
                    @endif
                </table>
            </div>
        </div>
        <div class="paddingTop10" style="box-sizing:border-box;padding-top:6px;">
            <div class="fontSize13" style="box-sizing:border-box;font-size:15px;font-weight:bold;">Disclaimer</div>
            <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">Coffee preparation was prepared by the coffee shop that was ordered from cofedistrict.com. Cofedistrict.com is not involved in any way in the process of preparation, production or pricing of this order. The Coffee Shop that was ordered from is responsible for the quality, pricing and the validity of the order and in turn Cofe District disclaims itself from any responsibility for any damage that might arise along this transaction. This report is attached to the order as a proof of the details of this transaction and to reflect the delivery charge. The Coffee Shop has the sole responsibility of pricing and any differences that exist between prices displayed on cofedistrict.com and the menus of the coffee shop shall be the responsibility. This transaction is subject to the terms and conditions of the website www.cofedistrict.com. </div>
        </div>
        <div class="paddingTop10" style="box-sizing:border-box;padding-top:6px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="box-sizing:border-box;">
                <tr style="box-sizing:border-box;">
                    <td width="15%" style="box-sizing:border-box;height:auto;">
                        <img src="https://cofedistrict.com/assets/website/images/AppStore.png" width="75" height="33" style="box-sizing:border-box;"/><br style="box-sizing:border-box;"/>
                        <img src="https://cofedistrict.com/assets/website/images/Google.png" width="75" height="33" style="box-sizing:border-box;"/>
                    </td>
                    <td width="30%" style="box-sizing:border-box;height:auto;padding-top: 24px;">
                        <div style="box-sizing:border-box;fontSize:13;">FOLLOW US</div>
                        <img src="https://cofedistrict.com/assets/website/images/Snapchat.png" width="28" height="28" style="box-sizing:border-box;"/>
                        <img src="https://cofedistrict.com/assets/website/images/Twitter.png" width="28" height="28" style="box-sizing:border-box;"/>
                        <img src="https://cofedistrict.com/assets/website/images/Instagram.png" width="28" height="28" style="box-sizing:border-box;"/>
                        <img src="https://cofedistrict.com/assets/website/images/YouTube.png" width="28" height="28" style="box-sizing:border-box;"/>
                    </td>
                    <td style="box-sizing:border-box;height:auto;"></td>
                    <td width="26%" style="box-sizing:border-box;height:auto;">
                        <div style="box-sizing:border-box;">
                            <div class="contactHeight" style="box-sizing:border-box;height:20px;">
                                <img src="https://cofedistrict.com/assets/website/images/Phone.png" width="20" height="20" style="box-sizing:border-box;"/> <span class="fontSize13" style="box-sizing:border-box;font-size:10px;display:inline-block;position:relative;top:-4px;">{{trans('website.deeraPhoneNumber')}}</span>
                            </div>
                            <div class="contactHeight" style="box-sizing:border-box;height:20px;">
                                <img src="https://cofedistrict.com/assets/website/images/Email.png" width="20" height="20" style="box-sizing:border-box;"/> <span class="fontSize13" style="box-sizing:border-box;font-size:15px;display:inline-block;position:relative;top:-4px;">info@cofedistrict.com</span>
                            </div>
                            <div class="contactHeight" style="box-sizing:border-box;height:20px;">
                                <img src="https://cofedistrict.com/assets/website/images/Website.png" width="20" height="20" style="box-sizing:border-box;"/> <span class="fontSize13" style="box-sizing:border-box;font-size:15px;display:inline-block;position:relative;top:-4px;">www.cofedistrict.com</span>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <!-- Pick up-->
        @else
                <!-- delevary-->
        <div class="container" style="box-sizing:border-box;width:700px;margin:0px auto;">
            <div class="header" style="box-sizing:border-box;padding-top:50px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="box-sizing:border-box;">
                    <tr style="box-sizing:border-box;">
                        <td class="logo" style="box-sizing:border-box;height:auto;width:75%;">
                            <img src="https://cofedistrict.com/assets/website/images/logo.png" style="box-sizing:border-box;width:160px;height:auto;"/>
                        </td>
                        <td class="onlineContainer" style="box-sizing:border-box;height:auto;width:25%;">
                <span class="OnlineTitle" style="box-sizing:border-box;font-size:33px;line-height:0.8;display:inline-block;font-family:Helvetica;width:100%;margin-top:10px;font-weight:bold;float:right;">
                  ONLINE<br style="box-sizing:border-box;"/>
                        RECIEPT
                    </span>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="paddingTop10" style="box-sizing:border-box;padding-top:6px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="box-sizing:border-box;">
                    <tr style="box-sizing:border-box;">
                        <td class="brownContainer" style="box-sizing:border-box;height:auto;width:60%;background:#e6c5a6;position:relative;height:60px;">
                            <div class="ThankYouDiv" style="box-sizing:border-box;padding-top:20px;padding:10px;text-align:center;font-family:Helvetica;width:100%;height:53px;position:absolute;z-index:100;top:0px;left:0px;font-size:16px;">
                                <strong style="box-sizing:border-box;">Thank You!</strong> For Ordering Through Cofe Disctrict<br style="box-sizing:border-box;"/>
                                <strong style="box-sizing:border-box;">Your Coffee Is On The Way!</strong>
                            </div>
                        </td>
                        <td style="box-sizing:border-box;height:auto;width:10px;height: 60px;">
                            <div style="box-sizing:border-box;">&nbsp;</div>
                        </td>
                        <td class="mapDiv" style="box-sizing:border-box;height:auto;font-size:15px;background:#f3f3f5;position:relative;height:60px;">
                            <div class="trackOrderContainer" style="box-sizing:border-box;height:60px;display:block;position:absolute;z-index:50;top:0px;left:0px;">
                                <div class="track" style="box-sizing:border-box;padding-top:5px;font-size:18px;position:relative;left:50px;">
                                    <img src="assets/website/images/Map.png" width="19" height="23" style="box-sizing:border-box;position:relative;top:4px;"/>Track Your Order!</div>
                                <div class="orderNumber" style="box-sizing:border-box;position:relative;left:50px;">Your Order Number: {{$oOrder->success_order_id}}</div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="paddingTop10" style="box-sizing:border-box;padding-top:6px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="box-sizing:border-box;">
                    <tr style="box-sizing:border-box;">
                        <td width="50%" style="box-sizing:border-box;height:auto;">
                            <div class="fontSize13" style="box-sizing:border-box;font-size:15px;font-weight: bold;">Customer Information</div>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="box-sizing:border-box;">
                                <tr style="box-sizing:border-box;">
                                    <td class="bigGrayContent" style="box-sizing:border-box;height:auto;background:#f3f3f5;padding:10px;">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="box-sizing:border-box;">
                                            <tr style="box-sizing:border-box;">
                                                <td style="box-sizing:border-box;height:auto;height:30px;">
                                                    <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">First Name:</div>
                                                </td>
                                                <td style="box-sizing:border-box;height:auto;height:30px;">
                                                    <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">{{$oOrder->users->first_name}}</div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing:border-box;">
                                                <td style="box-sizing:border-box;height:auto;height:30px;">
                                                    <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">Last Name:</div>
                                                </td>
                                                <td style="box-sizing:border-box;height:auto;height:30px;">
                                                    <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">{{ $oOrder->users->last_name}}</div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing:border-box;">
                                                <td style="box-sizing:border-box;height:auto;height:30px;">
                                                    <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">Mobile:</div>
                                                </td>
                                                <td style="box-sizing:border-box;height:auto;height:30px;">
                                                    <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">{{ ($oOrder->users->mobile=='')? $oOrder->users->phone:$oOrder->users->mobile }}</div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing:border-box;">
                                                <td style="box-sizing:border-box;height:auto;height:30px;">
                                                    <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">Delivery Address:</div>
                                                </td>
                                                <td style="box-sizing:border-box;height:auto;height:30px;">
                                                    <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">@if(isset($oOrder->address->name)) {{$oOrder->address->name}} @endif</div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td style="box-sizing:border-box;height:auto;width:10px;height: 60px;">
                            <div style="box-sizing:border-box;">&nbsp;</div>
                        </td>
                        <td style="box-sizing:border-box;height:auto;">
                            <div class="fontSize13" style="box-sizing:border-box;font-size:15px;font-weight: bold;">Order Details</div>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="box-sizing:border-box;">
                                <tr style="box-sizing:border-box;">
                                    <td class="bigGrayContent" style="box-sizing:border-box;height:auto;background:#f3f3f5;padding:10px;">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="box-sizing:border-box;">
                                            <tr style="box-sizing:border-box;">
                                                <td colspan="2" style="box-sizing:border-box;height:auto;height:30px;">
                                                    <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">Coffee Shop:</div>
                                                </td>
                                                <td colspan="2" style="box-sizing:border-box;height:auto;height:30px;">
                                                    <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">{{isset($oOrder->shop->name_en)? $oOrder->shop->name_en:'' }}</div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing:border-box;">
                                                <td width="40%" style="box-sizing:border-box;height:auto;height:30px;">
                                                    <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">Order Date:</div>
                                                </td>
                                                <td width="10%" style="box-sizing:border-box;height:auto;height:30px;">
                                                    <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">{{$oOrder->deliver_date}}</div>
                                                </td>
                                                <td width="25%" style="box-sizing:border-box;height:auto;height:30px;">
                                                    <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">Transcation ID:</div>
                                                </td>
                                                <td width="25%" style="box-sizing:border-box;height:auto;height:30px;">
                                                    <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">{{$oOrder->transaction_id()}}</div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing:border-box;">
                                                <td colspan="2" style="box-sizing:border-box;height:auto;height:30px;">
                                                    <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">Order Time:</div>
                                                </td>
                                                <td colspan="2" style="box-sizing:border-box;height:auto;height:30px;">
                                                    <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">{{$oOrder->deliver_time}}</div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing:border-box;">
                                                <td width="40%" style="box-sizing:border-box;height:auto;height:30px;">
                                                    <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">Payment Method:</div>
                                                </td>
                                                <td width="10%" style="box-sizing:border-box;height:auto;height:30px;">
                                                    <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">@if(isset($oOrder->payment()->first()->type)) {{$oOrder->payment()->first()->type}} @endif</div>
                                                </td>
                                                <td width="25%" style="box-sizing:border-box;height:auto;height:30px;">
                                                    <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">Track ID</div>
                                                </td>
                                                <td width="25%" style="box-sizing:border-box;height:auto;height:30px;">
                                                    <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">-</div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="tableContiner" style="box-sizing:border-box;border:1px solid #000000;margin-top:10px;">
                <table class="fontSize13" border="0" cellpadding="0" cellspacing="0" style="box-sizing:border-box;font-size:15px;width:100%;padding:10px;">
                    <thead style="box-sizing:border-box;">
                    <tr style="box-sizing:border-box;">
                        <th class="borderBottom" style="box-sizing:border-box;border-bottom:1px solid #000000;width:16.6666%;text-align:left;padding:10px 5px;font-size:11px;font-weight:bold;">Qty.</th>
                        <th class="borderBottom" style="box-sizing:border-box;border-bottom:1px solid #000000;width:16.6666%;text-align:left;padding:10px 5px;font-size:11px;font-weight:bold;">Item</th>
                        <th class="borderBottom" style="box-sizing:border-box;border-bottom:1px solid #000000;width:16.6666%;text-align:left;padding:10px 5px;font-size:11px;font-weight:bold;">Size</th>
                        <th class="borderBottom" style="box-sizing:border-box;border-bottom:1px solid #000000;width:16.6666%;text-align:left;padding:10px 5px;font-size:11px;font-weight:bold;">Request</th>
                        <th class="borderBottom" style="box-sizing:border-box;border-bottom:1px solid #000000;width:16.6666%;text-align:left;padding:10px 5px;font-size:11px;font-weight:bold;">Price</th>
                        <th class="borderBottom" style="box-sizing:border-box;border-bottom:1px solid #000000;width:16.6666%;text-align:left;padding:10px 5px;font-size:11px;font-weight:bold;">Total</th>
                    </tr>
                    </thead>
                    {{--*/$total=0;
				$fees=0;

				if(isset($oOrder->shop->service_charge)){

				$fees=$oOrder->deliver_type==config('array.shop_deliver_type_deliver_index')? $oOrder->shop->deliver_charge:$oOrder->shop->service_charge;
$fees=floatval($fees);
				}



				/*--}} @if($oOrder->cart) @foreach($oOrder->cart as $cart) {{--*/$total+=floatval($cart->unit_price)* floatval($cart->quantity);/*--}}

                    <tbody style="box-sizing:border-box;">
                    <tr style="box-sizing:border-box;">
                        <td style="box-sizing:border-box;height:auto;width:16.6666%;padding:10px 2px;font-size:11px;">{{$cart->quantity}}</td>
                        <td style="box-sizing:border-box;height:auto;width:16.6666%;padding:10px 2px;font-size:11px;">{{$cart->coffee->{'name_'.config('app.locale')} }}</td>
                        <td style="box-sizing:border-box;height:auto;width:16.6666%;padding:10px 2px;font-size:11px;">@if(isset($cart->size->id)) {{ $cart->size->{'name_'.config('app.locale')} }} @endif </td>
                        <td style="box-sizing:border-box;height:auto;width:16.6666%;padding:10px 2px;font-size:11px;">{{$cart->special_request}}</td>
                        <td style="box-sizing:border-box;height:auto;width:16.6666%;padding:10px 2px;font-size:11px;">{{$cart->unit_price}}</td>
                        <td style="box-sizing:border-box;height:auto;width:16.6666%;padding:10px 2px;font-size:11px;">{{floatval($cart->unit_price) * floatval($cart->quantity)}}</td>
                    </tr>



                    @if(count($cart->product_option))
                        @foreach($cart->product_option as $option)
                            <tr style="box-sizing:border-box;">
                                <td style="box-sizing:border-box;height:auto;width:16.6666%;padding:10px 2px;font-size:11px;">1</td>
                                <td style="box-sizing:border-box;height:auto;width:16.6666%;padding:10px 2px;font-size:11px;">{{isset($option->product_option->name_en)? $option->product_option->name_en:''}}</td>
                                <td style="box-sizing:border-box;height:auto;width:16.6666%;padding:10px 2px;font-size:11px;"> </td>
                                <td style="box-sizing:border-box;height:auto;width:16.6666%;padding:10px 2px;font-size:11px;"></td>
                                <td style="box-sizing:border-box;height:auto;width:16.6666%;padding:10px 2px;font-size:11px;">{{isset($option->product_option->name_en)? $option->product_option->price:''}}</td>
                                <td style="box-sizing:border-box;height:auto;width:16.6666%;padding:10px 2px;font-size:11px;">{{isset($option->product_option->name_en)? $option->product_option->price:''}}</td>
                            </tr>

                        @endforeach
                    @endif


                    </tbody>
                    @endforeach @endif
                </table>
                <hr class="hr" style="box-sizing:border-box;border:none;border-bottom:1px solid #000000;">
                <div class="paddingTop10" style="box-sizing:border-box;padding-top:6px;">
                    <table id="ListTable" border="0" cellpadding="0" cellspacing="0" width="100%" style="box-sizing:border-box;width:100%;padding:10px;">
                        <tr style="box-sizing:border-box;">
                            <td width="50%" style="box-sizing:border-box;height:auto;width:16.6666%;padding:10px 2px;font-size:11px;max-height:20px;">{{ trans('website.subTotal') }}</td>
                            <td width="50%" class="text-right" style="box-sizing:border-box;height:auto;text-align:right;width:16.6666%;padding:10px 2px;font-size:11px;max-height:20px;">{{$total}}{{trans('website.kd')}}</td>
                        </tr>
                        <!--   <tr>
                                      <td width="50%">DISCOUNT</td>
                                      <td width="50%" class="text-right">0.500 KD</td>
                                  </tr> -->
                        <tr style="box-sizing:border-box;">
                            <td width="50%" style="box-sizing:border-box;height:auto;width:16.6666%;padding:10px 2px;font-size:11px;max-height:20px;">{{ trans('website.delevaryFees') }}</td>
                            <td width="50%" class="text-right" style="box-sizing:border-box;height:auto;text-align:right;width:16.6666%;padding:10px 2px;font-size:11px;max-height:20px;">{{$oOrder->shop->deliver_charge}} {{trans('website.kd')}}</td>
                        </tr>
                        <tr style="box-sizing:border-box;">
                            <td width="50%" style="box-sizing:border-box;height:auto;width:16.6666%;padding:10px 2px;font-size:11px;max-height:20px;">{{ trans('website.TOTAL') }}</td>
                            <td width="50%" class="text-right" style="box-sizing:border-box;height:auto;text-align:right;width:16.6666%;padding:10px 2px;font-size:11px;max-height:20px;">{{floatval($total) *1 + floatval($oOrder->shop->deliver_charge) *1 }}{{trans('website.kd')}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="paddingTop10" style="box-sizing:border-box;padding-top:6px;">
                <div class="fontSize13" style="box-sizing:border-box;font-size:15px;font-weight:bold;">Disclaimer</div>
                <div class="fontSize9" style="box-sizing:border-box;font-size:11px;">Coffee preparation was prepared by the coffee shop that was ordered from cofedistrict.com. Cofedistrict.com is not involved in any way in the process of preparation, production or pricing of this order. The Coffee Shop that was ordered from is responsible for the quality, pricing and the validity of the order and in turn Cofe District disclaims itself from any responsibility for any damage that might arise along this transaction. This report is attached to the order as a proof of the details of this transaction and to reflect the delivery charge. The Coffee Shop has the sole responsibility of pricing and any differences that exist between prices displayed on cofedistrict.com and the menus of the coffee shop shall be the responsibility. This transaction is subject to the terms and conditions of the website www.cofedistrict.com. </div>
            </div>
            <div class="paddingTop10 orderfoot" style="box-sizing:border-box;padding-top:6px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="box-sizing:border-box;">
                    <tr style="box-sizing:border-box;">
                        <td width="15%" style="box-sizing:border-box;height:auto;">
                            <img src="https://cofedistrict.com/assets/website/images/AppStore.png" width="75" height="33" style="box-sizing:border-box;"/><br style="box-sizing:border-box;"/>
                            <img src="https://cofedistrict.com/assets/website/images/Google.png" width="75" height="33" style="box-sizing:border-box;"/>
                        </td>
                        <td width="30%" style="box-sizing:border-box;height:auto;padding-top: 24px;">
                            <div style="box-sizing:border-box;fontSize:13;">FOLLOW US</div>
                            <img src="https://cofedistrict.com/assets/website/images/Snapchat.png" width="28" height="28" style="box-sizing:border-box;"/>
                            <img src="https://cofedistrict.com/assets/website/images/Twitter.png" width="28" height="28" style="box-sizing:border-box;"/>
                            <img src="https://cofedistrict.com/assets/website/images/Instagram.png" width="28" height="28" style="box-sizing:border-box;"/>
                            <img src="https://cofedistrict.com/assets/website/images/YouTube.png" width="28" height="28" style="box-sizing:border-box;"/>
                        </td>
                        <td style="box-sizing:border-box;height:auto;"></td>
                        <td width="26%" style="box-sizing:border-box;height:auto;">
                            <div style="box-sizing:border-box;">
                                <div class="contactHeight" style="box-sizing:border-box;height:20px;">
                                    <img src="https://cofedistrict.com/assets/website/images/Phone.png" width="20" height="20" style="box-sizing:border-box;"/> <span class="fontSize13" style="box-sizing:border-box;font-size:15px;display:inline-block;position:relative;top:-4px;">2222 2222</span>
                                </div>
                                <div class="contactHeight" style="box-sizing:border-box;height:20px;">
                                    <img src="https://cofedistrict.com/assets/website/images/Email.png" width="20" height="20" style="box-sizing:border-box;"/> <span class="fontSize13" style="box-sizing:border-box;font-size:15px;display:inline-block;position:relative;top:-4px;">info@cofedistrict.com</span>
                                </div>
                                <div class="contactHeight" style="box-sizing:border-box;height:20px;">
                                    <img src="https://cofedistrict.com/assets/website/images/Website.png" width="20" height="20" style="box-sizing:border-box;"/> <span class="fontSize13" style="box-sizing:border-box;font-size:15px;display:inline-block;position:relative;top:-4px;">www.cofedistrict.com</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- delevary-->
            @endif
            @endforeach @endif</div>
    </div>
</body>
</html>