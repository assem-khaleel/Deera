@extends('common.layouts.main')
@section('title', trans('shop.shop'))
@section('content')


    {{--*/

    $canEdit=canAccess('admin.shop.edit');
    $canDestroy=canAccess('admin.shop.destroy');

    $canCategoryRelation=false;//canAccess('admin.category.relation');
    $canCategoryEdit=false;//canAccess('admin.category.edit');
    $canCategoryDestroy=false;//canAccess('admin.category.destroy');
    $canCategoryCreate=false;//canAccess('admin.category.create');
    $canCategoryShow=false;//canAccess('admin.category.show');

    $canDeliveryMenuRelation=false;//canAccess('admin.delivery_menu.relation');
    $canDeliveryMenuEdit=false;//canAccess('admin.delivery_menu.edit');
    $canDeliveryMenuDestroy=false;//canAccess('admin.delivery_menu.destroy');
    $canDeliveryMenuCreate=false;//canAccess('admin.delivery_menu.create');
    $canDeliveryMenuShow=false;//canAccess('admin.delivery_menu.show');

    $canShopRateRelation=canAccess('admin.shop_rate.relation');
    $canShopRateEdit=canAccess('admin.shop_rate.edit');
    $canShopRateDestroy=canAccess('admin.shop_rate.destroy');
    $canShopRateCreate=canAccess('admin.shop_rate.create');
    $canShopRateShow=canAccess('admin.shop_rate.show');

    $canShopCuisineRelation=false;//canAccess('admin.shop_cuisine.relation');
    $canShopCuisineEdit=false;//canAccess('admin.shop_cuisine.edit');
    $canShopCuisineDestroy=false;//canAccess('admin.shop_cuisine.destroy');
    $canShopCuisineCreate=false;//canAccess('admin.shop_cuisine.create');
    $canShopCuisineShow=false;//canAccess('admin.shop_cuisine.show');

    $canMenuSectionRelation=canAccess('admin.menu_section.relation');
    $canMenuSectionEdit=canAccess('admin.menu_section.edit');
    $canMenuSectionDestroy=canAccess('admin.menu_section.destroy');
    $canMenuSectionCreate=canAccess('admin.menu_section.create');
    $canMenuSectionShow=canAccess('admin.menu_section.show');

    $canCoffeeRelation=canAccess('admin.coffee.relation');
    $canCoffeeEdit=canAccess('admin.coffee.edit');
    $canCoffeeDestroy=canAccess('admin.coffee.destroy');
    $canCoffeeCreate=canAccess('admin.coffee.create');
    $canCoffeeShow=canAccess('admin.coffee.show');

    $canCoffeeRateRelation=canAccess('admin.coffee_rate.relation');
    $canCoffeeRateEdit=canAccess('admin.coffee_rate.edit');
    $canCoffeeRateDestroy=canAccess('admin.coffee_rate.destroy');
    $canCoffeeRateCreate=canAccess('admin.coffee_rate.create');
    $canCoffeeRateShow=canAccess('admin.coffee_rate.show');

    $canShopAreaRelation=canAccess('admin.shop_area.relation');
    $canShopAreaEdit=canAccess('admin.shop_area.edit');
    $canShopAreaDestroy=canAccess('admin.shop_area.destroy');
    $canShopAreaCreate=canAccess('admin.shop_area.create');
    $canShopAreaShow=canAccess('admin.shop_area.show');

    $canOperationHourRelation=canAccess('admin.operation_hour.relation');
    $canOperationHourEdit=canAccess('admin.operation_hour.edit');
    $canOperationHourDestroy=canAccess('admin.operation_hour.destroy');
    $canOperationHourCreate=canAccess('admin.operation_hour.create');
    $canOperationHourShow=canAccess('admin.operation_hour.show');

    $canCartRelation=canAccess('admin.cart.relation');
    $canCartEdit=canAccess('admin.cart.edit');
    $canCartDestroy=canAccess('admin.cart.destroy');
    $canCartCreate=canAccess('admin.cart.create');
    $canCartShow=canAccess('admin.cart.show');

    $canShopUsersRelation=canAccess('admin.shop_users.relation');
    $canShopUsersEdit=canAccess('admin.shop_users.edit');
    $canShopUsersDestroy=canAccess('admin.shop_users.destroy');
    $canShopUsersCreate=canAccess('admin.shop_users.create');
    $canShopUsersShow=canAccess('admin.shop_users.show');


    /*--}}





    <div id="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                    <div class="col-lg-12">
                        <h4 class="page-title">{{ trans('general.shop') }}</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <ol class="breadcrumb pull-left">
                            <li><a href="#">{{ trans('general.shop') }}</a></li>
                            <li class="active">{{ trans('general.details') }}</li>
                        </ol>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <form role="search" class="app-search hidden-xs pull-right">
                            <input type="text" placeholder=" {{ trans('general.search') }} ..." class="form-control">
                            <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
                        </form>
                    </div>
                </div>







                <div class="row">


                    <div class="col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">{{ trans('general.shop') }}</h3>
                            <p class="text-muted m-b-40">{{ trans('general.details') }}</p>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">


                                <li role="presentation" class="active">
                                    <a href="#idetail" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-home"></i>{{trans('general.detail')}}</span></a>
                                </li>

                                {{----}}
                                {{--<li role="presentation" >--}}
                                    {{--<a href="#category" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.category')}}</span></a>--}}
                                {{--</li>--}}

                                {{----}}
                                {{--<li role="presentation" >--}}
                                    {{--<a href="#deliveryMenu" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.delivery_menu')}}</span></a>--}}
                                {{--</li>--}}

                                
                                <li role="presentation" >
                                    <a href="#shopRate" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.shop_rate')}}</span></a>
                                </li>

                                {{----}}
                                {{--<li role="presentation" >--}}
                                    {{--<a href="#shopCuisine" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.shop_cuisine')}}</span></a>--}}
                                {{--</li>--}}

                                
                                <li role="presentation" >
                                    <a href="#menuSection" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.menu_section')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#coffee" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.coffee')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#coffeeRate" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.coffee_rate')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#shopArea" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.shop_area')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#operationHour" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.operation_hour')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#cart" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.cart')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#shopUsers" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.shop_users')}}</span></a>
                                </li>

                                

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">


                                <div role="tabpanel" class="tab-pane active" id="idetail">


                                    <div class="panel">
                                        <div class="panel-heading">
                                            <span class="panel-title">{{ trans('shop.shopInfo') }}</span>
                                        </div>

                                        <div class="panel-body">


                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.name_en') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$shop['name_en'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.name_ar') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$shop['name_ar'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.Owner_first_name') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$shop['Owner_first_name'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.Owner_last_name') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$shop['Owner_last_name'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.email') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$shop['email'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.available_payment') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$shop['available_payment'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.telephone') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$shop['telephone'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.status') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{array_key_exists($shop['status'],config('array.shop_status'))? config('array.shop_status')[$shop['status']]:'' }}</label>
                                                </div>
                                            </div>


                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.min_amount') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$shop['min_amount'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.working_hour_from') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$shop['working_hour_from'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.working_hour_to') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$shop['working_hour_to'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.deliver_time_from') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$shop['deliver_time_from'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.deliver_time_to') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$shop['deliver_time_to'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.deliver_charge') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$shop['deliver_charge'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.rating') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$shop['rating'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.show_menu') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ config('array.shop_show_menu')[$shop['show_menu']] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.order_accept_days') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$shop['order_accept_days'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.offline_order') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ array_key_exists($shop['offline_order'],config('array.shop_offline_order'))?config('array.shop_offline_order')[$shop['offline_order']]:'' }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.url') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$shop['url'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.img') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$shop['img'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.commission_type') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ array_key_exists($shop['commission_type'],config('array.shop_commission_type'))?config('array.shop_commission_type')[$shop['commission_type']]:'' }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.discount_type') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ array_key_exists($shop['discount_type'],config('array.shop_discount_type'))?config('array.shop_discount_type')[$shop['discount_type']]:'' }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.discount') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$shop['discount'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('general.area') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{isset($shop->area->name_en)?$shop->area->name_en:'' }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.follow_us') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ array_key_exists($shop['follow_us'], config('array.shop_follow_us'))? config('array.shop_follow_us')[$shop['follow_us']]:'' }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.notification') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ array_key_exists($shop['notification'],config('array.shop_notification'))?config('array.shop_notification')[$shop['notification']]:'' }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.address_en') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$shop['address_en'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.address_ar') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$shop['address_ar'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.description_en') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$shop['description_en'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.description_ar') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$shop['description_ar'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.summary_en') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$shop['summary_en'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.summary_ar') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$shop['summary_ar'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.created_at') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$shop['created_at'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('shop.updated_at') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$shop['updated_at'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                            



                                            <div class="row">

                                                <div class="col-xs-offset-6 col-xs-3">

                                                    @if($canEdit)
                                                        <a href="/admin/shop/{{ $shop['id'] }}/edit"
                                                           class="fa fa-edit btn btn-primary form-control"> {{trans('general.edit')}}</a>
                                                    @endif
                                                </div>
                                                <div class=" col-xs-3">
                                                    @if($canDestroy)
                                                        {!! Form::open(['method' => 'DELETE',
                                                'url' => ['/admin/shop',$shop['id']]]) !!}
                                                        <button type="submit" name="Delete" class="deleteRow  btn btn-danger form-control" >
                                                            <i class="fa fa-trash"></i>
                                                            {{trans('general.delete')}}
                                                        </button>
                                                        {!! Form::close() !!}
                                                    @endif
                                                </div>

                                            </div>


                                        </div>
                                        <!-- row -->
                                    </div>


                                </div>




                                                                @if( $canCategoryRelation)
                                <div role="tabpanel" class="tab-pane active" id="category">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('category.categoryTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('category.categoryTableDescription') }}</p>



                                                    </div>

                                                    @if( $canCategoryCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.category.create')}}?shop_id={{$shop['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('category.categoryCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('category.id'), 'id', $oCategoryResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('category.name_en'), 'name_en', $oCategoryResults) !!}
                                                            </th>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('category.min_quantity'), 'min_quantity', $oCategoryResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('category.max_quantity'), 'max_quantity', $oCategoryResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                                {!! th_sort(trans('category.created_at'), 'created_at', $oCategoryResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                                {!! th_sort(trans('category.updated_at'), 'updated_at', $oCategoryResults) !!}
                                                            </th>

                                                                                                                        @if($canCategoryShow
                                                            || $canCategoryEdit
                                                            || $canCategoryDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oCategoryResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oCategoryResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->name_en }}</td>


                                                                                                                                        <td>{{ $oResult->min_quantity }}</td>

                                                                                                                                        <td>{{ $oResult->max_quantity }}</td>



                                                                                                                                        <td>{{ $oResult->created_at }}</td>

                                                                                                                                        <td>{{ $oResult->updated_at }}</td>

                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canCategoryDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/category',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canCategoryEdit)
                                                                                    <a href="/admin/category/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canCategoryShow )
                                                                                    <a href="/admin/category/{{ $oResult->id }}"
                                                                                       class="fa fa-file-text"></a>

                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                    @if (count($oCategoryResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oCategoryResults->firstItem() }} {{trans('general.to')}} {{ $oCategoryResults->lastItem() }} {{trans('general.of')}} {{ $oCategoryResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oCategoryResults->appends(Input::except('page_category'))->appends($request->all())->render()) !!}
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="noResultDiv" >{{trans('general.noResult')}}</div>

                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                               </div>
                                @endif
                                                                @if( $canDeliveryMenuRelation)
                                <div role="tabpanel" class="tab-pane active" id="deliveryMenu">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('delivery_menu.delivery_menuTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('delivery_menu.delivery_menuTableDescription') }}</p>



                                                    </div>

                                                    @if( $canDeliveryMenuCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.delivery_menu.create')}}?shop_id={{$shop['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('delivery_menu.delivery_menuCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('delivery_menu.id'), 'id', $oDeliveryMenuResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('delivery_menu.name_en'), 'name_en', $oDeliveryMenuResults) !!}
                                                            </th>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('delivery_menu.status'), 'status', $oDeliveryMenuResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                                {!! th_sort(trans('delivery_menu.created_at'), 'created_at', $oDeliveryMenuResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                                {!! th_sort(trans('delivery_menu.updated_at'), 'updated_at', $oDeliveryMenuResults) !!}
                                                            </th>

                                                                                                                        @if($canDeliveryMenuShow
                                                            || $canDeliveryMenuEdit
                                                            || $canDeliveryMenuDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oDeliveryMenuResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oDeliveryMenuResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->name_en }}</td>



                                                                                                                                        <td>{{ config('array.delivery_menu_status')[$oResult->status] }}</td>


                                                                                                                                        <td>{{ $oResult->created_at }}</td>

                                                                                                                                        <td>{{ $oResult->updated_at }}</td>

                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canDeliveryMenuDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/delivery_menu',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canDeliveryMenuEdit)
                                                                                    <a href="/admin/delivery_menu/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canDeliveryMenuShow )
                                                                                    <a href="/admin/delivery_menu/{{ $oResult->id }}"
                                                                                       class="fa fa-file-text"></a>

                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                    @if (count($oDeliveryMenuResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oDeliveryMenuResults->firstItem() }} {{trans('general.to')}} {{ $oDeliveryMenuResults->lastItem() }} {{trans('general.of')}} {{ $oDeliveryMenuResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oDeliveryMenuResults->appends(Input::except('page_delivery_menu'))->appends($request->all())->render()) !!}
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="noResultDiv" >{{trans('general.noResult')}}</div>

                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                               </div>
                                @endif
                                                                @if( $canShopRateRelation)
                                <div role="tabpanel" class="tab-pane active" id="shopRate">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('shop_rate.shop_rateTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('shop_rate.shop_rateTableDescription') }}</p>



                                                    </div>

                                                    @if( $canShopRateCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.shop_rate.create')}}?shop_id={{$shop['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('shop_rate.shop_rateCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('shop_rate.id'), 'id', $oShopRateResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('shop_rate.users_id'), 'users_id', $oShopRateResults) !!}
                                                            </th>



                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('shop_rate.rate'), 'rate', $oShopRateResults) !!}
                                                            </th>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                                {!! th_sort(trans('shop_rate.status'), 'status', $oShopRateResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                                {!! th_sort(trans('shop_rate.notification'), 'notification', $oShopRateResults) !!}
                                                            </th>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                                {!! th_sort(trans('shop_rate.updated_at'), 'updated_at', $oShopRateResults) !!}
                                                            </th>

                                                                                                                        @if($canShopRateShow
                                                            || $canShopRateEdit
                                                            || $canShopRateDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oShopRateResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oShopRateResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->users->first_name }}</td>


                                                                                                                                        <td>{{ $oResult->rate }}</td>


                                                                                                                                        <td>{{ config('array.shop_rate_status')[ $oResult->status] }}</td>

                                                                                                                                        <td>{{ config('array.shop_rate_notification')[ $oResult->notification] }}</td>

                                                                                                                                        <td>{{ $oResult->updated_at }}</td>

                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canShopRateDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/shop_rate',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canShopRateEdit)
                                                                                    <a href="/admin/shop_rate/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canShopRateShow )
                                                                                    <a href="/admin/shop_rate/{{ $oResult->id }}"
                                                                                       class="fa fa-file-text"></a>

                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                    @if (count($oShopRateResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oShopRateResults->firstItem() }} {{trans('general.to')}} {{ $oShopRateResults->lastItem() }} {{trans('general.of')}} {{ $oShopRateResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oShopRateResults->appends(Input::except('page_shop_rate'))->appends($request->all())->render()) !!}
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="noResultDiv" >{{trans('general.noResult')}}</div>

                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                               </div>
                                @endif
                                                                @if( $canShopCuisineRelation)
                                <div role="tabpanel" class="tab-pane active" id="shopCuisine">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('shop_cuisine.shop_cuisineTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('shop_cuisine.shop_cuisineTableDescription') }}</p>



                                                    </div>

                                                    @if( $canShopCuisineCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.shop_cuisine.create')}}?shop_id={{$shop['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('shop_cuisine.shop_cuisineCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('shop_cuisine.id'), 'id', $oShopCuisineResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('general.shop'), 'shop_id', $oShopCuisineResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                                {!! th_sort(trans('general.cuisine'), 'cuisine_id', $oShopCuisineResults) !!}
                                                            </th>

                                                                                                                        @if($canShopCuisineShow
                                                            || $canShopCuisineEdit
                                                            || $canShopCuisineDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oShopCuisineResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oShopCuisineResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->shop->name_en }}</td>

                                                                                                                                        <td>{{ $oResult->cuisine->name_en }}</td>

                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canShopCuisineDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/shop_cuisine',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canShopCuisineEdit)
                                                                                    <a href="/admin/shop_cuisine/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canShopCuisineShow )
                                                                                    <a href="/admin/shop_cuisine/{{ $oResult->id }}"
                                                                                       class="fa fa-file-text"></a>

                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                    @if (count($oShopCuisineResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oShopCuisineResults->firstItem() }} {{trans('general.to')}} {{ $oShopCuisineResults->lastItem() }} {{trans('general.of')}} {{ $oShopCuisineResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oShopCuisineResults->appends(Input::except('page_shop_cuisine'))->appends($request->all())->render()) !!}
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="noResultDiv" >{{trans('general.noResult')}}</div>

                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                               </div>
                                @endif
                                                                @if( $canMenuSectionRelation)
                                <div role="tabpanel" class="tab-pane active" id="menuSection">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('menu_section.menu_sectionTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('menu_section.menu_sectionTableDescription') }}</p>



                                                    </div>

                                                    @if( $canMenuSectionCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.menu_section.create')}}?shop_id={{$shop['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('menu_section.menu_sectionCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('menu_section.id'), 'id', $oMenuSectionResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('menu_section.name_en'), 'name_en', $oMenuSectionResults) !!}
                                                            </th>



                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('general.shop'), 'shop_id', $oMenuSectionResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('menu_section.status'), 'status', $oMenuSectionResults) !!}
                                                            </th>



                                                                                                                        @if($canMenuSectionShow
                                                            || $canMenuSectionEdit
                                                            || $canMenuSectionDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oMenuSectionResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oMenuSectionResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->name_en }}</td>


                                                                                                                                        <td>{{ $oResult->shop->name_en }}</td>

                                                                                                                                        <td>{{ config('array.menu_section_status')[$oResult->status] }}</td>


                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canMenuSectionDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/menu_section',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canMenuSectionEdit)
                                                                                    <a href="/admin/menu_section/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canMenuSectionShow )
                                                                                    <a href="/admin/menu_section/{{ $oResult->id }}"
                                                                                       class="fa fa-file-text"></a>

                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                    @if (count($oMenuSectionResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oMenuSectionResults->firstItem() }} {{trans('general.to')}} {{ $oMenuSectionResults->lastItem() }} {{trans('general.of')}} {{ $oMenuSectionResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oMenuSectionResults->appends(Input::except('page_menu_section'))->appends($request->all())->render()) !!}
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="noResultDiv" >{{trans('general.noResult')}}</div>

                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                               </div>
                                @endif
                                                                @if( $canCoffeeRelation)
                                <div role="tabpanel" class="tab-pane active" id="coffee">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('coffee.coffeeTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('coffee.coffeeTableDescription') }}</p>



                                                    </div>

                                                    @if( $canCoffeeCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.coffee.create')}}?shop_id={{$shop['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('coffee.coffeeCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('coffee.id'), 'id', $oCoffeeResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('coffee.name_en'), 'name_en', $oCoffeeResults) !!}
                                                            </th>






                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                                                {!! th_sort(trans('coffee.price'), 'price', $oCoffeeResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="11">
                                                                {!! th_sort(trans('coffee.quantity'), 'quantity', $oCoffeeResults) !!}
                                                            </th>




                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="18">
                                                                {!! th_sort(trans('coffee.status'), 'status', $oCoffeeResults) !!}
                                                            </th>



                                                                                                                        @if($canCoffeeShow
                                                            || $canCoffeeEdit
                                                            || $canCoffeeDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oCoffeeResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oCoffeeResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>
                                                                                                                                            <img style="width:40px;height:40px;" src="{{ $oResult->img }}">
                                                                                                                                            {{ $oResult->name_en }}</td>


                                                                                                                                        <td>{{ $oResult->price }}</td>

                                                                                                                                        <td>{{ $oResult->quantity }}</td>



                                                                                                                                        <td>{{ config('array.coffee_status')[$oResult->status] }}</td>


                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canCoffeeDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/coffee',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canCoffeeEdit)
                                                                                    <a href="/admin/coffee/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canCoffeeShow )
                                                                                    <a href="/admin/coffee/{{ $oResult->id }}"
                                                                                       class="fa fa-file-text"></a>

                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                    @if (count($oCoffeeResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oCoffeeResults->firstItem() }} {{trans('general.to')}} {{ $oCoffeeResults->lastItem() }} {{trans('general.of')}} {{ $oCoffeeResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oCoffeeResults->appends(Input::except('page_coffee'))->appends($request->all())->render()) !!}
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="noResultDiv" >{{trans('general.noResult')}}</div>

                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                               </div>
                                @endif
                                                                @if( $canCoffeeRateRelation)
                                <div role="tabpanel" class="tab-pane active" id="coffeeRate">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('coffee_rate.coffee_rateTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('coffee_rate.coffee_rateTableDescription') }}</p>



                                                    </div>

                                                    @if( $canCoffeeRateCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.coffee_rate.create')}}?shop_id={{$shop['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('coffee_rate.coffee_rateCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('coffee_rate.id'), 'id', $oCoffeeRateResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('general.users'), 'users_id', $oCoffeeRateResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('coffee_rate.rate'), 'rate', $oCoffeeRateResults) !!}
                                                            </th>



                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                                {!! th_sort(trans('coffee_rate.status'), 'status', $oCoffeeRateResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                                {!! th_sort(trans('coffee_rate.notification'), 'notification', $oCoffeeRateResults) !!}
                                                            </th>


                                                                                                                        @if($canCoffeeRateShow
                                                            || $canCoffeeRateEdit
                                                            || $canCoffeeRateDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oCoffeeRateResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oCoffeeRateResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->users->first_name }}</td>


                                                                                                                                        <td>{{ $oResult->rate }}</td>


                                                                                                                                        <td>{{config('array.coffee_rate_status')[ $oResult->status] }}</td>

                                                                                                                                        <td>{{ config('array.coffee_rate_notification')[$oResult->notification] }}</td>


                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canCoffeeRateDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/coffee_rate',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canCoffeeRateEdit)
                                                                                    <a href="/admin/coffee_rate/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canCoffeeRateShow )
                                                                                    <a href="/admin/coffee_rate/{{ $oResult->id }}"
                                                                                       class="fa fa-file-text"></a>

                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                    @if (count($oCoffeeRateResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oCoffeeRateResults->firstItem() }} {{trans('general.to')}} {{ $oCoffeeRateResults->lastItem() }} {{trans('general.of')}} {{ $oCoffeeRateResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oCoffeeRateResults->appends(Input::except('page_coffee_rate'))->appends($request->all())->render()) !!}
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="noResultDiv" >{{trans('general.noResult')}}</div>

                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                               </div>
                                @endif
                                                                @if( $canShopAreaRelation)
                                <div role="tabpanel" class="tab-pane active" id="shopArea">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('shop_area.shop_areaTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('shop_area.shop_areaTableDescription') }}</p>



                                                    </div>

                                                    @if( $canShopAreaCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.shop_area.create')}}?shop_id={{$shop['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('shop_area.shop_areaCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('shop_area.id'), 'id', $oShopAreaResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('general.area'), 'area_id', $oShopAreaResults) !!}
                                                            </th>



                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('shop_area.delivery_charges'), 'delivery_charges', $oShopAreaResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('shop_area.deera_charge'), 'deera_charge', $oShopAreaResults) !!}
                                                            </th>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                                {!! th_sort(trans('shop_area.status'), 'status', $oShopAreaResults) !!}
                                                            </th>



                                                                                                                        @if($canShopAreaShow
                                                            || $canShopAreaEdit
                                                            || $canShopAreaDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oShopAreaResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oShopAreaResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->area->name_en }}</td>

                                                                                                                                        <td>{{ $oResult->delivery_charges }}</td>

                                                                                                                                        <td>{{ $oResult->deera_charge }}</td>


                                                                                                                                        <td>{{ config('array.shop_area_status')[$oResult->status] }}</td>


                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canShopAreaDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/shop_area',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canShopAreaEdit)
                                                                                    <a href="/admin/shop_area/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canShopAreaShow )
                                                                                    <a href="/admin/shop_area/{{ $oResult->id }}"
                                                                                       class="fa fa-file-text"></a>

                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                    @if (count($oShopAreaResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oShopAreaResults->firstItem() }} {{trans('general.to')}} {{ $oShopAreaResults->lastItem() }} {{trans('general.of')}} {{ $oShopAreaResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oShopAreaResults->appends(Input::except('page_shop_area'))->appends($request->all())->render()) !!}
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="noResultDiv" >{{trans('general.noResult')}}</div>

                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                               </div>
                                @endif
                                                                @if( $canOperationHourRelation)
                                <div role="tabpanel" class="tab-pane active" id="operationHour">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('operation_hour.operation_hourTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('operation_hour.operation_hourTableDescription') }}</p>



                                                    </div>

                                                    @if( $canOperationHourCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.operation_hour.create')}}?shop_id={{$shop['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('operation_hour.operation_hourCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('operation_hour.id'), 'id', $oOperationHourResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('general.area'), 'shop_area_id', $oOperationHourResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                                {!! th_sort(trans('general.shop'), 'shop_id', $oOperationHourResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('operation_hour.day'), 'day', $oOperationHourResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('operation_hour.shift1_from'), 'shift1_from', $oOperationHourResults) !!}
                                                            </th>



                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                                {!! th_sort(trans('operation_hour.shift2_to'), 'shift2_to', $oOperationHourResults) !!}
                                                            </th>



                                                                                                                        @if($canOperationHourShow
                                                            || $canOperationHourEdit
                                                            || $canOperationHourDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oOperationHourResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oOperationHourResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->shop_area->area->name_en }}</td>

                                                                                                                                        <td>{{ $oResult->shop->name_en }}</td>

                                                                                                                                        <td>{{ config('array.days')[$oResult->day] }}</td>

                                                                                                                                        <td>{{ $oResult->shift1_from }}</td>


                                                                                                                                        <td>{{ $oResult->shift2_to }}</td>


                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canOperationHourDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/operation_hour',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canOperationHourEdit)
                                                                                    <a href="/admin/operation_hour/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canOperationHourShow )
                                                                                    <a href="/admin/operation_hour/{{ $oResult->id }}"
                                                                                       class="fa fa-file-text"></a>

                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                    @if (count($oOperationHourResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oOperationHourResults->firstItem() }} {{trans('general.to')}} {{ $oOperationHourResults->lastItem() }} {{trans('general.of')}} {{ $oOperationHourResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oOperationHourResults->appends(Input::except('page_operation_hour'))->appends($request->all())->render()) !!}
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="noResultDiv" >{{trans('general.noResult')}}</div>

                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                               </div>
                                @endif
                                                                @if( $canCartRelation)
                                <div role="tabpanel" class="tab-pane active" id="cart">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('cart.cartTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('cart.cartTableDescription') }}</p>



                                                    </div>

                                                    @if( $canCartCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.cart.create')}}?shop_id={{$shop['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('cart.cartCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('cart.id'), 'id', $oCartResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('general.users'), 'users_id', $oCartResults) !!}
                                                            </th>



                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('general.coffee'), 'coffee_id', $oCartResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('cart.order_id'), 'order_id', $oCartResults) !!}
                                                            </th>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                                {!! th_sort(trans('cart.quantity'), 'quantity', $oCartResults) !!}
                                                            </th>



                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                                {!! th_sort(trans('cart.total_price'), 'total_price', $oCartResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                                                {!! th_sort(trans('cart.special_request'), 'special_request', $oCartResults) !!}
                                                            </th>


                                                                                                                        @if($canCartShow
                                                            || $canCartEdit
                                                            || $canCartDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oCartResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oCartResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ isset($oResult->users->first_name)? $oResult->users->first_name:'' }}</td>

                                                                                                                                        <td>{{ isset($oResult->coffee->name_en)?$oResult->coffee->name_en:'' }}</td>

                                                                    <td><a href="/admin/order/{{ $oResult->order_id }}">#{{ $oResult->order_id }}</a></td>

                                                                    <td>{{ $oResult->quantity  }}</td>
                                                                    <td>{{ floatval($oResult->quantity) * floatval($oResult->unit_price) }}</td>

                                                                                                                                        <td>{{ $oResult->special_request }}</td>

                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canCartDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/cart',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canCartEdit)
                                                                                    <a href="/admin/cart/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canCartShow )
                                                                                    <a href="/admin/cart/{{ $oResult->id }}"
                                                                                       class="fa fa-file-text"></a>

                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                    @if (count($oCartResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oCartResults->firstItem() }} {{trans('general.to')}} {{ $oCartResults->lastItem() }} {{trans('general.of')}} {{ $oCartResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oCartResults->appends(Input::except('page_cart'))->appends($request->all())->render()) !!}
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="noResultDiv" >{{trans('general.noResult')}}</div>

                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                               </div>
                                @endif
                                                                @if( $canShopUsersRelation)
                                <div role="tabpanel" class="tab-pane active" id="shopUsers">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('shop_users.shop_usersTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('shop_users.shop_usersTableDescription') }}</p>



                                                    </div>

                                                    @if( $canShopUsersCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.shop_users.create')}}?shop_id={{$shop['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('shop_users.shop_usersCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('shop_users.id'), 'id', $oShopUsersResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('general.users'), 'users_id', $oShopUsersResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                                {!! th_sort(trans('general.shop'), 'shop_id', $oShopUsersResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('shop_users.status'), 'status', $oShopUsersResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('shop_users.type'), 'type', $oShopUsersResults) !!}
                                                            </th>


                                                                                                                        @if($canShopUsersShow
                                                            || $canShopUsersEdit
                                                            || $canShopUsersDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oShopUsersResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oShopUsersResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{( $oResult->users->first_name )? $oResult->users->first_name:'' }}</td>

                                                                                                                                        <td>{{ isset($oResult->shop->name_en)?$oResult->shop->name_en:'' }}</td>

                                                                                                                                        <td>{{ array_key_exists($oResult->status,config('array.shop_users_status'))? config('array.shop_users_status')[$oResult->status]:'' }}</td>

                                                                                                                                        <td>{{ array_key_exists($oResult->type,config('array.shop_users_type'))? config('array.shop_users_type')[$oResult->type]:'' }}</td>



                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canShopUsersDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/shop_users',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canShopUsersEdit)
                                                                                    <a href="/admin/shop_users/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canShopUsersShow )
                                                                                    <a href="/admin/shop_users/{{ $oResult->id }}"
                                                                                       class="fa fa-file-text"></a>

                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                    @if (count($oShopUsersResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oShopUsersResults->firstItem() }} {{trans('general.to')}} {{ $oShopUsersResults->lastItem() }} {{trans('general.of')}} {{ $oShopUsersResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oShopUsersResults->appends(Input::except('page_shop_users'))->appends($request->all())->render()) !!}
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="noResultDiv" >{{trans('general.noResult')}}</div>

                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                               </div>
                                @endif
                                

                            </div>
                        </div>
                    </div>

                </div>







            </div>
        </div>



@stop