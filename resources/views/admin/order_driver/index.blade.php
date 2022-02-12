@extends('common.layouts.main')
@section('title', trans('general.order_driver'))

@section('content')



    {{--*/

    $canShow=canAccess('admin.order_driver.show');
    $canEdit=canAccess('admin.order_driver.edit');
    $canDestroy=canAccess('admin.order_driver.destroy');
    $canCreate=canAccess('admin.order_driver.create');


    /*--}}
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.order_driver') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.order_driver') }}</a></li>
                        <li class="active">{{ trans('general.order_driver') }}</li>
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
                            <h3 class="box-title m-b-0">{{ trans('order_driver.order_driverTableHead') }}</h3>
                            <p class="text-muted m-b-20">{{ trans('order_driver.order_driverTableDescription') }}</p>



                        </div>
                        @if(canAccess('admin.dispatcher.map'))

                            <div class="col-xs-3">
                                <a  href="{{route('admin.dispatcher.map')}}"class="btn btn-primary form-control">
                                   Dispatcher Map
                                </a>
                            </div>
                        @elseif($canCreate)
                            <div class="col-xs-3">
                                <a  href="{{route('admin.order_driver.create')}}?showDriverOrders={{current_user()->getUser()->id}}"class="btn btn-primary form-control">
                                   Driver Map
                                </a>
                            </div>

                            @endif

                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                            <thead>
                            <tr>


                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                        {!! th_sort(trans('order_driver.id'), 'id', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                        {!! th_sort(trans('general.driver'), 'users_id', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                        {!! th_sort(trans('order_driver.order_id'), 'order_id', $oResults) !!}
                                    </th>



                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                        {!! th_sort(trans('order_driver.status'), 'status', $oResults) !!}
                                    </th>



                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                        {!! th_sort(trans('order_driver.notification'), 'notification', $oResults) !!}
                                    </th>



                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                        {!! th_sort(trans('order_driver.updated_at'), 'updated_at', $oResults) !!}
                                    </th>

                                
                                    @if($canEdit ||$canShow || $canDestroy)
                                    <th class="actionHeader"><i class="fa fa-cog"></i> </th>
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

                                                                                <td>{{ $oResult->id }}</td>

                                                                                <td>{{  $oResult->users->first_name }}</td>

                                                                                <td><a href="/admin/order/{{ $oResult->order_id }}">#{{ $oResult->order_id }}</a></td>


                                                                                <td>{{ config('array.order_driver_status')[$oResult->status] }}</td>


                                                                                <td>{{ config('array.order_driver_notification')[$oResult->notification] }}</td>

                                                                                <td>{{ $oResult->updated_at }}</td>

                                        
                                        <td>

                                            <div class="tableActionsMenuDiv">
                                                <div class="innerContainer">
                                                    <i class="fa fa-list menuIconList"></i>

                                                    @if( $canDestroy)
                                                    {!! Form::open(['method' => 'DELETE',
                                                    'url' => ['/admin/order_driver',$oResult->id]]) !!}
                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    {!! Form::close() !!}
@endif
                                                        @if($canEdit )
                                            <a href="/admin/order_driver/{{ $oResult->id }}/edit"
                                               class="fa fa-edit"></a>
@endif
                                                            @if($canShow)
                                                    <a href="/admin/order_driver/{{ $oResult->id }}"
                                                       class="fa fa-file-text"></a>
@endif

                                                    <a href="{{route('admin.order.map')}}?order_id={{ $oResult->order_id }}"
                                                       class="fa fa-map"></a>
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
                                    <span class="text-xs">{{trans('general.showing')}} {{ $oResults->firstItem() }} {{trans('order_driver.to')}} {{ $oResults->lastItem() }} {{trans('general.of')}} {{ $oResults->total() }} {{trans('general.entries')}}</span>
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
                        {!! Form::text('id', null, ['placeholder'=>trans('order_driver.id'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('order_id', null, ['placeholder'=>'#Order Id','class'=>'form-control input-sm ']) !!}

                    </div>
                </div>




                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('status',[''=>'Driver Order Status']+config('array.order_driver_status'), null, ['placeholder'=>trans('order_driver.status'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                


                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('notification',[''=>'Notification Status']+config('array.order_driver_notification'), null, ['placeholder'=>trans('order_driver.notification'),'class'=>'form-control input-sm ']) !!}

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
