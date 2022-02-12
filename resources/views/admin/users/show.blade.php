@extends('common.layouts.main')
@section('title', trans('users.users'))
@section('content')


    {{--*/

    $canEdit=canAccess('admin.users.edit');
    $canDestroy=canAccess('admin.users.destroy');

    $canShopRateRelation=canAccess('admin.shop_rate.relation');
    $canShopRateEdit=canAccess('admin.shop_rate.edit');
    $canShopRateDestroy=canAccess('admin.shop_rate.destroy');
    $canShopRateCreate=canAccess('admin.shop_rate.create');
    $canShopRateShow=canAccess('admin.shop_rate.show');

    $canCoffeeRateRelation=canAccess('admin.coffee_rate.relation');
    $canCoffeeRateEdit=canAccess('admin.coffee_rate.edit');
    $canCoffeeRateDestroy=canAccess('admin.coffee_rate.destroy');
    $canCoffeeRateCreate=canAccess('admin.coffee_rate.create');
    $canCoffeeRateShow=canAccess('admin.coffee_rate.show');

    $canPaymentRelation=canAccess('admin.payment.relation');
    $canPaymentEdit=canAccess('admin.payment.edit');
    $canPaymentDestroy=canAccess('admin.payment.destroy');
    $canPaymentCreate=canAccess('admin.payment.create');
    $canPaymentShow=canAccess('admin.payment.show');

    $canCartRelation=canAccess('admin.cart.relation');
    $canCartEdit=canAccess('admin.cart.edit');
    $canCartDestroy=canAccess('admin.cart.destroy');
    $canCartCreate=canAccess('admin.cart.create');
    $canCartShow=canAccess('admin.cart.show');

    $canAddressRelation=canAccess('admin.address.relation');
    $canAddressEdit=canAccess('admin.address.edit');
    $canAddressDestroy=canAccess('admin.address.destroy');
    $canAddressCreate=canAccess('admin.address.create');
    $canAddressShow=canAccess('admin.address.show');

    $canOrderDriverRelation=canAccess('admin.order_driver.relation');
    $canOrderDriverEdit=canAccess('admin.order_driver.edit');
    $canOrderDriverDestroy=canAccess('admin.order_driver.destroy');
    $canOrderDriverCreate=canAccess('admin.order_driver.create');
    $canOrderDriverShow=canAccess('admin.order_driver.show');

    $canServiceBoyRelation=canAccess('admin.service_boy.relation');
    $canServiceBoyEdit=canAccess('admin.service_boy.edit');
    $canServiceBoyDestroy=canAccess('admin.service_boy.destroy');
    $canServiceBoyCreate=canAccess('admin.service_boy.create');
    $canServiceBoyShow=canAccess('admin.service_boy.show');

    $canServiceCompanyOrderRelation=canAccess('admin.service_company_order.relation');
    $canServiceCompanyOrderEdit=canAccess('admin.service_company_order.edit');
    $canServiceCompanyOrderDestroy=canAccess('admin.service_company_order.destroy');
    $canServiceCompanyOrderCreate=canAccess('admin.service_company_order.create');
    $canServiceCompanyOrderShow=canAccess('admin.service_company_order.show');

    $canContactUsRelation=canAccess('admin.contact_us.relation');
    $canContactUsEdit=canAccess('admin.contact_us.edit');
    $canContactUsDestroy=canAccess('admin.contact_us.destroy');
    $canContactUsCreate=canAccess('admin.contact_us.create');
    $canContactUsShow=canAccess('admin.contact_us.show');

    $canShopUsersRelation=canAccess('admin.shop_users.relation');
    $canShopUsersEdit=canAccess('admin.shop_users.edit');
    $canShopUsersDestroy=canAccess('admin.shop_users.destroy');
    $canShopUsersCreate=canAccess('admin.shop_users.create');
    $canShopUsersShow=canAccess('admin.shop_users.show');

    $canAuditTrackRelation=canAccess('admin.audit_track.relation');
    $canAuditTrackEdit=canAccess('admin.audit_track.edit');
    $canAuditTrackDestroy=canAccess('admin.audit_track.destroy');
    $canAuditTrackCreate=canAccess('admin.audit_track.create');
    $canAuditTrackShow=canAccess('admin.audit_track.show');


    /*--}}





    <div id="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                    <div class="col-lg-12">
                        <h4 class="page-title">{{ trans('general.users') }}</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <ol class="breadcrumb pull-left">
                            <li><a href="#">{{ trans('general.users') }}</a></li>
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
                            <h3 class="box-title m-b-0">{{ trans('general.users') }}</h3>
                            <p class="text-muted m-b-40">{{ trans('general.details') }}</p>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">


                                <li role="presentation" class="active">
                                    <a href="#idetail" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-home"></i>{{trans('general.detail')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#shopRate" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.shop_rate')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#coffeeRate" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.coffee_rate')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#payment" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.payment')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#cart" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.cart')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#address" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.address')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#orderDriver" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.order_driver')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#serviceBoy" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.service_boy')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#serviceCompanyOrder" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.service_company_order')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#contactUs" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.contact_us')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#shopUsers" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.shop_users')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#auditTrack" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.audit_track')}}</span></a>
                                </li>

                                

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">


                                <div role="tabpanel" class="tab-pane active" id="idetail">


                                    <div class="panel">
                                        <div class="panel-heading">
                                            <span class="panel-title">{{ trans('users.usersInfo') }}</span>
                                        </div>

                                        <div class="panel-body">


                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('users.first_name') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$users['first_name'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('users.last_name') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$users['last_name'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('users.email') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$users['email'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('users.password') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$users['password'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('users.mobile') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$users['mobile'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('users.mobile_company') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$users['mobile_company'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('users.phone') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$users['phone'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('users.gender') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$users['gender'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('users.occupation') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$users['occupation'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('users.session_id') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$users['session_id'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('users.created_at') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$users['created_at'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('users.updated_at') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$users['updated_at'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                            



                                            <div class="row">

                                                <div class="col-xs-offset-6 col-xs-3">

                                                    @if($canEdit)
                                                        <a href="/admin/users/{{ $users['id'] }}/edit"
                                                           class="fa fa-edit btn btn-primary form-control"> {{trans('general.edit')}}</a>
                                                    @endif
                                                </div>
                                                <div class=" col-xs-3">
                                                    @if($canDestroy)
                                                        {!! Form::open(['method' => 'DELETE',
                                                'url' => ['/admin/users',$users['id']]]) !!}
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
                                                            <a  href="{{route('admin.shop_rate.create')}}?users_id={{$users['id'] }}"class="btn btn-primary form-control">
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

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                                {!! th_sort(trans('shop_rate.shop_id'), 'shop_id', $oShopRateResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('shop_rate.rate'), 'rate', $oShopRateResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('shop_rate.description'), 'description', $oShopRateResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                                {!! th_sort(trans('shop_rate.status'), 'status', $oShopRateResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                                {!! th_sort(trans('shop_rate.notification'), 'notification', $oShopRateResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                                {!! th_sort(trans('shop_rate.created_at'), 'created_at', $oShopRateResults) !!}
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

                                                                                                                                        <td>{{ $oResult->users_id }}</td>

                                                                                                                                        <td>{{ $oResult->shop_id }}</td>

                                                                                                                                        <td>{{ $oResult->rate }}</td>

                                                                                                                                        <td>{{ $oResult->description }}</td>

                                                                                                                                        <td>{{ $oResult->status }}</td>

                                                                                                                                        <td>{{ $oResult->notification }}</td>

                                                                                                                                        <td>{{ $oResult->created_at }}</td>

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
                                                            <a  href="{{route('admin.coffee_rate.create')}}?users_id={{$users['id'] }}"class="btn btn-primary form-control">
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
                                                                {!! th_sort(trans('coffee_rate.users_id'), 'users_id', $oCoffeeRateResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                                {!! th_sort(trans('coffee_rate.shop_id'), 'shop_id', $oCoffeeRateResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('coffee_rate.rate'), 'rate', $oCoffeeRateResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('coffee_rate.description'), 'description', $oCoffeeRateResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                                {!! th_sort(trans('coffee_rate.status'), 'status', $oCoffeeRateResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                                {!! th_sort(trans('coffee_rate.notification'), 'notification', $oCoffeeRateResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                                {!! th_sort(trans('coffee_rate.created_at'), 'created_at', $oCoffeeRateResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                                {!! th_sort(trans('coffee_rate.updated_at'), 'updated_at', $oCoffeeRateResults) !!}
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

                                                                                                                                        <td>{{ $oResult->users_id }}</td>

                                                                                                                                        <td>{{ $oResult->shop_id }}</td>

                                                                                                                                        <td>{{ $oResult->rate }}</td>

                                                                                                                                        <td>{{ $oResult->description }}</td>

                                                                                                                                        <td>{{ $oResult->status }}</td>

                                                                                                                                        <td>{{ $oResult->notification }}</td>

                                                                                                                                        <td>{{ $oResult->created_at }}</td>

                                                                                                                                        <td>{{ $oResult->updated_at }}</td>

                                                                    
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
                                                                @if( $canPaymentRelation)
                                <div role="tabpanel" class="tab-pane active" id="payment">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('payment.paymentTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('payment.paymentTableDescription') }}</p>



                                                    </div>

                                                    @if( $canPaymentCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.payment.create')}}?users_id={{$users['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('payment.paymentCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('payment.id'), 'id', $oPaymentResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('payment.order_id'), 'order_id', $oPaymentResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                                {!! th_sort(trans('payment.users_id'), 'users_id', $oPaymentResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('payment.amount'), 'amount', $oPaymentResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('payment.status'), 'status', $oPaymentResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                                {!! th_sort(trans('payment.type'), 'type', $oPaymentResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                                {!! th_sort(trans('payment.notification'), 'notification', $oPaymentResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                                {!! th_sort(trans('payment.created_at'), 'created_at', $oPaymentResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                                {!! th_sort(trans('payment.updated_at'), 'updated_at', $oPaymentResults) !!}
                                                            </th>

                                                                                                                        @if($canPaymentShow
                                                            || $canPaymentEdit
                                                            || $canPaymentDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oPaymentResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oPaymentResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->order_id }}</td>

                                                                                                                                        <td>{{ $oResult->users_id }}</td>

                                                                                                                                        <td>{{ $oResult->amount }}</td>

                                                                                                                                        <td>{{ $oResult->status }}</td>

                                                                                                                                        <td>{{ $oResult->type }}</td>

                                                                                                                                        <td>{{ $oResult->notification }}</td>

                                                                                                                                        <td>{{ $oResult->created_at }}</td>

                                                                                                                                        <td>{{ $oResult->updated_at }}</td>

                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canPaymentDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/payment',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canPaymentEdit)
                                                                                    <a href="/admin/payment/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canPaymentShow )
                                                                                    <a href="/admin/payment/{{ $oResult->id }}"
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
                                                    @if (count($oPaymentResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oPaymentResults->firstItem() }} {{trans('general.to')}} {{ $oPaymentResults->lastItem() }} {{trans('general.of')}} {{ $oPaymentResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oPaymentResults->appends(Input::except('page_payment'))->appends($request->all())->render()) !!}
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
                                                            <a  href="{{route('admin.cart.create')}}?users_id={{$users['id'] }}"class="btn btn-primary form-control">
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
                                                                {!! th_sort(trans('cart.users_id'), 'users_id', $oCartResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                                {!! th_sort(trans('cart.shop_id'), 'shop_id', $oCartResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('cart.coffee_id'), 'coffee_id', $oCartResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('cart.order_id'), 'order_id', $oCartResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                                {!! th_sort(trans('cart.deliver_charge'), 'deliver_charge', $oCartResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                                {!! th_sort(trans('cart.quantity'), 'quantity', $oCartResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                                {!! th_sort(trans('cart.unit_price'), 'unit_price', $oCartResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                                {!! th_sort(trans('cart.total_price'), 'total_price', $oCartResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                                                {!! th_sort(trans('cart.special_request'), 'special_request', $oCartResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="11">
                                                                {!! th_sort(trans('cart.created_at'), 'created_at', $oCartResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="12">
                                                                {!! th_sort(trans('cart.updated_at'), 'updated_at', $oCartResults) !!}
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

                                                                                                                                        <td>{{ $oResult->users_id }}</td>

                                                                                                                                        <td>{{ $oResult->shop_id }}</td>

                                                                                                                                        <td>{{ $oResult->coffee_id }}</td>

                                                                                                                                        <td>{{ $oResult->order_id }}</td>

                                                                                                                                        <td>{{ $oResult->deliver_charge }}</td>

                                                                                                                                        <td>{{ $oResult->quantity }}</td>

                                                                                                                                        <td>{{ $oResult->unit_price }}</td>

                                                                                                                                        <td>{{ $oResult->total_price }}</td>

                                                                                                                                        <td>{{ $oResult->special_request }}</td>

                                                                                                                                        <td>{{ $oResult->created_at }}</td>

                                                                                                                                        <td>{{ $oResult->updated_at }}</td>

                                                                    
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
                                                                @if( $canAddressRelation)
                                <div role="tabpanel" class="tab-pane active" id="address">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('address.addressTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('address.addressTableDescription') }}</p>



                                                    </div>

                                                    @if( $canAddressCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.address.create')}}?users_id={{$users['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('address.addressCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('address.id'), 'id', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('address.users_id'), 'users_id', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                                {!! th_sort(trans('address.area_id'), 'area_id', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('address.name'), 'name', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('address.type'), 'type', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                                {!! th_sort(trans('address.first_name'), 'first_name', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                                {!! th_sort(trans('address.last_name'), 'last_name', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                                {!! th_sort(trans('address.pacl_number'), 'pacl_number', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                                {!! th_sort(trans('address.block'), 'block', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                                                {!! th_sort(trans('address.street'), 'street', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="11">
                                                                {!! th_sort(trans('address.judda'), 'judda', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="12">
                                                                {!! th_sort(trans('address.avenue'), 'avenue', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="13">
                                                                {!! th_sort(trans('address.building'), 'building', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="14">
                                                                {!! th_sort(trans('address.floor'), 'floor', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="15">
                                                                {!! th_sort(trans('address.apartment_number'), 'apartment_number', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="16">
                                                                {!! th_sort(trans('address.mobile'), 'mobile', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="17">
                                                                {!! th_sort(trans('address.phone'), 'phone', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="18">
                                                                {!! th_sort(trans('address.long'), 'long', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="19">
                                                                {!! th_sort(trans('address.lat'), 'lat', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="20">
                                                                {!! th_sort(trans('address.directions'), 'directions', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="21">
                                                                {!! th_sort(trans('address.default'), 'default', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="22">
                                                                {!! th_sort(trans('address.notification'), 'notification', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="23">
                                                                {!! th_sort(trans('address.created_at'), 'created_at', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="24">
                                                                {!! th_sort(trans('address.updated_at'), 'updated_at', $oAddressResults) !!}
                                                            </th>

                                                                                                                        @if($canAddressShow
                                                            || $canAddressEdit
                                                            || $canAddressDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oAddressResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oAddressResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->users_id }}</td>

                                                                                                                                        <td>{{ $oResult->area_id }}</td>

                                                                                                                                        <td>{{ $oResult->name }}</td>

                                                                                                                                        <td>{{ $oResult->type }}</td>

                                                                                                                                        <td>{{ $oResult->first_name }}</td>

                                                                                                                                        <td>{{ $oResult->last_name }}</td>

                                                                                                                                        <td>{{ $oResult->pacl_number }}</td>

                                                                                                                                        <td>{{ $oResult->block }}</td>

                                                                                                                                        <td>{{ $oResult->street }}</td>

                                                                                                                                        <td>{{ $oResult->judda }}</td>

                                                                                                                                        <td>{{ $oResult->avenue }}</td>

                                                                                                                                        <td>{{ $oResult->building }}</td>

                                                                                                                                        <td>{{ $oResult->floor }}</td>

                                                                                                                                        <td>{{ $oResult->apartment_number }}</td>

                                                                                                                                        <td>{{ $oResult->mobile }}</td>

                                                                                                                                        <td>{{ $oResult->phone }}</td>

                                                                                                                                        <td>{{ $oResult->long }}</td>

                                                                                                                                        <td>{{ $oResult->lat }}</td>

                                                                                                                                        <td>{{ $oResult->directions }}</td>

                                                                                                                                        <td>{{ $oResult->default }}</td>

                                                                                                                                        <td>{{ $oResult->notification }}</td>

                                                                                                                                        <td>{{ $oResult->created_at }}</td>

                                                                                                                                        <td>{{ $oResult->updated_at }}</td>

                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canAddressDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/address',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canAddressEdit)
                                                                                    <a href="/admin/address/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canAddressShow )
                                                                                    <a href="/admin/address/{{ $oResult->id }}"
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
                                                    @if (count($oAddressResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oAddressResults->firstItem() }} {{trans('general.to')}} {{ $oAddressResults->lastItem() }} {{trans('general.of')}} {{ $oAddressResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oAddressResults->appends(Input::except('page_address'))->appends($request->all())->render()) !!}
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
                                                                @if( $canOrderDriverRelation)
                                <div role="tabpanel" class="tab-pane active" id="orderDriver">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('order_driver.order_driverTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('order_driver.order_driverTableDescription') }}</p>



                                                    </div>

                                                    @if( $canOrderDriverCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.order_driver.create')}}?users_id={{$users['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('order_driver.order_driverCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('order_driver.id'), 'id', $oOrderDriverResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('order_driver.users_id'), 'users_id', $oOrderDriverResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                                {!! th_sort(trans('order_driver.order_id'), 'order_id', $oOrderDriverResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('order_driver.current_long'), 'current_long', $oOrderDriverResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('order_driver.current_lat'), 'current_lat', $oOrderDriverResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                                {!! th_sort(trans('order_driver.status'), 'status', $oOrderDriverResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                                {!! th_sort(trans('order_driver.note'), 'note', $oOrderDriverResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                                {!! th_sort(trans('order_driver.notification'), 'notification', $oOrderDriverResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                                {!! th_sort(trans('order_driver.created_at'), 'created_at', $oOrderDriverResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                                                {!! th_sort(trans('order_driver.updated_at'), 'updated_at', $oOrderDriverResults) !!}
                                                            </th>

                                                                                                                        @if($canOrderDriverShow
                                                            || $canOrderDriverEdit
                                                            || $canOrderDriverDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oOrderDriverResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oOrderDriverResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->users_id }}</td>

                                                                                                                                        <td>{{ $oResult->order_id }}</td>

                                                                                                                                        <td>{{ $oResult->current_long }}</td>

                                                                                                                                        <td>{{ $oResult->current_lat }}</td>

                                                                                                                                        <td>{{ $oResult->status }}</td>

                                                                                                                                        <td>{{ $oResult->note }}</td>

                                                                                                                                        <td>{{ $oResult->notification }}</td>

                                                                                                                                        <td>{{ $oResult->created_at }}</td>

                                                                                                                                        <td>{{ $oResult->updated_at }}</td>

                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canOrderDriverDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/order_driver',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canOrderDriverEdit)
                                                                                    <a href="/admin/order_driver/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canOrderDriverShow )
                                                                                    <a href="/admin/order_driver/{{ $oResult->id }}"
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
                                                    @if (count($oOrderDriverResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oOrderDriverResults->firstItem() }} {{trans('general.to')}} {{ $oOrderDriverResults->lastItem() }} {{trans('general.of')}} {{ $oOrderDriverResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oOrderDriverResults->appends(Input::except('page_order_driver'))->appends($request->all())->render()) !!}
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
                                                                @if( $canServiceBoyRelation)
                                <div role="tabpanel" class="tab-pane active" id="serviceBoy">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('service_boy.service_boyTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('service_boy.service_boyTableDescription') }}</p>



                                                    </div>

                                                    @if( $canServiceBoyCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.service_boy.create')}}?users_id={{$users['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('service_boy.service_boyCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('service_boy.id'), 'id', $oServiceBoyResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('service_boy.users_id'), 'users_id', $oServiceBoyResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                                {!! th_sort(trans('service_boy.manager_id'), 'manager_id', $oServiceBoyResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('service_boy.service_company_id'), 'service_company_id', $oServiceBoyResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('service_boy.status'), 'status', $oServiceBoyResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                                {!! th_sort(trans('service_boy.created_at'), 'created_at', $oServiceBoyResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                                {!! th_sort(trans('service_boy.updated_at'), 'updated_at', $oServiceBoyResults) !!}
                                                            </th>

                                                                                                                        @if($canServiceBoyShow
                                                            || $canServiceBoyEdit
                                                            || $canServiceBoyDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oServiceBoyResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oServiceBoyResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->users_id }}</td>

                                                                                                                                        <td>{{ $oResult->manager_id }}</td>

                                                                                                                                        <td>{{ $oResult->service_company_id }}</td>

                                                                                                                                        <td>{{ $oResult->status }}</td>

                                                                                                                                        <td>{{ $oResult->created_at }}</td>

                                                                                                                                        <td>{{ $oResult->updated_at }}</td>

                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canServiceBoyDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/service_boy',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canServiceBoyEdit)
                                                                                    <a href="/admin/service_boy/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canServiceBoyShow )
                                                                                    <a href="/admin/service_boy/{{ $oResult->id }}"
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
                                                    @if (count($oServiceBoyResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oServiceBoyResults->firstItem() }} {{trans('general.to')}} {{ $oServiceBoyResults->lastItem() }} {{trans('general.of')}} {{ $oServiceBoyResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oServiceBoyResults->appends(Input::except('page_service_boy'))->appends($request->all())->render()) !!}
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
                                                                @if( $canServiceCompanyOrderRelation)
                                <div role="tabpanel" class="tab-pane active" id="serviceCompanyOrder">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('service_company_order.service_company_orderTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('service_company_order.service_company_orderTableDescription') }}</p>



                                                    </div>

                                                    @if( $canServiceCompanyOrderCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.service_company_order.create')}}?users_id={{$users['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('service_company_order.service_company_orderCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('service_company_order.id'), 'id', $oServiceCompanyOrderResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('service_company_order.users_id'), 'users_id', $oServiceCompanyOrderResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                                {!! th_sort(trans('service_company_order.service_company_id'), 'service_company_id', $oServiceCompanyOrderResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('service_company_order.order_id'), 'order_id', $oServiceCompanyOrderResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('service_company_order.description'), 'description', $oServiceCompanyOrderResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                                {!! th_sort(trans('service_company_order.status'), 'status', $oServiceCompanyOrderResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                                {!! th_sort(trans('service_company_order.notification'), 'notification', $oServiceCompanyOrderResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                                {!! th_sort(trans('service_company_order.created_at'), 'created_at', $oServiceCompanyOrderResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                                {!! th_sort(trans('service_company_order.updated_at'), 'updated_at', $oServiceCompanyOrderResults) !!}
                                                            </th>

                                                                                                                        @if($canServiceCompanyOrderShow
                                                            || $canServiceCompanyOrderEdit
                                                            || $canServiceCompanyOrderDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oServiceCompanyOrderResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oServiceCompanyOrderResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->users_id }}</td>

                                                                                                                                        <td>{{ $oResult->service_company_id }}</td>

                                                                                                                                        <td>{{ $oResult->order_id }}</td>

                                                                                                                                        <td>{{ $oResult->description }}</td>

                                                                                                                                        <td>{{ $oResult->status }}</td>

                                                                                                                                        <td>{{ $oResult->notification }}</td>

                                                                                                                                        <td>{{ $oResult->created_at }}</td>

                                                                                                                                        <td>{{ $oResult->updated_at }}</td>

                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canServiceCompanyOrderDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/service_company_order',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canServiceCompanyOrderEdit)
                                                                                    <a href="/admin/service_company_order/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canServiceCompanyOrderShow )
                                                                                    <a href="/admin/service_company_order/{{ $oResult->id }}"
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
                                                    @if (count($oServiceCompanyOrderResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oServiceCompanyOrderResults->firstItem() }} {{trans('general.to')}} {{ $oServiceCompanyOrderResults->lastItem() }} {{trans('general.of')}} {{ $oServiceCompanyOrderResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oServiceCompanyOrderResults->appends(Input::except('page_service_company_order'))->appends($request->all())->render()) !!}
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
                                                                @if( $canContactUsRelation)
                                <div role="tabpanel" class="tab-pane active" id="contactUs">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('contact_us.contact_usTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('contact_us.contact_usTableDescription') }}</p>



                                                    </div>

                                                    @if( $canContactUsCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.contact_us.create')}}?users_id={{$users['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('contact_us.contact_usCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('contact_us.id'), 'id', $oContactUsResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('contact_us.users_id'), 'users_id', $oContactUsResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                                {!! th_sort(trans('contact_us.email'), 'email', $oContactUsResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('contact_us.phone'), 'phone', $oContactUsResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('contact_us.comments'), 'comments', $oContactUsResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                                {!! th_sort(trans('contact_us.created_at'), 'created_at', $oContactUsResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                                {!! th_sort(trans('contact_us.updated_at'), 'updated_at', $oContactUsResults) !!}
                                                            </th>

                                                                                                                        @if($canContactUsShow
                                                            || $canContactUsEdit
                                                            || $canContactUsDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oContactUsResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oContactUsResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->users_id }}</td>

                                                                                                                                        <td>{{ $oResult->email }}</td>

                                                                                                                                        <td>{{ $oResult->phone }}</td>

                                                                                                                                        <td>{{ $oResult->comments }}</td>

                                                                                                                                        <td>{{ $oResult->created_at }}</td>

                                                                                                                                        <td>{{ $oResult->updated_at }}</td>

                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canContactUsDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/contact_us',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canContactUsEdit)
                                                                                    <a href="/admin/contact_us/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canContactUsShow )
                                                                                    <a href="/admin/contact_us/{{ $oResult->id }}"
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
                                                    @if (count($oContactUsResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oContactUsResults->firstItem() }} {{trans('general.to')}} {{ $oContactUsResults->lastItem() }} {{trans('general.of')}} {{ $oContactUsResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oContactUsResults->appends(Input::except('page_contact_us'))->appends($request->all())->render()) !!}
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
                                                            <a  href="{{route('admin.shop_users.create')}}?users_id={{$users['id'] }}"class="btn btn-primary form-control">
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
                                                                {!! th_sort(trans('shop_users.users_id'), 'users_id', $oShopUsersResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                                {!! th_sort(trans('shop_users.shop_id'), 'shop_id', $oShopUsersResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('shop_users.status'), 'status', $oShopUsersResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('shop_users.type'), 'type', $oShopUsersResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                                {!! th_sort(trans('shop_users.created_at'), 'created_at', $oShopUsersResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                                {!! th_sort(trans('shop_users.updated_at'), 'updated_at', $oShopUsersResults) !!}
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

                                                                                                                                        <td>{{ $oResult->users_id }}</td>

                                                                                                                                        <td>{{ $oResult->shop_id }}</td>

                                                                                                                                        <td>{{ $oResult->status }}</td>

                                                                                                                                        <td>{{ $oResult->type }}</td>

                                                                                                                                        <td>{{ $oResult->created_at }}</td>

                                                                                                                                        <td>{{ $oResult->updated_at }}</td>

                                                                    
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
                                                                @if( $canAuditTrackRelation)
                                <div role="tabpanel" class="tab-pane active" id="auditTrack">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('audit_track.audit_trackTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('audit_track.audit_trackTableDescription') }}</p>



                                                    </div>

                                                    @if( $canAuditTrackCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.audit_track.create')}}?users_id={{$users['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('audit_track.audit_trackCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('audit_track.id'), 'id', $oAuditTrackResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('audit_track.users_id'), 'users_id', $oAuditTrackResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                                {!! th_sort(trans('audit_track.action'), 'action', $oAuditTrackResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('audit_track.users_name'), 'users_name', $oAuditTrackResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('audit_track.users_role'), 'users_role', $oAuditTrackResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                                {!! th_sort(trans('audit_track.description'), 'description', $oAuditTrackResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                                {!! th_sort(trans('audit_track.created_at'), 'created_at', $oAuditTrackResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                                {!! th_sort(trans('audit_track.updated_at'), 'updated_at', $oAuditTrackResults) !!}
                                                            </th>

                                                                                                                        @if($canAuditTrackShow
                                                            || $canAuditTrackEdit
                                                            || $canAuditTrackDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oAuditTrackResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oAuditTrackResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->users_id }}</td>

                                                                                                                                        <td>{{ $oResult->action }}</td>

                                                                                                                                        <td>{{ $oResult->users_name }}</td>

                                                                                                                                        <td>{{ $oResult->users_role }}</td>

                                                                                                                                        <td>{{ $oResult->description }}</td>

                                                                                                                                        <td>{{ $oResult->created_at }}</td>

                                                                                                                                        <td>{{ $oResult->updated_at }}</td>

                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canAuditTrackDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/audit_track',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canAuditTrackEdit)
                                                                                    <a href="/admin/audit_track/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canAuditTrackShow )
                                                                                    <a href="/admin/audit_track/{{ $oResult->id }}"
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
                                                    @if (count($oAuditTrackResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oAuditTrackResults->firstItem() }} {{trans('general.to')}} {{ $oAuditTrackResults->lastItem() }} {{trans('general.of')}} {{ $oAuditTrackResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oAuditTrackResults->appends(Input::except('page_audit_track'))->appends($request->all())->render()) !!}
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