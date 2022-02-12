@extends('common.layouts.main')
@section('title', trans('general.shop'))

@section('content')



    {{--*/

    $canShow=canAccess('admin.shop.show');
    $canEdit=canAccess('admin.shop.edit');
    $canDestroy=canAccess('admin.shop.destroy');
    $canCreate=canAccess('admin.shop.create');


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
                        <li class="active">{{ trans('general.shop') }}</li>
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
                <div class="col-lg-12">
                    <div class="white-box">



                        @include('common.partials.messages')

                        <div class=" col-xs-9">
                            <h3 class="box-title m-b-0">{{ trans('shop.shopTableHead') }}</h3>
                            <p class="text-muted m-b-20">{{ trans('shop.shopTableDescription') }}</p>



                        </div>
                        @if($canCreate)
                        <div class="col-xs-3">
                            <a  href="{{route('admin.shop.create')}}"class="btn btn-primary form-control">
                                + {{trans('shop.shopCreate')}}
                            </a>
                        </div>
                        @endif

                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                            <thead>
                            <tr>



                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="21">
                                    {!! th_sort(trans('shop.img'), 'img', $oResults) !!}
                                </th>


                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                        {!! th_sort(trans('shop.name_en'), 'name_en', $oResults) !!}
                                    </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                    {!! th_sort(trans('general.mainBranch'), 'branch', $oResults) !!}
                                </th>


                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                        {!! th_sort(trans('shop.Owner_first_name'), 'Owner_first_name', $oResults) !!}
                                    </th>


                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                        {!! th_sort(trans('shop.email'), 'email', $oResults) !!}
                                    </th>

                  <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">  {{trans('website.instegram_account')}}</th>



                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                    {!! th_sort(trans('shop.status'), 'status', $oResults) !!}
                                </th>


                                @if(isset($request->bestShop))

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                   Order Number
                                </th>
@endif

                            @if($canEdit ||$canShow || $canDestroy)
                                    <th class="actionHeader"><i class="fa fa-cog"></i>

                                        <a href="?exportExcel=1&{{http_build_query($request->all())}}">
                                            <i class="fa fa-file-excel-o "></i>
                                        </a>
                                    </th>
                                        @endif
                            </tr>
                            </thead>
                            <tbody>
                            @if (count($oResults))
                                {{-- */$i=0;/* --}}
                                {{-- */$class='';/* --}}
                                @foreach($oResults as $oResult)
                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                    <tr class='{{ $class }}'>
                                        <td><img src="{{ $oResult->img }}" width="30px" height="30px"> </td>
                                        <td>{{ $oResult->name_en }}</td>
                                        <td>{{ isset($oResult->branch()->first()->id)?   $oResult->branch()->first()->{'name_'.config('app.locale')}:'' }}</td>

                                                                                <td>{{ $oResult->Owner_first_name }}</td>

                                                                                <td>{{ $oResult->email }}</td>
                                                                                <td>   {{ $oResult->instagram }} </td>
                                        <td>{{ (array_key_exists($oResult->status,config('array.shop_status')))? config('array.shop_status')[$oResult->status]:"" }}</td>

                                        @if(isset($request->bestShop))
                                        <td>{{ $oResult->order_number }}</td>
@endif
                                        
                                        <td>

                                            <div class="tableActionsMenuDiv">
                                                <div class="innerContainer">
                                                    <i class="fa fa-list menuIconList"></i>

                                                    @if( $canDestroy)
                                                        {!! Form::open(['method' => 'DELETE',
                                                        'url' => ['/admin/shop',$oResult->id]]) !!}
                                                        <button type="submit" name="Delete" class="deleteRow" >
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                        {!! Form::close() !!}
                                                    @endif
                                                    @if($canEdit )
                                                        <a href="/admin/shop/{{ $oResult->id }}/edit"
                                                           class="fa fa-edit"></a>
                                                    @endif
                                                    @if($canShow)
                                                        <a href="/admin/shop/{{ $oResult->id }}"
                                                           class="fa fa-file-text"></a>
                                                    @endif

                                                    <a href="{{route('admin.shop.create')}}?branch={{$oResult->id}}"
                                                       class="fa fa-plus"></a>
                                                    <a href="{{route('admin.shop.index')}}?id={{$oResult->id}}"
                                                       class="fa fa-sitemap"></a>


                                                </div>
                                                </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        @if (count($oResults))
                            <div class="row">

                                <div class="col-xs-12 col-sm-6 ">
@include('common.partials.paginationSize',compact($request))
                                    <span class="text-xs">{{trans('general.showing')}} {{ $oResults->firstItem() }} {{trans('shop.to')}} {{ $oResults->lastItem() }} {{trans('general.of')}} {{ $oResults->total() }} {{trans('general.entries')}}</span>
                                </div>


                                <div class="col-xs-12 col-sm-6 ">

                                    {!! str_replace('/?', '?', $oResults->appends(Input::except('page'))->appends($request->all())->render()) !!}
                                </div>
                            </div>
                        @else
                            <div class="noResultDiv" >{{trans('general.noResult')}}</div>

                        @endif
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> {!!trans('general.CopyRights')!!} </footer>
        </div>
        <!-- /#page-wrapper -->
        <!-- .right panel -->
        <div class="right-side-panel">
            <div class="scrollable-right container">
                <!-- .Theme settings -->
                <h3 class="title-heading">{{ trans('general.search') }}</h3>

                {!! Form::model($request,['method'=>'get','id'=>'searchForm', 'class'=>'form-horizontal']) !!}




                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('id', null, ['placeholder'=>trans('shop.id'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('name_en', null, ['placeholder'=>trans('shop.name_en'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('Owner_first_name', null, ['placeholder'=>trans('shop.Owner_first_name'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                


                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('email', null, ['placeholder'=>trans('shop.email'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('status',[''=>'Select Status']+config('array.shop_status'), null, ['placeholder'=>trans('shop.status'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>


                



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('rating',[''=>'Select Rate']+config('array.rate'), null, ['placeholder'=>trans('shop.rating'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                


                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('offline_order',[''=>"select Offline Order Status"]+config('array.shop_offline_order'), null, ['placeholder'=>trans('shop.offline_order'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>






                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('notification',[''=>"Select Notification Status"]+config('array.shop_notification'), null, ['placeholder'=>trans('shop.notification'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">

                        <div class="col-xs-3">
                     {!! Form::checkbox('bestShop',1, null, ['id'=>'bestShopCheckbox','class'=>'form-control input-sm col-xs-3 ','style'=>'float:left']) !!}
                            </div>
                          <label class="col-xs-9" style="padding-top:10px;" for="bestShopCheckbox">  Best Shop
                        </label>
                    </div>
                </div>




                <div class="form-group">
                    <label class="col-md-12"></label>
                    <div class="col-md-12">
                        {!! Form::submit(trans('general.search'), ['class'=>'btn btn-info btn-sm', 'name' => 'search']) !!}
                    </div>
                </div>

                {!! Form::hidden('sort', null) !!}
                {!! Form::hidden('order', null) !!}
                {!! Form::close()!!}
            </div>
        </div>

        @stop
