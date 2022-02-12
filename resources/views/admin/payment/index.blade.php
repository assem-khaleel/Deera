@extends('common.layouts.main')
@section('title', trans('general.payment'))

@section('content')



    {{--*/

    $canShow=canAccess('admin.payment.show');
    $canEdit=canAccess('admin.payment.edit');
    $canDestroy=canAccess('admin.payment.destroy');
    $canCreate=canAccess('admin.payment.create');


    /*--}}
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.payment') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.payment') }}</a></li>
                        <li class="active">{{ trans('general.payment') }}</li>
                    </ol>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <form role="search" class="app-search hidden-xs pull-right">
                        <input type="text" placeholder=" {{ trans('general.search') }} ..." class="form-control">
                        <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
                    </form>
                </div>
            </div>

            {{--*/
            if(array_key_exists(config('array.payment_status_completed_index'),$statistic['aStatusResults'])){
            $completedAmount=$statistic['aStatusResults'][config('array.payment_status_completed_index')]->amount;
            $completedNumber=$statistic['aStatusResults'][config('array.payment_status_completed_index')]->number;
}else{
   $completedAmount=0;
            $completedNumber=0;
}



            if(array_key_exists(config('array.payment_status_pending_index'),$statistic['aStatusResults'])){
            $pendingAmount=$statistic['aStatusResults'][config('array.payment_status_pending_index')]->amount;
            $pendingNumber=$statistic['aStatusResults'][config('array.payment_status_pending_index')]->number;
}else{
 $pendingAmount=0;
            $pendingNumber=0;
}

  if(array_key_exists(config('array.payment_status_canceled_index'),$statistic['aStatusResults'])){

            $canceledAmount=$statistic['aStatusResults'][config('array.payment_status_canceled_index')]->amount;
            $canceledNumber=$statistic['aStatusResults'][config('array.payment_status_canceled_index')]->number;
}else{
  $canceledAmount=0;
            $canceledNumber=0;
}

$totalAmount=$completedAmount+$pendingAmount+$canceledAmount;
$totalNumber=$completedNumber+$pendingNumber+$canceledNumber;

$totalAmount=$totalAmount==0 ? 1:$totalAmount;


            /*--}}

            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title"><i class="ti-shopping-cart text-success"></i> Completed Payment </h3>
                        <div class="text-right"> <span class="text-muted">{{$completedAmount}} KD</span>
                            <h1><sup><i class="ti-arrow-up text-success"></i></sup> {{$completedNumber}}</h1>
                        </div>
                        <span class="text-success">{{round($completedAmount/$totalAmount *100,3) }}%</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:{{round($completedAmount/$totalAmount *100,3) }}%;"> <span class="sr-only">{{round($completedAmount/$totalAmount *100,3) }}% Complete</span> </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title"><i class="ti-cut text-danger"></i> Pending Payments</h3>
                        <div class="text-right"> <span class="text-muted">{{$pendingAmount}} KW</span>
                            <h1><sup><i class="ti-arrow-down text-danger"></i></sup> {{$pendingNumber}}</h1>
                        </div>
                        <span class="text-danger">{{round($pendingAmount/$totalAmount *100,3) }}%</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:{{round($pendingAmount/$totalAmount *100,3) }}%;"> <span class="sr-only">{{round($pendingAmount/$totalAmount *100,3) }}% </span> </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title"><i class="ti-wallet text-info"></i> Canceled Payment</h3>
                        <div class="text-right"> <span class="text-muted">{{$canceledAmount}} KW</span>
                            <h1><sup><i class="ti-arrow-up text-info"></i></sup> {{$canceledNumber}}</h1>
                        </div>
                        <span class="text-info">{{ round(($canceledAmount)/$totalAmount *100,3) }}%</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:{{ round(($canceledAmount)/$totalAmount *100,3) }}%;"> <span class="sr-only">{{ round(($canceledAmount)/$totalAmount *100,3) }}% Complete</span> </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title"><i class="ti-stats-up"></i>Deera Charge</h3>
                        <div class="text-right"> <span class="text-muted"> {{$statistic['deeraCharge']}} KW</span>
                            <h1><sup><i class="ti-arrow-up text-inverse"></i></sup> {{$statistic['deeraCharge']}}</h1>
                        </div>
                        <span class="text-inverse">Driver Charge :  {{$statistic['deeraDriverCharge']}}</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> <span class="sr-only">100% </span> </div>
                        </div>
                    </div>
                </div>
            </div>











            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">



                        @include('common.partials.messages')

                        <div class=" col-xs-9">
                            <h3 class="box-title m-b-0">{{ trans('payment.paymentTableHead') }}</h3>
                            <p class="text-muted m-b-20">{{ trans('payment.paymentTableDescription') }}</p>



                        </div>
                        @if($canCreate)
                        <div class="col-xs-3">
                            <a  href="{{route('admin.payment.create')}}"class="btn btn-primary form-control">
                                + {{trans('payment.paymentCreate')}}
                            </a>
                        </div>
                        @endif

                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                            <thead>
                            <tr>


                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                        {!! th_sort(trans('payment.id'), 'id', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                        {!! th_sort(trans('general.order'), 'order_id', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                        {!! th_sort(trans('general.users'), 'users_id', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                        {!! th_sort(trans('payment.amount'), 'amount', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                        {!! th_sort(trans('payment.status'), 'status', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                        {!! th_sort(trans('payment.type'), 'type', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                        {!! th_sort(trans('payment.notification'), 'notification', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                        {!! th_sort(trans('payment.created_at'), 'created_at', $oResults) !!}
                                    </th>

                                
                                    @if($canEdit ||$canShow || $canDestroy)
                                    <th class="actionHeader"><i class="fa fa-cog"></i>

                                        <a href="?exportExcel=1&{{http_build_query($request->all())}}">
                                            <i class="fa fa-file-excel-o "></i>
                                        </a>



                                         <a  onclick="window.open('http://localhost:8000/excel/exports/PaymentReport.html','Print','').print()"> <i class="fa fa-print" aria-hidden="true"></i>
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

                                                                                <td><a href="/admin/order/{{ $oResult->order_id }}">#{{ $oResult->order_id }}</a></td>

                                                                                <td>{{ isset($oResult->users->first_name )?$oResult->users->first_name:'' }}</td>

                                                                                <td>{{number_format( $oResult->amount*1>=0 ? $oResult->amount*1:0,3) }}</td>

                                                                                <td>{{ array_key_exists($oResult->status,config('array.payment_status'))? config('array.payment_status')[$oResult->status]:'' }}</td>

                                                                                <td>{{array_key_exists($oResult->type,config('array.payment_type'))?  config('array.payment_type')[$oResult->type]:'' }}</td>

                                                                                <td>{{ (array_key_exists($oResult->notification,config('array.payment_notification')))? config('array.payment_notification')[$oResult->notification]:'' }}</td>

                                                                                <td>{{ $oResult->created_at }}</td>


                                        
                                        <td>

                                            <div class="tableActionsMenuDiv">
                                                <div class="innerContainer">
                                                    <i class="fa fa-list menuIconList"></i>

                                                    @if( $canDestroy)
                                                    {!! Form::open(['method' => 'DELETE',
                                                    'url' => ['/admin/payment',$oResult->id]]) !!}
                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    {!! Form::close() !!}
@endif
                                                        @if($canEdit )
                                            <a href="/admin/payment/{{ $oResult->id }}/edit"
                                               class="fa fa-edit"></a>
@endif
                                                            @if($canShow)
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
                        @if (count($oResults))
                            <div class="row">

                                <div class="col-xs-12 col-sm-6 ">

                                    @include('common.partials.paginationSize',compact($request))
                                    <span class="text-xs">{{trans('general.showing')}} {{ $oResults->firstItem() }} {{trans('payment.to')}} {{ $oResults->lastItem() }} {{trans('general.of')}} {{ $oResults->total() }} {{trans('general.entries')}}</span>
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
                        {!! Form::text('id', null, ['placeholder'=>trans('payment.id'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>




                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('users_id',[''=>'Select User']+$usersList, null, ['class'=>'form-control input-sm ']) !!}

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('shop_id',[''=>'Select Shop']+$shopList, null, ['class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('area_id',[''=>'Select Area']+$areaList, null, ['class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('status',[''=>'Payment Status']+config('array.payment_status'), null, ['placeholder'=>trans('payment.status'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('type',[''=>'Select Payment Type']+config('array.payment_type'), null, ['placeholder'=>trans('payment.type'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('notification',[''=>'Notification']+config('array.payment_notification'), null, ['placeholder'=>trans('payment.notification'),'class'=>'form-control input-sm ']) !!}

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
                        {!! Form::text('from_date', null, ['placeholder'=>'From Date','class'=>'form-control input-sm mydatepicker']) !!}

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('to_date', null, ['placeholder'=>'To date','class'=>'form-control input-sm mydatepicker']) !!}

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
