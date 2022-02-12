@extends('common.layouts.main')
@section('title', trans('general.order'))

@section('content')



    {{--*/

    $canShow=canAccess('admin.order.show');
    $canEdit=canAccess('admin.order.edit');
    $canDestroy=canAccess('admin.order.destroy');
    $canCreate=canAccess('admin.order.create');


    /*--}}
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.order') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.order') }}</a></li>
                        <li class="active">{{ trans('general.order') }}</li>
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



                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                            {{--*/$current_year=\Carbon\Carbon::now()->format('Y');
                                           $totalOrder=$totalOrder ==0 ? 1:$totalOrder;
                                           /*--}}
                            <tfoot>

                            </tfoot>
                        <thead>
                        <tr>
                            <td colspan="3">Total Orders # </td><td colspan="6">{{$totalOrder}}</td>
                        </tr>
                        <tr>
                            <td colspan="3">Total Orders Price  </td><td colspan="6">{{ abs($totalOrderPrice)}} {{trans('website.kd')}}</td>
                        </tr>

                        <tr>
                            <td colspan="3">Total Commission </td><td colspan="6">{{ abs($deeraCharge)}}</td>
                        </tr>
                            <tr>


                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                    {!! th_sort(trans('order.id'), 'id', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                    {!! th_sort(trans('general.users'), 'users_id', $oResults) !!}
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                    {!! th_sort(trans('general.shop'), 'shop_id', $oResults) !!}
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                    {!! th_sort(trans('general.branch'), 'branch', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                    {!! th_sort(trans('general.area'), 'area_id', $oResults) !!}
                                </th>




                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                               Payment Type
                                </th>


                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                    {!! th_sort(trans('order.deera_charge'), 'deera_charge', $oResults) !!}
                                </th>

                                {{--<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">--}}
                                    {{--{!! th_sort(trans('order.total'), 'total', $oResults) !!}--}}
                                {{--</th>--}}




                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="13">
                                    {!! th_sort(trans('order.status'), 'status', $oResults) !!}
                                </th>





                                @if($canEdit ||$canShow || $canDestroy)
                                    <th class="actionHeader"><i class="fa fa-cog"></i>

                                        <a href="?exportExcel=1&{{http_build_query($request->all())}}">
                                            <i class="fa fa-file-excel-o "></i>
                                        </a>


                                        <a href="?exportExcel=pdf&{{ http_build_query($request->all()) }}">
                                            <i class="fa fa-file-pdf-o "></i>
                                        </a>
                                           

                                                    <a  onclick="window.open('/excel/exports/blingpayment.html','Print','').print()"> <i class="fa fa-print" aria-hidden="true"></i>
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

                                        <td>

                                            <a href=" @if(   $oResult->address_id> 0)/admin/address/{{$oResult->address_id}} @else # @endif">

                                                {{ isset($oResult->users()->first()->first_name)? $oResult->users()->first()->first_name:'#' }}
                                            </a>
                                        </td>
                                        <td>{{ isset($oResult->shop()->first()->name_en)? $oResult->shop()->first()->name_en:'' }}</td>

                                        <td>{{ isset($oResult->branch()->first()->name_en)? $oResult->branch()->first()->name_en:'' }}</td>

                                        <td>

                                            {{ (isset($oResult->area->name_en))?$oResult->area->name_en:'' }}</td>



                                        <td>{{ (isset($oResult->payment->first()['type'])
                                        &&
                                        array_key_exists($oResult->payment->first()['type'],config('array.payment_type')))?
                                        config('array.payment_type')[$oResult->payment->first()['type']]:'' }}</td>


                                        <td>{{ $oResult->deera_charge }}</td>


{{--                                        <td>{{ $oResult->total }}</td>--}}


                                        <td colspan="2">
                                            <span class="label label-success font-weight-100" style="background-color:{{config('array.order_status_color')[$oResult->status]}} !important;">
                                            {{ (array_key_exists($oResult->status,config('array.order_status')))?config('array.order_status')[$oResult->status]:''  }}
                                        </span>
                                        </td>




                                    </tr>

                                    <tr>
                                        <td  colspan="9" class="orderDetailTd">




                                            <div style="display:table; clear:both; width: 100%; text-align:center;">

                                                <div style="display:table-header-group;">
                                                <div class="table-header-group"  style="display: table-row;">





                                                    <div style="display:table-cell;" >
                                                        Product
                                                    </div>



                                                    <div style="display:table-cell;" >
                                Price
                                                    </div>

                                                    <div style="display:table-cell;" >
                                                        {!!  trans('cart.quantity') !!}
                                                    </div>


                                                    <div style="display:table-cell;" >
                                                        {!!  trans('cart.total_price') !!}
                                                    </div>

                                                    <div style="display:table-cell;" >
                                                        {!! trans('cart.size')  !!}
                                                    </div>

                                                    <div style="display:table-cell;" >
                                                        {!!  trans('cart.special_request')  !!}
                                                    </div>



                                                </div>
                                                </div>
                                                <div style="display: table-row-group; ">
                                                @if (count($oResult->cart))
                                                    {{-- */$i=0;/* --}}
                                                    {{-- */$class1='';/* --}}
                                                    @foreach($oResult->cart as $cart)
                                                        {{-- */$class1=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                        <div class='{{ $class1 }}' style="display: table-row;clear:both;" >


                                                            <div style="display: table-cell;">{{ $cart->coffee->name_en  }}</div>
                                                            <div style="display: table-cell;">{{ $cart->unit_price  }}</div>
                                                            <div style="display: table-cell;">{{ $cart->quantity  }}</div>

                                                            <div  style="display: table-cell;">{{ number_format($cart->quantity *$cart->unit_price*1 >=0 ?$cart->quantity *$cart->unit_price *1:0 ,3) }}</div>

                                                            <div  style="display: table-cell;">{{ isset($cart->size->{'name_'.config('app.locale')})? $cart->size->{'name_'.config('app.locale')}:''}}</div>
                                                            <div  style="display: table-cell;">{{ $cart->special_request }}</div>

                                                        </div>
                                                    @endforeach
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
                                    <span class="text-xs">{{trans('general.showing')}} {{ $oResults->firstItem() }} To {{ $oResults->lastItem() }} {{trans('general.of')}} {{ $oResults->total() }} {{trans('general.entries')}}</span>
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
            <style type="text/css">
                .table-header-group *{
                    color:#fff !important;
                    background-color:#ccc !important;
                }
                .orderDetailTd{
                    padding:0px !important;
                    padding-bottom: 20px !important;
                }
            </style>
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
                        {!! Form::text('id', null, ['placeholder'=>trans('order.id'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>





                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('deliver_date', null, ['placeholder'=>trans('order.deliver_date'),'class'=>'form-control input-sm mydatepicker']) !!}

                    </div>
                </div>





                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('shop_id',[''=>'Select Shop']+$shopList, null, ['placeholder'=>'User Name','class'=>'form-control input-sm ']) !!}

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('menu_section_id',[''=>'Select Category']+$menuSectionList, null, ['placeholder'=>'User Name','class'=>'form-control input-sm ']) !!}

                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('users_name', null, ['placeholder'=>'User Name','class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('users_type',[''=>'Select Users Type']+config('array.users_type'), null, ['placeholder'=>'Users Type','class'=>'form-control input-sm ']) !!}

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('area_id',[''=>'Select Area']+$areaList, null, ['placeholder'=>'Area','class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('coffee_id',[''=>'Select Coffee']+$coffeeList, null, ['placeholder'=>'Coffee','class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('rate',[''=>'Rate']+config('array.rate'), null, ['placeholder'=>trans('order.rate'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>






                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('status',[''=>'Order Status']+config('array.order_status'), null, ['placeholder'=>trans('order.status'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>




                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('payment_type',[''=>'Select Payment Type']+config('array.payment_type'), null, ['placeholder'=>trans('payment.type'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('from_date', null, ['placeholder'=>'From Date','class'=>'form-control input-sm mydatepicker']) !!}

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('to_date', null, ['placeholder'=>'To date','class'=>'form-control input-sm mydatepicker']) !!}

                    </div>
                </div>




                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('period_type',[''=>'Select Time Period']+[
                '' => '',
                'daily' => 'daily',
                'monthly' => 'monthly',
                'yearly' =>  'yearly'
                ], null, ['placeholder'=>'Time Period','class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('deliver_type',[''=>'Select deliver type',0=>'Schedule',1=>'Pick Up'], null, ['placeholder'=>'Time Period','class'=>'form-control input-sm ']) !!}

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
