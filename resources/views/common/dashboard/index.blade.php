@extends('common.layouts.main')
@section('title', Lang::get('dashboard.PageTitle'))
@section('content')

    <div id="content-wrapper" >

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title" style="background:url(/assets/elite/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;                    ">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"> Dashboard</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="{{route('admin.order.allmap')}}" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Orders Map</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">
                                {!! Form::model($request,['method'=>'get','style'=>'display:inline;','id'=>'periodTypeForm']) !!}
                                {!! Form::select('period_type',[''=>'All','daily'=>'Daily', 'monthly'=>'Monthly','yearly'=>'Yearly'],null,['class'=>'','style'=>'background:transparent;color:#e5c5a5;','onchange'=>"$('#periodTypeForm').submit();",]) !!}
                            {!! Form::close() !!}
                            </li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                {{--*/$current_year=\Carbon\Carbon::now()->format('Y');
                $totalOrder=$totalOrder ==0 ? 1:$totalOrder;
                /*--}}
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><i class="ti-shopping-cart text-success"></i> Order Received </h3>
                            <div class="text-right"> <span class="text-muted">{{$current_year}} Order</span>
                                <h1><sup><i class="ti-arrow-up text-success"></i></sup> {{$totalOrder}}</h1>
                            </div>
                            <span class="text-success">{{round(($totalOrder -$pendingOrder)/$totalOrder *100,3) }}%</span>
                            <div class="progress m-b-0">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:{{($totalOrder -$pendingOrder)/$totalOrder*100 }}%;"> <span class="sr-only">{{round(($totalOrder -$pendingOrder)/$totalOrder*100,3) }}% Complete</span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><i class="ti-cut text-danger"></i> Rejected Orders</h3>
                            <div class="text-right"> <span class="text-muted">rejected orders {{$current_year}}</span>
                                <h1><sup><i class="ti-arrow-down text-danger"></i></sup> {{$rejectOrder}}</h1>
                            </div>
                            <span class="text-danger">{{round(($rejectOrder)/$totalOrder *100,3) }}%</span>
                            <div class="progress m-b-0">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:{{($rejectOrder)/$totalOrder *100 }}%;"> <span class="sr-only">{{round(($rejectOrder)/$totalOrder *100,3) }}% </span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><i class="ti-wallet text-info"></i> Payed Orders</h3>
                            <div class="text-right"> <span class="text-muted">payed orders {{$current_year}}</span>
                                <h1><sup><i class="ti-arrow-up text-info"></i></sup> {{$payedOrder}}</h1>
                            </div>
                            <span class="text-info">{{ round(($payedOrder)/$totalOrder *100,3) }}%</span>
                            <div class="progress m-b-0">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:{{($payedOrder)/$totalOrder *100 }}%;"> <span class="sr-only">{{ round(($payedOrder)/$totalOrder *100,3) }}% Complete</span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><i class="ti-stats-up"></i>Pending Orders</h3>
                            <div class="text-right"> <span class="text-muted">pending order {{$current_year}}</span>
                                <h1><sup><i class="ti-arrow-up text-inverse"></i></sup> {{$pendingOrder}}</h1>
                            </div>
                            <span class="text-inverse">{{round(($pendingOrder)/$totalOrder *100,3) }}%</span>
                            <div class="progress m-b-0">
                                <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:{{($pendingOrder)/$totalOrder *100 }}%;"> <span class="sr-only">{{ round(($pendingOrder)/$totalOrder *100,3) }}% </span> </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--row -->

                <!--row -->
                <div class="row">
                    <div class="col-md-7 col-lg-8 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Total Sales</h3>
                            <ul class="list-inline text-center">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>Total Sales</h5>
                                </li>
                                <li  style="display:none;">
                                    <h5><i class="fa fa-circle m-r-5" style="color: #b4becb;"></i>iPhone</h5>
                                </li>
                            </ul>

                            <div id="morris-area-chart2" style="height: 370px;"></div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-xs-12" style="background-color:#ffffff;">
                        <ul class="country-state slimscrollcountry">
{{--*/
$colors=['success','inverse','danger','info','purple'];$i=0;
/*--}}
                            @foreach($oOrderAreas as $oOrderArea)
                            <li>
                                <h2>{{$oOrderArea->number}}</h2>
                                <small>From {{$oOrderArea->name_en}}</small>
                                <div class="pull-right">{{ round($oOrderArea->number/$totalOrder * 100,3)}}% <i class="fa fa-level-up text-success"></i></div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-{{$colors[$i%5]}}" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:{{$oOrderArea->number/$totalOrder * 100}}%;"> <span class="sr-only">{{ round($oOrderArea->number/$totalOrder * 100,3)}}% Complete</span></div>
                                </div>
                            </li>
                                {{--*/$i++;/*--}}
                            @endforeach

                        </ul>

                    </div>
                    <div class="col-md-5 col-lg-4 col-sm-12 col-xs-12" style="display: none">
                        <div class="white-box">
                            <h3 class="box-title">Order Stats</h3>
                            <div id="morris-donut-chart" class="ecomm-donute" style="height: 317px;"></div>
                            <ul class="list-inline m-t-30 text-center">
                                <li class="p-r-20">
                                    <h5 class="text-muted"><i class="fa fa-circle" style="color: #fb9678;"></i> Order</h5>
                                    <h4 class="m-b-0">8500</h4>
                                </li>
                                <li class="p-r-20">
                                    <h5 class="text-muted"><i class="fa fa-circle" style="color: #01c0c8;"></i> Pending</h5>
                                    <h4 class="m-b-0">3630</h4>
                                </li>
                                <li>
                                    <h5 class="text-muted"> <i class="fa fa-circle" style="color: #4F5467;"></i> Delivered</h5>
                                    <h4 class="m-b-0">4870</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Orders Overview</h3>
                            <div class="table-responsive">
                                <table class="table product-overview">
                                    <thead>
                                    <tr>
                                        <th>Customer</th>
                                        <th>Order ID</th>
                                        <th>Photo</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($oCartResults))
                                    @foreach($oCartResults as $oCartResult)
                                    <tr>
                                        <td>{{isset($oCartResult->users->first_name)? $oCartResult->users->first_name:''}}</td>
                                        <td><a href="/admin/order/{{$oCartResult->order_id}}">#{{$oCartResult->order_id}}</a></td>
                                        <td>
                                            @if(isset($oCartResult->coffee->id))
                                            <img src="{{$oCartResult->coffee->img}}" alt="{{$oCartResult->coffee->name_en}}" width="80">
                                                @endif
                                        </td>
                                        <td>{{$oCartResult->coffee->name_en}}</td>
                                        <td>{{$oCartResult->quantity}}</td>

                                        <td>{{$oCartResult->created_at}}</td>
                                        <td>
                                            <span class="label label-success font-weight-100" style="background-color:{{config('array.order_status_color')[$oCartResult->order->status]}} !important;">{{config('array.order_status')[$oCartResult->order->status]}}</span>
                                        </td>
                                        <td><a href="/admin/cart/{{$oCartResult->id}}/edit" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit" ><i class="ti-marker-alt"></i></a>
                                            <a href="/admin/cart/{{$oCartResult->id}}" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="ti-list"></i></a></td>

                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
@endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul>
                                <li><b>Layout Options</b></li>
                                <li>
                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox1" type="checkbox" class="fxhdr">
                                        <label for="checkbox1"> Fix Header </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-warning">
                                        <input id="checkbox2" type="checkbox" class="fxsdr">
                                        <label for="checkbox2" > Fix Sidebar </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox4" type="checkbox" class="open-close">
                                        <label for="checkbox4" > Toggle Sidebar </label>
                                    </div>
                                </li>
                            </ul>
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" theme="default" class="default-theme working">1</a></li>
                                <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
                                <li><b>With Dark sidebar</b></li>
                                <br/>
                                <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>

                                <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li><a href="javascript:void(0)"><img src="/assets/elite/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a></li>
                                <li><a href="javascript:void(0)"><img src="/assets/elite/plugins/images/users/genu.jpg" alt="user-img"  class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a></li>
                                <li><a href="javascript:void(0)"><img src="/assets/elite/plugins/images/users/ritesh.jpg" alt="user-img"  class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a></li>
                                <li><a href="javascript:void(0)"><img src="/assets/elite/plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a></li>
                                <li><a href="javascript:void(0)"><img src="/assets/elite/plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a></li>
                                <li><a href="javascript:void(0)"><img src="/assets/elite/plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a></li>
                                <li><a href="javascript:void(0)"><img src="/assets/elite/plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a></li>
                                <li><a href="javascript:void(0)"><img src="/assets/elite/plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> {!!trans('general.CopyRights')!!} </footer>
        </div>
    </div>

    @stop

    @section('script')




            <!-- jQuery -->
    <script src="/assets/elite/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/elite/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="/assets/elite/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="/assets/elite/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="/assets/elite/js/waves.js"></script>
    <!--Counter js -->
    <script src="/assets/elite/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="/assets/elite/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="/assets/elite/plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="/assets/elite/plugins/bower_components/morrisjs/morris.js"></script>
    {{--<script src="/assets/elite/js/morris-data.js"></script>--}}
    <!-- Custom Theme JavaScript -->
    <script src="/assets/elite/js/custom.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="/assets/elite/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="/assets/elite/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <script src="/assets/elite/js/dashboard1.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="/assets/elite/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="/assets/elite/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>

    <!--Style Switcher -->
    <script src="/assets/elite/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>

    <script>

        Morris.Area({
            element: 'morris-area-chart2',
            data: [
@foreach($oChartResults as $oChartResult)
                {
                period: '{{$oChartResult->oneMonth}}',
                Total: {{$oChartResult->total}},
                SiteB:  {{$oChartResult->total}},

            },
@endforeach
            ],
            xkey: 'period',
            ykeys: ['Total', 'SiteB'],
            labels: ['Total Sales', 'Site B'],
            pointSize: 0,
            fillOpacity: 0.4,
            pointStrokeColors:['#b4becb', '#01c0c8'],
            behaveLikeLine: true,
            gridLineColor: '#e0e0e0',
            lineWidth: 0,
            smooth: false,
            hideHover: 'auto',
            lineColors: ['#b4becb', '#01c0c8'],
            resize: true

        });


    </script>
<script>
    $('.mini-nav li').eq(0).click();
</script>

    @stop