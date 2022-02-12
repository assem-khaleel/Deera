@extends('common.layouts.main')
@section('title', trans('general.knet'))

@section('content')



    {{--*/

    $canShow=canAccess('admin.knet.show');
    $canEdit=canAccess('admin.knet.edit');
    $canDestroy=canAccess('admin.knet.destroy');
    $canCreate=canAccess('admin.knet.create');


    /*--}}
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.knet') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.knet') }}</a></li>
                        <li class="active">{{ trans('general.knet') }}</li>
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
                            <h3 class="box-title m-b-0">{{ trans('knet.knetTableHead') }}</h3>
                            <p class="text-muted m-b-20">{{ trans('knet.knetTableDescription') }}</p>



                        </div>
                        @if($canCreate)
                            <div class="col-xs-3">
                                <a  href="{{route('admin.knet.create')}}"class="btn btn-primary form-control">
                                    + {{trans('knet.knetCreate')}}
                                </a>
                            </div>
                        @endif

                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                            <thead>
                            <tr>


                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                    {!! th_sort(trans('knet.id'), 'id', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                    {!! th_sort(trans('knet.payment_id'), 'payment_id', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                    {!! th_sort(trans('knet.users_id'), 'users_id', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                    {!! th_sort(trans('knet.order_id'), 'order_id', $oResults) !!}
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                    amount
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                    {!! th_sort(trans('knet.PaymentID'), 'PaymentID', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                    {!! th_sort(trans('knet.Result'), 'Result', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                    {!! th_sort(trans('knet.PostDate'), 'PostDate', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                    {!! th_sort(trans('knet.TranID'), 'TranID', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                    {!! th_sort(trans('knet.Auth'), 'Auth', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                    {!! th_sort(trans('knet.Ref'), 'Ref', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="11">
                                    {!! th_sort(trans('knet.TrackID'), 'TrackID', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="12">
                                    {!! th_sort(trans('knet.UDF1'), 'UDF1', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="13">
                                    {!! th_sort(trans('knet.UDF2'), 'UDF2', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="14">
                                    {!! th_sort(trans('knet.UDF3'), 'UDF3', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="15">
                                    {!! th_sort(trans('knet.UDF4'), 'UDF4', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="16">
                                    {!! th_sort(trans('knet.UDF5'), 'UDF5', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="17">
                                    {!! th_sort(trans('knet.created_at'), 'created_at', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="18">
                                    {!! th_sort(trans('knet.updated_at'), 'updated_at', $oResults) !!}
                                </th>




                                @if($canEdit ||$canShow || $canDestroy)
                                    <th class="actionHeader"><i class="fa fa-cog"></i>


                                                       <a href="?exportExcel=1&{{http_build_query($request->all())}}">
                                            <i class="fa fa-file-excel-o "></i>
                                        </a>


                                     <!--    <a href="?exportExcel=pdf&{{ http_build_query($request->all()) }}">
                                            <i class="fa fa-file-pdf-o "></i>
                                        </a> -->

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

                                        <td>{{ $oResult->id }}</td>

                                        <td>{{ $oResult->payment_id }}</td>

                                        <td>{{ $oResult->users_id }}</td>

                                        <td>{{ $oResult->order_id }}</td>

                                        <td>{{ number_format($oResult->amount*1 >=0 ?$oResult->amount*1:0,3) }}</td>
                                        <td>{{ $oResult->PaymentID }}</td>

                                        <td>{{ $oResult->Result }}</td>

                                        <td>{{ $oResult->PostDate }}</td>

                                        <td>{{ $oResult->TranID }}</td>

                                        <td>{{ $oResult->Auth }}</td>

                                        <td>{{ $oResult->Ref }}</td>

                                        <td>{{ $oResult->TrackID }}</td>

                                        <td>{{ $oResult->UDF1 }}</td>

                                        <td>{{ $oResult->UDF2 }}</td>

                                        <td>{{ $oResult->UDF3 }}</td>

                                        <td>{{ $oResult->UDF4 }}</td>

                                        <td>{{ $oResult->UDF5 }}</td>

                                        <td>{{ $oResult->created_at }}</td>

                                        <td>{{ $oResult->updated_at }}</td>


                                        <td>

                                            <div class="tableActionsMenuDiv">
                                                <div class="innerContainer">
                                                    <i class="fa fa-list menuIconList"></i>

                                                    @if( $canDestroy)
                                                        {!! Form::open(['method' => 'DELETE',
                                                        'url' => ['/admin/knet',$oResult->id]]) !!}
                                                        <button type="submit" name="Delete" class="deleteRow" >
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                        {!! Form::close() !!}
                                                    @endif
                                                    @if($canEdit )
                                                        <a href="/admin/knet/{{ $oResult->id }}/edit"
                                                           class="fa fa-edit"></a>
                                                    @endif
                                                    @if($canShow)
                                                        <a href="/admin/knet/{{ $oResult->id }}"
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
                        @if (count($oResults))
                            <div class="row">

                                <div class="col-xs-12 col-sm-6 ">

                                    @include('common.partials.paginationSize',compact($request))
                                    <span class="text-xs">{{trans('general.showing')}} {{ $oResults->firstItem() }} {{trans('knet.to')}} {{ $oResults->lastItem() }} {{trans('general.of')}} {{ $oResults->total() }} {{trans('general.entries')}}</span>
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
            <footer class="footer text-center"> {!! trans('general.CopyRights') !!} </footer>
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
                        {!! Form::text('id', null, ['placeholder'=>trans('knet.id'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('payment_id', null, ['placeholder'=>trans('knet.payment_id'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('users_id', null, ['placeholder'=>trans('knet.users_id'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('order_id', null, ['placeholder'=>trans('knet.order_id'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('PaymentID', null, ['placeholder'=>trans('knet.PaymentID'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('Result', null, ['placeholder'=>trans('knet.Result'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('PostDate', null, ['placeholder'=>trans('knet.PostDate'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('TranID', null, ['placeholder'=>trans('knet.TranID'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('Auth', null, ['placeholder'=>trans('knet.Auth'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('Ref', null, ['placeholder'=>trans('knet.Ref'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('TrackID', null, ['placeholder'=>trans('knet.TrackID'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('UDF1', null, ['placeholder'=>trans('knet.UDF1'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('UDF2', null, ['placeholder'=>trans('knet.UDF2'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('UDF3', null, ['placeholder'=>trans('knet.UDF3'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('UDF4', null, ['placeholder'=>trans('knet.UDF4'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('UDF5', null, ['placeholder'=>trans('knet.UDF5'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('created_at', null, ['placeholder'=>trans('knet.created_at'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('updated_at', null, ['placeholder'=>trans('knet.updated_at'),'class'=>'form-control input-sm ']) !!}

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
