@extends('common.layouts.main')
@section('title', trans('area.area'))
@section('content')


    {{--*/

    $canEdit=canAccess('admin.area.edit');
    $canDestroy=canAccess('admin.area.destroy');

    $canShopRelation=canAccess('admin.shop.relation');
    $canShopEdit=canAccess('admin.shop.edit');
    $canShopDestroy=canAccess('admin.shop.destroy');
    $canShopCreate=canAccess('admin.shop.create');
    $canShopShow=canAccess('admin.shop.show');

    $canShopAreaRelation=canAccess('admin.shop_area.relation');
    $canShopAreaEdit=canAccess('admin.shop_area.edit');
    $canShopAreaDestroy=canAccess('admin.shop_area.destroy');
    $canShopAreaCreate=canAccess('admin.shop_area.create');
    $canShopAreaShow=canAccess('admin.shop_area.show');

    $canAddressRelation=canAccess('admin.address.relation');
    $canAddressEdit=canAccess('admin.address.edit');
    $canAddressDestroy=canAccess('admin.address.destroy');
    $canAddressCreate=canAccess('admin.address.create');
    $canAddressShow=canAccess('admin.address.show');


    /*--}}





    <div id="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                    <div class="col-lg-12">
                        <h4 class="page-title">{{ trans('general.area') }}</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <ol class="breadcrumb pull-left">
                            <li><a href="#">{{ trans('general.area') }}</a></li>
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
                            <h3 class="box-title m-b-0">{{ trans('general.area') }}</h3>
                            <p class="text-muted m-b-40">{{ trans('general.details') }}</p>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">


                                <li role="presentation" class="active">
                                    <a href="#idetail" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-home"></i>{{trans('general.detail')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#shop" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.shop')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#shopArea" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.shop_area')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#address" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.address')}}</span></a>
                                </li>

                                

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">


                                <div role="tabpanel" class="tab-pane active" id="idetail">


                                    <div class="panel">
                                        <div class="panel-heading">
                                            <span class="panel-title">{{ trans('area.areaInfo') }}</span>
                                        </div>

                                        <div class="panel-body">


                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('area.name_en') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$area['name_en'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('area.name_ar') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$area['name_ar'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('area.governorate_id') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$area['governorate_id'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('area.description_en') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$area['description_en'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('area.description_ar') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$area['description_ar'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('area.created_at') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$area['created_at'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('area.updated_at') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$area['updated_at'] }}</label>
                                                </div>
                                            </div>

                                            
                                            



                                            <div class="row">

                                                <div class="col-xs-offset-6 col-xs-3">

                                                    @if($canEdit)
                                                        <a href="/admin/area/{{ $area['id'] }}/edit"
                                                           class="fa fa-edit btn btn-primary form-control"> {{trans('general.edit')}}</a>
                                                    @endif
                                                </div>
                                                <div class=" col-xs-3">
                                                    @if($canDestroy)
                                                        {!! Form::open(['method' => 'DELETE',
                                                'url' => ['/admin/area',$area['id']]]) !!}
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




                                                                @if( $canShopRelation)
                                <div role="tabpanel" class="tab-pane active" id="shop">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('shop.shopTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('shop.shopTableDescription') }}</p>



                                                    </div>

                                                    @if( $canShopCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.shop.create')}}?area_id={{$area['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('shop.shopCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('shop.id'), 'id', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('shop.name_en'), 'name_en', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                                {!! th_sort(trans('shop.name_ar'), 'name_ar', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('shop.Owner_first_name'), 'Owner_first_name', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('shop.Owner_last_name'), 'Owner_last_name', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                                {!! th_sort(trans('shop.email'), 'email', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                                {!! th_sort(trans('shop.available_payment'), 'available_payment', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                                {!! th_sort(trans('shop.telephone'), 'telephone', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                                {!! th_sort(trans('shop.status'), 'status', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                                                {!! th_sort(trans('shop.min_amount'), 'min_amount', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="11">
                                                                {!! th_sort(trans('shop.working_hour_from'), 'working_hour_from', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="12">
                                                                {!! th_sort(trans('shop.working_hour_to'), 'working_hour_to', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="13">
                                                                {!! th_sort(trans('shop.deliver_time_from'), 'deliver_time_from', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="14">
                                                                {!! th_sort(trans('shop.deliver_time_to'), 'deliver_time_to', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="15">
                                                                {!! th_sort(trans('shop.deliver_charge'), 'deliver_charge', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="16">
                                                                {!! th_sort(trans('shop.rating'), 'rating', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="17">
                                                                {!! th_sort(trans('shop.show_menu'), 'show_menu', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="18">
                                                                {!! th_sort(trans('shop.order_accept_days'), 'order_accept_days', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="19">
                                                                {!! th_sort(trans('shop.offline_order'), 'offline_order', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="20">
                                                                {!! th_sort(trans('shop.url'), 'url', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="21">
                                                                {!! th_sort(trans('shop.img'), 'img', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="22">
                                                                {!! th_sort(trans('shop.commission_type'), 'commission_type', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="23">
                                                                {!! th_sort(trans('shop.discount_type'), 'discount_type', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="24">
                                                                {!! th_sort(trans('shop.discount'), 'discount', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="25">
                                                                {!! th_sort(trans('shop.area_id'), 'area_id', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="26">
                                                                {!! th_sort(trans('shop.follow_us'), 'follow_us', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="27">
                                                                {!! th_sort(trans('shop.notification'), 'notification', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="28">
                                                                {!! th_sort(trans('shop.address_en'), 'address_en', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="29">
                                                                {!! th_sort(trans('shop.address_ar'), 'address_ar', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="30">
                                                                {!! th_sort(trans('shop.description_en'), 'description_en', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="31">
                                                                {!! th_sort(trans('shop.description_ar'), 'description_ar', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="32">
                                                                {!! th_sort(trans('shop.summary_en'), 'summary_en', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="33">
                                                                {!! th_sort(trans('shop.summary_ar'), 'summary_ar', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="34">
                                                                {!! th_sort(trans('shop.created_at'), 'created_at', $oShopResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="35">
                                                                {!! th_sort(trans('shop.updated_at'), 'updated_at', $oShopResults) !!}
                                                            </th>

                                                                                                                        @if($canShopShow
                                                            || $canShopEdit
                                                            || $canShopDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oShopResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oShopResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->name_en }}</td>

                                                                                                                                        <td>{{ $oResult->name_ar }}</td>

                                                                                                                                        <td>{{ $oResult->Owner_first_name }}</td>

                                                                                                                                        <td>{{ $oResult->Owner_last_name }}</td>

                                                                                                                                        <td>{{ $oResult->email }}</td>

                                                                                                                                        <td>{{ $oResult->available_payment }}</td>

                                                                                                                                        <td>{{ $oResult->telephone }}</td>

                                                                                                                                        <td>{{ $oResult->status }}</td>

                                                                                                                                        <td>{{ $oResult->min_amount }}</td>

                                                                                                                                        <td>{{ $oResult->working_hour_from }}</td>

                                                                                                                                        <td>{{ $oResult->working_hour_to }}</td>

                                                                                                                                        <td>{{ $oResult->deliver_time_from }}</td>

                                                                                                                                        <td>{{ $oResult->deliver_time_to }}</td>

                                                                                                                                        <td>{{ $oResult->deliver_charge }}</td>

                                                                                                                                        <td>{{ $oResult->rating }}</td>

                                                                                                                                        <td>{{ $oResult->show_menu }}</td>

                                                                                                                                        <td>{{ $oResult->order_accept_days }}</td>

                                                                                                                                        <td>{{ $oResult->offline_order }}</td>

                                                                                                                                        <td>{{ $oResult->url }}</td>

                                                                                                                                        <td>{{ $oResult->img }}</td>

                                                                                                                                        <td>{{ $oResult->commission_type }}</td>

                                                                                                                                        <td>{{ $oResult->discount_type }}</td>

                                                                                                                                        <td>{{ $oResult->discount }}</td>

                                                                                                                                        <td>{{ $oResult->area_id }}</td>

                                                                                                                                        <td>{{ $oResult->follow_us }}</td>

                                                                                                                                        <td>{{ $oResult->notification }}</td>

                                                                                                                                        <td>{{ $oResult->address_en }}</td>

                                                                                                                                        <td>{{ $oResult->address_ar }}</td>

                                                                                                                                        <td>{{ $oResult->description_en }}</td>

                                                                                                                                        <td>{{ $oResult->description_ar }}</td>

                                                                                                                                        <td>{{ $oResult->summary_en }}</td>

                                                                                                                                        <td>{{ $oResult->summary_ar }}</td>

                                                                                                                                        <td>{{ $oResult->created_at }}</td>

                                                                                                                                        <td>{{ $oResult->updated_at }}</td>

                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canShopDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/shop',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canShopEdit)
                                                                                    <a href="/admin/shop/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canShopShow )
                                                                                    <a href="/admin/shop/{{ $oResult->id }}"
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
                                                    @if (count($oShopResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oShopResults->firstItem() }} {{trans('general.to')}} {{ $oShopResults->lastItem() }} {{trans('general.of')}} {{ $oShopResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oShopResults->appends(Input::except('page_shop'))->appends($request->all())->render()) !!}
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
                                                            <a  href="{{route('admin.shop_area.create')}}?area_id={{$area['id'] }}"class="btn btn-primary form-control">
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
                                                                {!! th_sort(trans('shop_area.area_id'), 'area_id', $oShopAreaResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                                {!! th_sort(trans('shop_area.shop_id'), 'shop_id', $oShopAreaResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('shop_area.delivery_charges'), 'delivery_charges', $oShopAreaResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('shop_area.deera_charge'), 'deera_charge', $oShopAreaResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                                {!! th_sort(trans('shop_area.min_amount'), 'min_amount', $oShopAreaResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                                {!! th_sort(trans('shop_area.deliver_time_from'), 'deliver_time_from', $oShopAreaResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                                {!! th_sort(trans('shop_area.deliver_time_to'), 'deliver_time_to', $oShopAreaResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                                {!! th_sort(trans('shop_area.status'), 'status', $oShopAreaResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                                                {!! th_sort(trans('shop_area.governorate_id'), 'governorate_id', $oShopAreaResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="11">
                                                                {!! th_sort(trans('shop_area.created_at'), 'created_at', $oShopAreaResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="12">
                                                                {!! th_sort(trans('shop_area.updated_at'), 'updated_at', $oShopAreaResults) !!}
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

                                                                                                                                        <td>{{ $oResult->area_id }}</td>

                                                                                                                                        <td>{{ $oResult->shop_id }}</td>

                                                                                                                                        <td>{{ $oResult->delivery_charges }}</td>

                                                                                                                                        <td>{{ $oResult->deera_charge }}</td>

                                                                                                                                        <td>{{ $oResult->min_amount }}</td>

                                                                                                                                        <td>{{ $oResult->deliver_time_from }}</td>

                                                                                                                                        <td>{{ $oResult->deliver_time_to }}</td>

                                                                                                                                        <td>{{ $oResult->status }}</td>

                                                                                                                                        <td>{{ $oResult->governorate_id }}</td>

                                                                                                                                        <td>{{ $oResult->created_at }}</td>

                                                                                                                                        <td>{{ $oResult->updated_at }}</td>

                                                                    
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
                                                            <a  href="{{route('admin.address.create')}}?area_id={{$area['id'] }}"class="btn btn-primary form-control">
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
                                

                            </div>
                        </div>
                    </div>

                </div>







            </div>
        </div>



@stop