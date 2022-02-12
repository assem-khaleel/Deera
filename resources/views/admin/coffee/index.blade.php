@extends('common.layouts.main')
@section('title', trans('general.coffee'))

@section('content')



    {{--*/

    $canShow=canAccess('admin.coffee.show');
    $canEdit=canAccess('admin.coffee.edit');
    $canDestroy=canAccess('admin.coffee.destroy');
    $canCreate=canAccess('admin.coffee.create');


    /*--}}
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.coffee') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.coffee') }}</a></li>
                        <li class="active">{{ trans('general.coffee') }}</li>
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
                            <h3 class="box-title m-b-0">{{ trans('coffee.coffeeTableHead') }}</h3>
                            <p class="text-muted m-b-20">{{ trans('coffee.coffeeTableDescription') }}</p>



                        </div>
                        @if($canCreate)
                        <div class="col-xs-3">
                            <a  href="{{route('admin.coffee.create')}}"class="btn btn-primary form-control">
                                + {{trans('coffee.coffeeCreate')}}
                            </a>
                        </div>
                        @endif

                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                            <thead>
                            <tr>


                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                        {!! th_sort(trans('coffee.id'), 'id', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                        {!! th_sort(trans('coffee.name_en'), 'name_en', $oResults) !!}
                                    </th>


                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                        {!! th_sort(trans('general.shop'), 'shop_id', $oResults) !!}
                                    </th>


                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                        {!! th_sort(trans('coffee.price'), 'price', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="11">
                                        {!! th_sort(trans('coffee.quantity'), 'quantity', $oResults) !!}
                                    </th>



                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="18">
                                        {!! th_sort(trans('coffee.status'), 'status', $oResults) !!}
                                    </th>



                                @if(isset($request->best))

                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                        Order Number
                                    </th>
                                @endif

                                    @if($canEdit ||$canShow || $canDestroy)
                                    <th class="actionHeader"><i class="fa fa-cog"></i>

                                        <a href="?exportExcel=1&{{ http_build_query($request->all()) }}">
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

                                                                                <td>{{ $oResult->id }}</td>

                                                                                <td><img style="width:40px;height:40px;" src="{{ $oResult->img }}">
                                                                                    {{ $oResult->name_en }}</td>

                                                                                <td>{{ isset($oResult->shop->id)? $oResult->shop->name_en:'' }}</td>

                                                                                <td>{{ $oResult->price }}</td>

                                                                                <td>{{ $oResult->quantity }}</td>

                                        <td>{{ array_key_exists($oResult->status,config('array.coffee_status'))?config('array.coffee_status')[$oResult->status]:'-' }}</td>

                                        @if(isset($request->best))
                                            <td>{{ $oResult->order_number }}</td>
                                        @endif

                                        
                                        <td>

                                            <div class="tableActionsMenuDiv">
                                                <div class="innerContainer">
                                                    <i class="fa fa-list menuIconList"></i>

                                                    @if( $canDestroy)
                                                    {!! Form::open(['method' => 'DELETE',
                                                    'url' => ['/admin/coffee',$oResult->id]]) !!}
                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    {!! Form::close() !!}
@endif
                                                        @if($canEdit )
                                            <a href="/admin/coffee/{{ $oResult->id }}/edit"
                                               class="fa fa-edit"></a>
@endif
                                                            @if($canShow)
                                                    <a href="/admin/coffee/{{ $oResult->id }}"
                                                       class="fa fa-file-text"></a>
@endif
                                                    <a href="/admin/product_option?coffee_id={{ $oResult->id }}" class="fa fa-list-ul"></a>

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
                                    <span class="text-xs">{{trans('general.showing')}} {{ $oResults->firstItem() }} {{trans('coffee.to')}} {{ $oResults->lastItem() }} {{trans('general.of')}} {{ $oResults->total() }} {{trans('general.entries')}}</span>
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
                        {!! Form::text('id', null, ['placeholder'=>trans('coffee.id'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('name_en', null, ['placeholder'=>'name','class'=>'form-control input-sm ']) !!}

                    </div>
                </div>


                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('shop_id',[''=>'Select Shop']+$shopList, null, ['placeholder'=>trans('coffee.shop_id'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('price', null, ['placeholder'=>trans('coffee.price'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('status',[''=>'select Status']+config('array.coffee_status'), null, ['placeholder'=>trans('coffee.status'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-12">

                        <div class="col-xs-3">
                            {!! Form::checkbox('best',1, null, ['id'=>'bestCoffeeCheckbox','class'=>'form-control input-sm col-xs-3 ','style'=>'float:left']) !!}
                        </div>
                        <label class="col-xs-9" style="padding-top:10px;" for="bestCoffeeCheckbox">  Best Coffee
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
