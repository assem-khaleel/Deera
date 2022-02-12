@extends('common.layouts.main')
@section('title', trans('general.users'))

@section('content')



    {{--*/

    $canShow=canAccess('common.users.show');
    $canEdit=canAccess('common.users.edit');
    $canDestroy=canAccess('common.users.destroy');
    $canCreate=canAccess('common.users.create');


    /*--}}
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('users.users') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('users.users') }}</a></li>
                        <li class="active">{{ trans('users.users') }}</li>
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
                            <h3 class="box-title m-b-0">{{ trans('users.usersTableHead') }}</h3>
                            <p class="text-muted m-b-20">{{ trans('users.usersTableDescription') }}</p>



                        </div>
                        @if($canCreate)
                        <div class="col-xs-3">
                            <a  href="{{route('common.users.create')}}"class="btn btn-primary form-control">
                                + {{trans('users.usersCreate')}}
                            </a>
                        </div>
                        @endif

                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                            <thead>
                            <tr>


                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                        {!! th_sort(trans('users.id'), 'id', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                        {!! th_sort(trans('users.email'), 'email', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                        {!! th_sort(trans('users.first_name'), 'first_name', $oResults) !!}
                                    </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                    {!! th_sort(trans('users.mobile'), 'mobile', $oResults) !!}
                                </th>

                                @if(isset($request->bestUser))
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                    Orders Number
                                </th>
                                @endif
                                @if(isset($request->newUsers))


                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                        {!! th_sort('Registered At', 'created_at', $oResults) !!}
                                    </th>
                                @endif

                                
                                    @if($canEdit ||$canShow || $canDestroy)
                                    <th class="actionHeader"><i class="fa fa-cog"></i>

                                        <a href="?exportExcel=1&{{ http_build_query($request->all()) }}">
                                            <i class="fa fa-file-excel-o "></i>
                                        </a>

                                        <a href="?exportExcel=pdf&{{ http_build_query($request->all()) }}">
                                            <i class="fa fa-file-pdf-o "></i>
                                        </a>

                                          <a  onclick="window.open('http://localhost:8000/excel/exports/Users List.html','Print','').print()"> <i class="fa fa-print" aria-hidden="true"></i>
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

                                                                                <td>{{ $oResult->id }}</td>

                                                                                <td>{{ $oResult->email }}</td>


                                                                                <td>{{ $oResult->first_name }}</td>

                                                                                <td>{{ $oResult->mobile }}</td>
                                        @if(isset($request->bestUser))

                                            <td>{{ $oResult->order_number }}</td>
                                            @endif
@if(isset($request->newUsers))
                                            <td>{{ $oResult->created_at }}</td>
    @endif
                                        
                                        <td>

                                            <div class="tableActionsMenuDiv">
                                                <div class="innerContainer">
                                                    <i class="fa fa-list menuIconList"></i>

                                                    @if( $canDestroy)
                                                    {!! Form::open(['method' => 'DELETE',
                                                    'url' => ['/common/users',$oResult->id]]) !!}
                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    {!! Form::close() !!}
@endif
                                                        @if($canEdit )
                                            <a href="/common/users/{{ $oResult->id }}/edit"
                                               class="fa fa-edit"></a>
@endif
                                                            @if($canShow)
                                                    <a href="/common/users/{{ $oResult->id }}"
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
                                    <span class="text-xs">{{trans('general.showing')}} {{ $oResults->firstItem() }} {{trans('users.to')}} {{ $oResults->lastItem() }} {{trans('general.of')}} {{ $oResults->total() }} {{trans('general.entries')}}</span>
                                </div>


                                <div class="col-xs-12 col-sm-6 ">
                                    {!! str_replace('/?', '?', $oResults->appends(Input::except('page'))->appends($request->all())->render()) !!}
                                </div>
                            </div>
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
                        {!! Form::text('id', null, ['placeholder'=>trans('users.id'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('email', null, ['placeholder'=>trans('users.email'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('mobile', null, ['placeholder'=>trans('users.mobile'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('blogger',[''=>'Select Blogger Status']+config('array.users_blogger'), null, ['placeholder'=>'blogger','class'=>'form-control input-sm ']) !!}

                    </div>
                </div>




                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('first_name', null, ['placeholder'=>trans('users.first_name'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('last_name', null, ['placeholder'=>trans('users.last_name'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>




                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('users_type',[''=>'User Type']+config('array.users_type'), null, ['placeholder'=>'Role','class'=>'form-control input-sm ']) !!}

                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('role_id',[''=>'Role']+$roleList, null, ['placeholder'=>'Role','class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">

                        <div class="col-xs-3">
                            {!! Form::checkbox('bestUser',1, null, ['id'=>'bestUserCheckbox','class'=>'form-control input-sm col-xs-3 ','style'=>'float:left']) !!}
                        </div>
                        <label class="col-xs-9" style="padding-top:10px;" for="bestUserCheckbox">  Best Users
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
