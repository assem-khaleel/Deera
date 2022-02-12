@extends( 'website.layouts.main' )
@section( 'title', 'shop'.'  '.trans('website.pages_title') )
@section( 'content' )

<section class="inner-wrapper">
	<div class="container">
		<div class="img_section full-width">
			{{--style="width:100%;height:217px; position:relative; overflow: hidden;"--}}
			<img src="{{$oShop->img}}" alt="banner" style="width:100%; height: 217px;" />
			{{--style="position:absolute; width: 100%; top: -120px; min-height: 317px"--}}
		</div>
		<!-- /.full-width img_section -->
		<div class="actions_area full-width">
			<ul>


				<li class="shopname" id="menuItemShopName" style="display: none;">{{$oShop->{"name_".config('app.locale') } }}</li>

				<li class="time">{{ \Carbon\Carbon::parse($deliver_time_from)->format('g:i A') }} - {{ \Carbon\Carbon::parse($deliver_time_to)->format('g:i A') }}</li>

				@if(!( (\Session::has('deliver_type')&&\Session::get('deliver_type')==config('array.shop_deliver_type_pickup_index'))))
				<li class="minute">{{$expected_deliver_time}} {{trans('website.minutes')}}</li>
				@endif
				<li class="city">{{$areaName}}</li>

				<li class="links"><a href="/home">{{$url}}</a>
				</li>
				<li class="rated">

					<div class="stars_main" style="color:#e3c4a3;">
						<div id="stars" data-id="{{$request->shop_id}}" data-model="shop" data-rating="{{$rate}}" class="starrr"></div>

				</li>
			</ul>


			</div>
			<!-- /.actions_area full-width -->

			<div class="filterTab_section full-width">
				<br/>
				<div class="filters">

					<div class="ui-group">
						<div class="button-group js-radio-button-group" data-filter-group="color">

							<a class="button menuTabHeader @if(!isset($request->menu_section) ) is-checked @endif" data-tab="menuTabItem" data-filter="">

{{trans('website.all')}}
                            </a>

							@foreach($oMenuSectionResults as $oMenuSectionResult)

							<a id="tab_{{$oMenuSectionResult->id}}" data-tab="tab_{{$oMenuSectionResult->id}}" class="button menuTabHeader @if(isset($request->menu_section) && $oMenuSectionResult->id==$request->menu_section) is-checked @endif" data-filter="">
								{{$oMenuSectionResult->{'name_'.config('app.locale')} }}</a>


							@endforeach

							<a id="tab_offer" data-tab="offer" class="button menuTabHeader @if(isset($request->menu_section) && $request->menu_section=='offer' ) is-checked @endif" data-filter="">


                                {{trans('website.offers')}}
                            </a>

						

						</div>
					</div>


				</div>

<div style="display:none;" id="showRightPush"></div>

				<div class="grid">


					@if(count($oResults)) @foreach($oResults as $oResult)
					<div class="selectorSkill col-md-12 col-sm-12 col-xs-12 for-small padd-less menuTabItem tab_{{$oResult->menu_section_id}} @if(in_array($oResult->id,$offerIdsArray)) offer @endif">
						<div class="col-lg-6 col-md-6 col-sm-10 col-xs-9 img_cap">
							<img src="{{$oResult->img}}" alt="{{$oResult->{'name_'.config('app.locale')} }}"/>
<div class="coffeeDetails">
							<h2>{{$oResult->{'name_'.config('app.locale')} }}<span>{{$oResult->{'description_'.config('app.locale')} }}</span></h2>

							<h2 class="desk">@if($oResult->price == 0){{'Price on selection'}} @else {{ $oResult->priceWithDiscount() }} {{trans('website.kd')}} @endif</h2>
							
							</div>
						</div>
						<!-- /.img_cap -->
						<div class="col-lg-6 col-md-6 col-sm-2 col-xs-3 popAndrate">
							@if($oResult->quantity >0)
							<a href="/cart/create?coffee_id={{$oResult->id}}" id="product_{{$oResult->id}}" data-success-place="#generalPopupModel  .modal-body" class="aWithResponse plussign">
							
							<!--<img src="/assets/website/images/pop_plus.png" alt="plus" />-->
							

							</a>
							@else
								<span style="color:#f00;margin: 4px;float:right;display:inline-block;">Sold Out</span>
								@endif
							<h2 class="app">@if($oResult->price==0){{'Price on selection'}} @else {{$oResult->price }} {{trans('website.kd')}} @endif </h2>

							
						</div>
						<!-- /.popAndrate -->
					</div>
					@endforeach @endif




				</div>
			</div>
			<!-- /.filterTab_section -->
		</div>
		<!-- .container -->
</section>










<style type="text/css">
	.menuTabHeader,
	.menuTabHeader:hover {
	
		cursor: pointer;
		text-decoration: none !important;
	}
</style>
@stop @section('script') @parent {!! HTML::script('/assets/website/js/star.js') !!}

<script>
	$( '.menuTabHeader' ).click( function () {
		$( '.menuTabItem' ).hide();
		$( '.menuTabHeader' ).removeClass( 'is-checked' );
		$( this ).addClass( 'is-checked' );
		$( '.menuTabItem.' + $( this ).data( 'tab' ) ).show();
	} );

	@if(isset($request->menu_section) && $request->menu_section=='offer' )
		$('#tab_{{$request->menu_section}}').click();

		@endif
</script>
@stop