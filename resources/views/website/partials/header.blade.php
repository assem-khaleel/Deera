<div id="showRightPush" style="display:none;"></div>
<article class="container onlyDesktop">
	<header>
		<div class="row">
			<aside class="col-md-3 col-sm-4">
				<div class="logo"><a href="/"><img src="/assets/website/images/logo.png" alt=""> </a>
				</div>
			</aside>
			<aside class="col-md-9 col-sm-8">
				<div class="right-top">
					@inject('rCart','\App\Repositories\website\cart\EloquentCartRepository') @inject('rGiftCardUsers','\App\Repositories\website\gift_card_users\EloquentGiftCardUsersRepository') {{--*/ $cartNumber=0; if(isset(current_user()->getUser()->id)){ $cartNumber=$rCart->cartNumber(); } $users_id=isset(current_user()->getUser()->id)? current_user()->getUser()->id:0; $giftCards = $rGiftCardUsers->getByFilter(['users_id'=>$users_id,'status'=>[config('array.gift_card_users_status_pending_index')] ]); if(count($giftCards) > 0){ foreach($giftCards as $giftCard){ $cartNumber+= $giftCard->quantity *1; } } /*--}}
					<a @if(isset(current_user()->getUser()->id)) href="/cart" data-quentity="{{($cartNumber> 0)?$cartNumber :''}}" data-success-place="#generalPopupModel  .modal-body" id="headerCartIcon"   class="aWithResponse cart headerCartIcon {{($cartNumber> 0)? '' :'hideAfterClass'}} " @else href="#" class=" cart"  data-quentity="0"  @endif ></a>
					<style type="text/css">
						#headerCartIcon:after {
							background-color: #e5c5a5;
							float: right;
							content: attr(data-quentity);
							padding-top: 2px;
							margin-right: -10px;
							text-align: center;
							width: 20px;
							height: 20px;
							color: #fff;
							border-radius: 100%;
						}
					</style>
					<ul>
						@if(isset(current_user()->getUser()->id) && !(current_user()->getUser()->type==config('array.users_type_guest_index')))
						<li>
							<div class="dropdown">
								<a href="#" data-toggle="dropdown" class="dropdown-toggle"> {{trans('website.myAccount')}}</a>
								<ul class="dropdown-menu">
									<li><a href="/my-order"><img src="/assets/website/images/cart-icon.png" alt=""> {{trans('website.myOrders')}}</a>
									</li>

@if(!(current_user()->getUser()->type==config('array.users_type_guest_index')))
									<li><a href="/users"><img src="/assets/website/images/profile-icon.png" alt="">    {{trans('website.myProfile')}}  </a>
									</li>
									@endif
					{{--<li><a href="/gift_card_users">  <img src="/assets/website/images/giftm.png" alt=""> {{trans('website.myGiftCard')}}  </a>--}}
									{{--</li>--}}

									@if(!(current_user()->getUser()->type==config('array.users_type_guest_index')))

									<li><a href="/website/logout"><img src="/assets/website/images/logout-icon.png" alt="">  {{trans('website.logout')}}  </a>
									</li>
										@endif
								</ul>
							</div>
						</li>

							@elseif(isset(current_user()->getUser()->id) && (current_user()->getUser()->type==config('array.users_type_guest_index')))

							<li><a href="#" data-reveal-id="myModal_login" data-animation="fade" class="MenuLink"> {{trans('website.myOrders')}} </a></li>
							<li><a href="#" data-reveal-id="myModal_login" data-animation="fade" class="MenuLink"><!-- <img src="/assets/website/images/profile-icon.png" alt=""> -->    {{trans('website.myProfile')}}  </a>
									</li>
						
						@else
						<li><a href="#" data-reveal-id="myModal_login" data-animation="fade" class="MenuLink"> {{trans('website.login')}} </a>
						</li>
						{{--
						<li><a href="/users/create">  {{trans('website.signUp')}}</a>
						</li>--}} @endif
						<li><a style="display: none;" @if(config( 'app.locale')=='ar' ) href="?locale=en" @else href="?locale=ar" @endif class="MenuLink2 ar-languge ">

                                @if(config('app.locale') =='ar')  {{trans('website.english_lang')}} @else {{trans('website.arabic_lang')}} @endif
                                     </a>

						



						</li>

						<li><a href="/contact_us/create"> <span class="MenuLink">{{trans('website.contactUs')}}</span></a>
						</li>
					</ul>
				</div>
				<button id="backbutton" onclick="window.history.back();" style="border: none; background: none ;display:none"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
			</aside>
		</div>
	</header>





</article>


<article class="onlyresponsive">
	<header class="responsiveHead">
		<div class="resMenu">

			<section style="display: none;">

				<button id="showLeft">Show/Hide Left Slide Menu</button>
				<button id="showRight">Show/Hide Right Slide Menu</button>
				<button id="showTop">Show/Hide Top Slide Menu</button>
				<button id="showBottom">Show/Hide Bottom Slide Menu</button>
			</section>

			<div id="showLeftPush"><img src="/assets/website/images/resmenu.png"/>
				</a>
			</div>
			<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
				<div class="menuhead"><span><a href="/"><img src="/assets/website/images/logo-wt.png"/></a></span>
				</div>

				@if(isset(current_user()->getUser()->id)&& !(current_user()->getUser()->type==config('array.users_type_guest_index')))
					<a href="/website/logout" class="MenuLink" onclick="">Log Out</a>
					@else

					<a href="#"  data-reveal-id="myModal_login" data-animation="fade" class="MenuLink" onclick="">Login</a>
					@endif

				<a href="/">Home</a>


				@if(isset(current_user()->getUser()->id) && !(current_user()->getUser()->type==config('array.users_type_guest_index')))
				<a href="/my-order">My Order</a>
				<a href="/users">My Profile </a>
					@elseif(isset(current_user()->getUser()->id) && current_user()->getUser()->type==config('array.users_type_guest_index'))

					<a href="#" data-reveal-id="myModal_login" data-animation="fade" class="MenuLink">My Order</a>
					<a href="#" data-reveal-id="myModal_login" data-animation="fade" class="MenuLink">My Profile </a>

					@endif
				<a href="/blog">Cafe Blog</a>
				<a href="/catering/create">Catering</a>
				<a href="/offer">Offers</a>
				<a href="/about">About App</a>
				<a href="/contact_us/create">Contact Us</a>
				<a href="/faq">Faq</a>
				
			</nav>
		</div>
		<div class="resLogo"> <span><a href="/"><img src="/assets/website/images/logo-wt.png"/></a></span>
		</div>
		<div class="resCart"><span> <a @if(isset(current_user()->getUser()->id)) href="/cart" data-quentity="{{($cartNumber> 0)?$cartNumber :0}}" data-success-place="#generalPopupModel  .modal-body" id="headerCartIcon"   class="aWithResponse cart headerCartIcon" @else href="#" class=" cart"  data-quentity="0"  @endif ></a></span>
		</div>

	</header>


</article>