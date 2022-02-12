  <!-- Top Navigation -->
  <nav class=" navbar navbar-default navbar-static-top m-b-0"  >
    <div class="navbar-header">
      <!-- .Logo -->
      <div class="top-left-part"><a class="logo" href="/">
        <!--This is logo icon-->
        <img src="/assets/website/images/whiteLogoPart.png" alt="home" class="light-logo" style="width:30px;height:30px;" /></a></div>
         <ul class="nav navbar-top-links navbar-left hidden-xs">
           <li><a href="javascript:void(0)" class="logotext">
             <!--This is logo text-->
             <img src="/assets/website/images/whiteLogo.png" style="max-width:100px;" alt="home" class="light-logo" alt="home" /></a></li>
         </ul>
      <!-- /.Logo -->
      <!-- top right panel -->
      <ul class="nav navbar-top-links navbar-right pull-right">









@inject('notificationClass','\App\Http\Controllers\common\dashboard\Notification')


@if(canAccess('admin.service_company_order.index'))
{{--*/$serviceCompanyOrderNotification=$notificationClass->serviceCompanyOrderNotification();/*--}}
        <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-user"></i>
          <div class="@if(count($serviceCompanyOrderNotification) ) notify @endif"><span class="heartbit"></span><span class="point"></span></div>
          </a>
          <ul class="dropdown-menu mailbox animated bounceInDown">
            <li>
              <div class="drop-title">You have {{ count($serviceCompanyOrderNotification) }} new Orders for Service</div>
            </li>
            <li>
              <div class="message-center">

             @foreach($serviceCompanyOrderNotification as $notification)
              <a href="/admin/service_company_order/{{$notification->id}}">
                <div class="user-img"> <img src="/assets/elite/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                <div class="mail-contnet">
                  <h5> {{config('array.service_company_order_status')[$notification->status] }} - {{$notification->users()->first()['first_name']}} {{$notification->users()->first()['last_name']}} </h5>
                  <span class="mail-desc">{{$notification->description}} </span> <span class="time">{{$notification->created_at}}</span> </div>
                </a>
                @endforeach

                 </div>
            </li>
            <li> <a class="text-center" href="/admin/service_company_order?notification=0"> <strong>See all Orders</strong> <i class="fa fa-angle-right"></i> </a></li>
          </ul>
          <!-- /.dropdown-messages -->
        </li>
        @endif


@if(canAccess('admin.order.index'))
{{--*/$orderNotification=$notificationClass->orderNotification();/*--}}
        <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-bell"></i>
          <div class="@if(count($orderNotification) ) notify @endif"><span class="heartbit"></span><span class="point"></span></div>
          </a>
          <ul class="dropdown-menu mailbox animated bounceInDown">
            <li>
              <div class="drop-title">You have {{ count($orderNotification) }} new Orders</div>
            </li>
            <li>
              <div class="message-center">

             @foreach($orderNotification as $notification)
              <a href="/admin/order/{{$notification->id}}">
                <div class="user-img"> <img src="/assets/elite/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                <div class="mail-contnet">
                  <h5> {{config('array.order_status')[$notification->status] }} - {{$notification->users()->first()['first_name']}} {{$notification->users()->first()['last_name']}} </h5>
                  <span class="mail-desc">{{$notification->shop()->first()['name_'.config('app.locale')]}} </span> <span class="time">{{$notification->created_at}}</span> </div>
                </a>
                @endforeach

                 </div>
            </li>
            <li> <a class="text-center" href="/admin/order?notification=0"> <strong>See all Orders</strong> <i class="fa fa-angle-right"></i> </a></li>
          </ul>
          <!-- /.dropdown-messages -->
        </li>
@endif



@if(canAccess('admin.shop.index'))
{{--*/$resturantNotification=$notificationClass->shopNotification();/*--}}
        <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="fa   fa-coffee"></i>
          <div class=" @if(count($resturantNotification) ) notify @endif"><span class="heartbit"></span><span class="point"></span></div>
          </a>
          <ul class="dropdown-menu mailbox animated bounceInDown">
            <li>
              <div class="drop-title">You have {{ count($resturantNotification) }} notifications</div>
            </li>
            <li>
              <div class="message-center">

             @foreach($resturantNotification as $notification)
              <a href="/admin/shop/{{$notification->id}}">
                <div class="user-img"> <img src="{{$notification->img}}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                <div class="mail-contnet">
                  <h5> {{config('array.shop_status')[$notification->status] }} - {{$notification->name_en}}  </h5>
                  <span class="mail-desc">{{$notification->owner_first_name }} </span> <span class="time">{{$notification->created_at}}</span> </div>
                </a>
                @endforeach

                 </div>
            </li>
            <li> <a class="text-center" href="/admin/shop?notification=0"> <strong>See all Shop</strong> <i class="fa fa-angle-right"></i> </a></li>
          </ul>
          <!-- /.dropdown-messages -->
        </li>
@endif




@if(false && canAccess('admin.shop_rate.index'))
{{--*/$resturantRateNotification=$notificationClass->shopRateNotification();
$coffeeRateNotification=$notificationClass->coffeeRateNotification();
/*--}}
        <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="fa fa-comment"></i>
          <div class="@if(count($resturantRateNotification) +count($coffeeRateNotification) >0 ) notify @endif"><span class="heartbit"></span><span class="point"></span></div>
          </a>
          <ul class="dropdown-menu mailbox animated bounceInDown">
            <li>
              <div class="drop-title">You have {{ count($resturantRateNotification) +count($coffeeRateNotification) }} notifications</div>
            </li>
            <li>
              <div class="message-center">

             @foreach($resturantRateNotification as $notification)
              <a href="/admin/shop_rate/{{$notification->id}}">
                <div class="user-img"> <img src="/assets/elite/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                <div class="mail-contnet">
                  <h5> {{config('array.shop_rate_status')[$notification->status] }} - {{$notification->shop()->first()['name_en'] }}   </h5>
                  <span class="mail-desc">{{$notification->description }} </span> <span class="time">{{$notification->created_at}}</span> </div>
                </a>
                @endforeach



             @foreach($coffeeRateNotification as $notification)
              <a href="/admin/coffee_rate/{{$notification->id}}">
                <div class="user-img"> <img src="/assets/elite/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                <div class="mail-contnet">
                  <h5> {{config('array.coffee_rate_status')[$notification->status] }} - {{$notification->coffee()->first()['name_en'] }}  </h5>
                  <span class="mail-desc">{{$notification->description }} </span> <span class="time">{{$notification->created_at}}</span> </div>
                </a>
                @endforeach



                 </div>
            </li>
            <li> <a class="text-center" href="/admin/shop_rate?notification=0"> <strong>See all Comment</strong> <i class="fa fa-angle-right"></i> </a></li>
          </ul>
          <!-- /.dropdown-messages -->
        </li>
@endif




@if(canAccess('admin.payment.index'))
{{--*/$paymentNotification=$notificationClass->paymentNotification();/*--}}
        <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="fa fa-money"></i>
          <div class="@if(count($paymentNotification) ) notify @endif"><span class="heartbit"></span><span class="point"></span></div>
          </a>
          <ul class="dropdown-menu mailbox animated bounceInDown">
            <li>
              <div class="drop-title">You have {{ count($paymentNotification) }} notifications</div>
            </li>
            <li>
              <div class="message-center">

             @foreach($paymentNotification as $notification)
              <a href="/admin/payment/{{$notification->id}}">
                <div class="user-img"> <img src="/assets/elite/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                <div class="mail-contnet">
                  <h5> {{($notification->users()->first()['first_name'] !== null )? $notification->users()->first()['first_name']:''}}   </h5>
                  <span class="mail-desc"> {{array_key_exists($notification->status,config('array.payment_status'))?config('array.payment_status')[$notification->status]:'' }} - </span> <span class="time">{{$notification->created_at}}</span> </div>
                </a>
                @endforeach

                 </div>
            </li>
            <li> <a class="text-center" href="/admin/payment?notification=0"> <strong>See all Payment</strong> <i class="fa fa-angle-right"></i> </a></li>
          </ul>
          <!-- /.dropdown-messages -->
        </li>
@endif






@if(canAccess('admin.order_driver.index'))
{{--*/$orderDriverNotification=$notificationClass->orderDriverNotification();/*--}}
        <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="fa fa-car"></i>
          <div class="@if(count($orderDriverNotification) ) notify @endif"><span class="heartbit"></span><span class="point"></span></div>
          </a>
          <ul class="dropdown-menu mailbox animated bounceInDown">
            <li>
              <div class="drop-title">You have {{ count($orderDriverNotification) }} notifications</div>
            </li>
            <li>
              <div class="message-center">

             @foreach($orderDriverNotification as $notification)
              <a href="/admin/order_driver/{{$notification->id}}">
                <div class="user-img"> <img src="/assets/elite/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                <div class="mail-contnet">
                  <h5> {{$notification->users()->first()['first_name']}}   </h5>
                  <span class="mail-desc"> {{config('array.order_driver_status')[$notification->status] }} - </span> <span class="time">{{$notification->created_at}}</span> </div>
                </a>
                @endforeach

                 </div>
            </li>
            <li> <a class="text-center" href="/admin/order_driver?notification=0"> <strong>See all Driver Order</strong> <i class="fa fa-angle-right"></i> </a></li>
          </ul>
          <!-- /.dropdown-messages -->
        </li>
@endif













{{--$cartNotification=$notificationClass->cartNotification();--}}
        {{--<li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="ti-shopping-cart"></i>--}}
          {{--<div class="@if(count($cartNotification) ) notify @endif"><span class="heartbit"></span><span class="point"></span></div>--}}
          {{--</a>--}}
          {{--<ul class="dropdown-menu dropdown-cart dropdown-tasks animated slideInUp">--}}

             {{--@foreach($cartNotification as $notification)--}}
            {{--<li class="divider"></li>--}}
            {{--<li>--}}
            {{--<a href="/admin/cart/{{$notification->id}}">--}}
                {{--<div class="cart-img"><img src=" {{$notification->coffee->img}}  " width="50"/></div>--}}
                {{--<div class="cart-content"><h5> {{$notification->coffee->name_en}}  </h5><small> {{$notification->total_price}} KD  </small></div>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="divider"></li>--}}
            {{--@endforeach--}}
            {{--<li> <a class="text-center" href="/admin/cart"> <strong>See All Notification</strong> <i class="fa fa-angle-right"></i> </a> </li>--}}
          {{--</ul>--}}
          {{--<!-- /.dropdown-tasks -->--}}
        {{--</li>--}}
        {{--<!-- /.dropdown -->--}}


















        <!-- .dropdown -->
        <li class="dropdown">
         <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="fa fa-language"></i>
{{ trans('general.language') }}
          </a>
          <ul class="dropdown-menu dropdown-tasks animated slideInUp">

@foreach(config('app.language')  as $locale=>$name)

            <li> <a href="?locale={{$locale}}">
            {{ trans('general.'.$name) }}
              </a> </li>
@endforeach

                </ul>
          <!-- /.dropdown-tasks -->
        </li>
        <!-- /.dropdown -->
        <!-- .dropdown -->
        <li class="dropdown"> <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="data:image/jpeg;base64,{{ current_user()->getAvatar() }}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{ current_user()->getName() }}</b> </a>
          <ul class="dropdown-menu dropdown-user animated flipInY">
{{--            <li><a href="{{ route('client.users.profile') }}"><i class="ti-user"></i> {{ trans('general.Profile') }}</a></li>--}}
{{--            <li><a href=" {{ route('client.users.changePassword') }}"><i class="ti-lock "></i>{{ trans('general.changePassword') }}</a></li>--}}

           <li role="separator" class="divider"></li>
                            <li><a href="{{ route('client.auth.logout') }}"><i class="fa fa-power-off"></i> {{ trans('general.Logout') }}</a></li>
                                                          </ul>
                                                          <!-- /.dropdown-user -->
                                                        </li>
                                                        <!-- /.dropdown -->
                                                        <!-- .right toggle -->
                                                        <li class="right-side-toggle"><a class="waves-effect waves-light" href="javascript:void(0)"> <i class="ti-arrow-right"></i></a></li>
                                                        <!-- /.right toggle -->
                                                      </ul>
                                                      <!-- top right panel -->
                                                    </div>
                                                  </nav>
                                                  <!-- End Top Navigation -->















                                                                                {{--{{ trans('general.language') }} --}}
                                {{--@foreach(config('app.language')  as $locale=>$name)--}}

                                  {{--{{$locale}}{{ trans('general.'.$name) }}--}}
                                {{--@endforeach--}}

{{--"data:image/jpeg;base64,{{ current_user()->getAvatar() }}"--}}
{{--{{ current_user()->getName() }}--}}
{{--{{ route('admin.users.profile') }}--}}
{{--{{ trans('general.Profile') }}--}}
{{--{{ route('admin.users.changePassword') }}--}}
{{--{{ trans('general.changePassword') }}--}}
{{--{{ route('admin.auth.logout') }}--}}
{{--{{ trans('general.Logout') }}--}}
