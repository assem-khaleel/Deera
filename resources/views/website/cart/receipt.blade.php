@if( count( $oOrders ) )

@foreach( $oOrders as $oOrder )

<!DOCtype html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RECIEPT|Cofe district</title>



	<link rel="stylesheet" href="assets/website/css/cssNewPDF1.css" type="text/css">




</head>

<body>



	<!-- Pick up-->
	@if(true)

	<div class="container">

		<div class="header nopadding">
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td class="logo"><img src="assets/website/images/logo.png"/>
					</td>
					<td class="onlineContainer">
						<span class="OnlineTitle">
                        ONLINE<br />
                        RECIEPT
                    </span>



					</td>
				</tr>
			</table>
		</div>
		<div class="paddingTop10">
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td class="brownContainer">
						<div class="ThankYouDiv" style="font-size: 17px">
							<strong>THANK YOU!</strong> For Ordering Through Cofe Disctrict<br/>

							<strong>Your Coffee Is Being Prepared! !</strong>
						</div>
					</td>
					<td style="width:10px;height: 60px;">
						<div>&nbsp;</div>
					</td>
					<td class="mapDiv">
						<div class="trackOrderContainer">
							<div class="track" style="text-align: center; font-size: 25px"> <b>Your Order! </b>
							</div>
							<div class="orderNumber">Your Order Number:


								@if(isset($oOrder->parent->id))

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









		<div class="paddingTop10">
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td width="50%">
						<div class="fontSize13" style="font-weight: bold;">CUSTOMER INFORMATION </div>
						<table border="0" cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td class="bigGrayContent">
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td>
												<div class="fontSize9">First Name:</div>
											</td>
											<td>
												<div class="fontSize9">{{$oOrder->users->first_name}}</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="fontSize9">Last Name:</div>
											</td>
											<td>
												<div class="fontSize9"> @if($oOrder->users->last_name!="guest") {{ $oOrder->users->last_name}} @endif

												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="fontSize9">Mobile:</div>
											</td>
											<td>
												<div class="fontSize9">{{ ($oOrder->users->mobile=='')? $oOrder->users->phone:$oOrder->users->mobile }}</div>
											</td>
										</tr>


										@if(false && isset($oOrder->parent->id))
											<tr>
												<td>
													<div class="fontSize9">Origin Order Id:</div>
												</td>
												<td>
													<div class="fontSize9">
														<a href="/cart?order_id={{$oOrder->parent->id}}">#{{ $oOrder->parent->success_order_id }}</a>
													</div>
												</td>
											</tr>
											@endif


										@if($oOrder->deliver_type==config('array.shop_deliver_type_deliver_index'))

											<tr>
											<td>
												<div class="fontSize9">Delivery Address:</div>
											</td>
											<td>
												<div class="fontSize9">@if(isset($oOrder->address->name)) {{$oOrder->address->name}} @endif</div>
											</td>
										</tr>
											@endif
									</table>
								</td>
							</tr>
						</table>
					</td>
					<td style="width:10px;height: 60px;">
						<div>&nbsp;</div>
					</td>
					<td>
						<div class="fontSize13" style="font-weight: bold;"> ORDER DETAILS</div>
						<table border="0" cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td class="bigGrayContent">
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td>
												<div class="fontSize9">Coffee Shop:</div>
											</td>
											<td>
												<div class="fontSize9">{{isset($oOrder->shop->name_en)? $oOrder->shop->name_en:'' }}</div>
											</td>
										</tr>
										<tr>
											<td width="25%" class="td25">
												<div class="fontSize9">Order Date:</div>
											</td>
											<td width="25%" class="td25">
												<div class="fontSize9">{{$oOrder->deliver_date}}</div>
											</td>



											<td width="25%" class="td25" style="margin:10px 0 0 0;">
												<div class="fontSize9" style="font-weight:700;">Order Time:</div>
											</td>
											<td width="25%" class="td25">
												<div class="fontSize9">{{$oOrder->deliver_time}}</div>
											</td>
										</tr>
										<tr>
											@if($oOrder->payment()->first()->type)
											<td width="25%">
												<div class="fontSize9">Transaction ID:</div>
											</td>
											<td width="25%">
												<div class="fontSize9">
													{{$oOrder->transaction_id()}}

												</div>
											</td>
											@endif
										</tr>
										<tr>
											<td width="40%">
												<div class="fontSize9">Payment Method:</div>
											</td>
											<td width="10%">
												<div class="fontSize9">@if(isset($oOrder->payment()->first()->type)) {{array_key_exists($oOrder->payment()->first()->type,config('array.payment_type') )?config('array.payment_type')[$oOrder->payment()->first()->type]:''}} @endif</div>
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




		<div class="tableContiner">
			<table class="fontSize13" border="0" cellpadding="0" cellspacing="0">
				<thead>
					<tr>
						<th class="borderBottom">Qty.</th>
						<th class="borderBottom">Item</th>
						<th class="borderBottom">Size</th>
						<th class="borderBottom">Request</th>
						<th class="borderBottom">Price</th>
						<th class="borderBottom">Total</th>
					</tr>
				</thead>
				{{--*/$total=0;
				$fees=0;

				if(isset($oOrder->shop->service_charge)){

				$fees=$oOrder->deliver_type==config('array.shop_deliver_type_deliver_index')? $oOrder->shop->deliver_charge:$oOrder->shop->service_charge;
$fees=floatval($fees);
				}



				/*--}} @if($oOrder->cart) @foreach($oOrder->cart as $cart) {{--*/$total+=floatval($cart->unit_price)* floatval($cart->quantity);/*--}}
				<tbody>

				<tr>
					<td>{{$cart->quantity}}</td>
					<td>{{$cart->coffee->{'name_'.config('app.locale')} }}</td>
					<td>@if(isset($cart->size->id)) {{ $cart->size->{'name_'.config('app.locale')} }} @endif </td>
					<td>{{$cart->special_request}}</td>
					<td>{{$cart->unit_price}}</td>
					<td>{{ number_format(floatval($cart->unit_price) * floatval($cart->quantity),3) }}</td>
				</tr>


				@if(count($cart->product_option))
					@foreach($cart->product_option as $option)

						<tr>
							<td>1</td>
							<td>{{isset($option->product_option->name_en)? $option->product_option->name_en:''}}</td>
							<td> </td>
							<td></td>
							<td>{{isset($option->product_option->name_en)? $option->product_option->price:''}}</td>
							<td>{{isset($option->product_option->name_en)? $option->product_option->price:''}}</td>
						</tr>

					@endforeach
				@endif


				</tbody>
				@endforeach @endif
			</table>

			<hr class="hr"/>
			<div class="paddingTop10">
				<table id="ListTable" border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>

						<td>{{ trans('website.subTotal') }}</td>
						<td class="text-right">{{number_format($total,3)}} {{trans('website.kd')}}</td>
					</tr>
					<!-- <tr>
                            <td width="50%">DISCOUNT</td>
                            <td width="50%" class="text-right">0.500 KD</td>
                        </tr> -->
					<tr>


						<td>
						@if($oOrder->deliver_type==config('array.shop_deliver_type_deliver_index'))
							Deliver Fees
							@else
								Service Fees
							@endif

						</td>
						<td class="text-right">{{  number_format($fees,3)}} {{trans('website.kd')}}</td>
					</tr>
					{{--*/$product_option_total=$oOrder->product_option_total();/*--}}
					<tr @if($product_option_total==0) style="display:none" @endif>
						<td>Add Ons</td>

						<td class="text-right">{{number_format(floatval($product_option_total),3)}} {{trans('website.kd')}}</td>

					</tr>



					<tr>
						<td>{{ trans('website.TOTAL') }}</td>
						{{--*/$subTotla=floatval($total) *1 +$product_option_total+ $fees;/*--}}


						<td class="text-right">{{ number_format(floatval($subTotla),3)}} {{trans('website.kd')}}</td>


					</tr>
@if($oOrder->payment()->first()->type)
					@if(count($oOrder->children))
						<tr>
							<td>Schedule Orders</td>

							<td class="text-right">{{ count($oOrder->children) }}</td>
						</tr>
					@endif
					@endif
					@if($oOrder->total != $subTotla)
					<tr>


						<td>Total with Voucher Discount :</td>
						<td class="text-right">{{number_format(floatval($oOrder->total),3)}} {{trans('website.kd')}}</td>

					</tr>
					@endif
				</table>
			</div>


		</div>










		<div class="paddingTop10">
			<div class="fontSize13" style="font-weight:bold;">Disclaimer</div>
			<div class="fontSize9">Coffee preparation was prepared by the coffee shop that was ordered from cofedistrict.com. Cofedistrict.com is not involved in any way in the process of preparation, production or pricing of this order. The Coffee Shop that was ordered from is responsible for the quality, pricing and the validity of the order and in turn Cofe District disclaims itself from any responsibility for any damage that might arise along this transaction. This report is attached to the order as a proof of the details of this transaction and to reflect the delivery charge. The Coffee Shop has the sole responsibility of pricing and any differences that exist between prices displayed on cofedistrict.com and the menus of the coffee shop shall be the responsibility. This transaction is subject to the terms and conditions of the website www.cofedistrict.com. </div>

		</div>



		<div class="paddingTop10">
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td width="15%">
						<img src="assets/website/images/AppStore.png" width="75" height="33"/><br/>
						<img src="assets/website/images/Google.png" width="75" height="33"/>
					</td>

					<td width="30%" style="padding-top: 24px;">
						<div style="fontSize:13">FOLLOW US</div>
						<img src="assets/website/images/Snapchat.png" width="28" height="28"/>
						<img src="assets/website/images/Twitter.png" width="28" height="28"/>
						<img src="assets/website/images/Instagram.png" width="28" height="28"/>
						<img src="assets/website/images/YouTube.png" width="28" height="28"/>
					</td>
					<td></td>
					<td width="26%">
						<div>
							<div class="contactHeight">
								<img src="assets/website/images/Phone.png" width="20" height="20"/> <span class="fontSize13" style="font-size: 10px;">{{trans('website.deeraPhoneNumber')}}</span>
							</div>
							<div class="contactHeight">
								<img src="assets/website/images/Email.png" width="20" height="20"/> <span class="fontSize13">info@cofedistrict.com</span>
							</div>
							<div class="contactHeight">
								<img src="assets/website/images/Website.png" width="20" height="20"/> <span class="fontSize13">www.cofedistrict.com</span>
							</div>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<!-- Pick up-->
		@else
		<!-- delevary-->
		<div class="container">

			<div class="header">
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td class="logo"><img src="assets/website/images/logo.png"/>
						</td>
						<td class="onlineContainer">
							<span class="OnlineTitle">
                        ONLINE<br />
                        RECIEPT
                    </span>



						</td>
					</tr>
				</table>
			</div>
			<div class="paddingTop10">
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td class="brownContainer">
							<div class="ThankYouDiv">
								<strong>Thank You!</strong> For Ordering Through Cofe Disctrict<br/>
								<strong>Your Coffee Is On The Way!</strong>
							</div>
						</td>
						<td style="width:10px;height: 60px;">
							<div>&nbsp;</div>
						</td>
						<td class="mapDiv">
							<div class="trackOrderContainer">
								<div class="track"><img src="assets/website/images/Map.png" width="19" height="23"/>Track Your Order!</div>
								<div class="orderNumber">Your Order Number: {{$oOrder->success_order_id}}</div>
							</div>
						</td>
					</tr>
				</table>
			</div>









			<div class="paddingTop10">
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td width="50%">
							<div class="fontSize13" style="font-weight: bold;">Customer Information</div>
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td class="bigGrayContent">
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
											<tr>
												<td>
													<div class="fontSize9">First Name:</div>
												</td>
												<td>
													<div class="fontSize9">{{$oOrder->users->first_name}}</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="fontSize9">Last Name:</div>
												</td>
												<td>
													<div class="fontSize9">@if($oOrder->users->last_name!="guest") {{ $oOrder->users->last_name}} @endif
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="fontSize9">Mobile:</div>
												</td>
												<td>
													<div class="fontSize9">{{ ($oOrder->users->mobile=='')? $oOrder->users->phone:$oOrder->users->mobile }}</div>
												</td>
											</tr>

											<!-- <tr>
												<td>
													<div class="fontSize9">Delivery Address:</div>
												</td>
												<td>
													<div class="fontSize9">@if(isset($oOrder->address->name)) {{$oOrder->address->name}} @endif</div>
												</td>
											</tr> -->
										</table>
									</td>
								</tr>
							</table>
						</td>
						<td style="width:10px;height: 60px;">
							<div>&nbsp;</div>
						</td>
						<td>
							<div class="fontSize13" style="font-weight: bold;">Order Details</div>
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td class="bigGrayContent">
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
											<tr>
												<td colspan="2">
													<div class="fontSize9">Coffee Shop:</div>
												</td>
												<td colspan="2">
													<div class="fontSize9">{{isset($oOrder->shop->name_en)? $oOrder->shop->name_en:'' }}</div>
												</td>
											</tr>
											<tr>
												<td width="40%">
													<div class="fontSize9">Order Date:</div>
												</td>
												<td width="10%">
													<div class="fontSize9">{{$oOrder->deliver_date}}</div>
												</td>
												<td width="25%">
													<div class="fontSize9">Transcation ID:</div>
												</td>
												<td width="25%">
													<div class="fontSize9">{{$oOrder->transaction_id()}}</div>
												</td>
											</tr>
											<tr>
												<td colspan="2">
													<div class="fontSize9">Order Time:</div>
												</td>
												<td colspan="2">
													<div class="fontSize9">{{$oOrder->deliver_time}}</div>
												</td>
											</tr>
											<tr>
												<td width="40%">
													<div class="fontSize9">Payment Method:</div>
												</td>
												<td width="10%">
													<div class="fontSize9">@if(isset($oOrder->payment()->first()->type)) {{$oOrder->payment()->first()->type}} @endif</div>
												</td>
												<td width="25%">
													<div class="fontSize9">Track ID</div>
												</td>
												<td width="25%">
													<div class="fontSize9">{{$oOrder->transaction_id()}}</div>
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




			<div class="tableContiner">
				<table class="fontSize13" border="0" cellpadding="0" cellspacing="0">
					<thead>
						<tr>
							<th class="borderBottom">Qty.</th>
							<th class="borderBottom">Item</th>
							<th class="borderBottom">Size</th>
							<th class="borderBottom">Request</th>
							<th class="borderBottom">Price</th>
							<th class="borderBottom">Total</th>
						</tr>
					</thead>
					{{--*/$total=0;/*--}} @if($oOrder->cart) @foreach($oOrder->cart as $cart) {{--*/$total+=floatval($cart->unit_price)* floatval($cart->quantity);/*--}}
					<tbody>
						<tr>
							<td>{{$cart->quantity}}</td>
							<td>{{$cart->coffee->{'name_'.config('app.locale')} }}</td>
							<td>@if(isset($cart->size->id)) {{ $cart->size->{'name_'.config('app.locale')} }} @endif </td>
							<td>{{$cart->special_request}}</td>
							<td>{{$cart->unit_price}}</td>
							<td>{{floatval($cart->unit_price) * floatval($cart->quantity)}}</td>
						</tr>

					</tbody>
					@endforeach @endif
				</table>

				<hr class="hr"/>
				<div class="paddingTop10">
					<table id="ListTable" border="0" cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td>{{ trans('website.subTotal') }}</td>
							<td class="text-right">{{$total}}{{trans('website.kd')}}</td>
						</tr>
						<!--   <tr>
                            <td width="50%">DISCOUNT</td>
                            <td width="50%" class="text-right">0.500 KD</td>
                        </tr> -->
						<tr>
							<td>{{ trans('website.delevaryFees') }}</td>
							<td class="text-right">{{$oOrder->shop->deliver_charge}} {{trans('website.kd')}}</td>
						</tr>
						<tr>
							<td>{{ trans('website.TOTAL') }}</td>
							<td class="text-right">{{floatval($total) *1 + floatval($oOrder->shop->deliver_charge) *1 }}{{trans('website.kd')}}</td>
						</tr>
					</table>
				</div>

			</div>










			<div class="paddingTop10">
				<div class="fontSize13" style="font-weight:bold;">Disclaimer</div>
				<div class="fontSize9">Coffee preparation was prepared by the coffee shop that was ordered from cofedistrict.com. Cofedistrict.com is not involved in any way in the process of preparation, production or pricing of this order. The Coffee Shop that was ordered from is responsible for the quality, pricing and the validity of the order and in turn Cofe District disclaims itself from any responsibility for any damage that might arise along this transaction. This report is attached to the order as a proof of the details of this transaction and to reflect the delivery charge. The Coffee Shop has the sole responsibility of pricing and any differences that exist between prices displayed on cofedistrict.com and the menus of the coffee shop shall be the responsibility. This transaction is subject to the terms and conditions of the website www.cofedistrict.com. </div>

			</div>



			<div class="paddingTop10 orderfoot">
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td width="15%">
							<img src="assets/website/images/AppStore.png" width="75" height="33"/><br/>
							<img src="assets/website/images/Google.png" width="75" height="33"/>
						</td>

						<td width="30%" style="padding-top: 24px;">
							<div style="fontSize:13">FOLLOW US</div>
							<img src="assets/website/images/Snapchat.png" width="28" height="28"/>
							<img src="assets/website/images/Twitter.png" width="28" height="28"/>
							<img src="assets/website/images/Instagram.png" width="28" height="28"/>
							<img src="assets/website/images/YouTube.png" width="28" height="28"/>
						</td>
						<td></td>
						<td width="26%">
							<div>
								<div class="contactHeight">
									<img src="assets/website/images/Phone.png" width="20" height="20"/> <span class="fontSize13">2222 2222</span>
								</div>
								<div class="contactHeight">
									<img src="assets/website/images/Email.png" width="20" height="20"/> <span class="fontSize13">info@cofedistrict.com</span>
								</div>
								<div class="contactHeight">
									<img src="assets/website/images/Website.png" width="20" height="20"/> <span class="fontSize13">www.cofedistrict.com</span>
								</div>
							</div>
						</td>
					</tr>
				</table>
			</div>
			<!-- delevary-->
			@endif

</body>

</html>
@endforeach @endif