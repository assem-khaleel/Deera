@extends('common.layouts.main')
@section('title', Lang::get('dashboard.PageTitle'))
@section('content')

    <div id="content-wrapper" >

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title" style="background:url(/assets/elite/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;                    ">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"> Chart</h4>
                    </div>
                      <!-- /.col-lg-12 -->
                </div>

                <!--row -->

                <!--row -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
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


                </div>
                <!-- row -->


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
{{--*/

$from_date=0;
$to_date=0;
foreach($orderMainChart as $oChartResult)
                {
              $from_date=($from_date ==0)?$oChartResult->oneMonth:$from_date;
              $to_date=$oChartResult->oneMonth;

            }

$from_date=isset($request->from_date)? $request->from_date:$from_date;
$to_date=isset($request->to_date)? $request->to_date:$to_date;

$days=[];
$tempDate=$from_date;
$i=0;
while($tempDate <= $to_date ){
$tempDate=date('Y-m-d', strtotime($tempDate. ' + 1 day'));
$days[]=$tempDate ;
$i++;
}
/*--}}
    <script>

        Morris.Area({
            element: 'morris-area-chart2',
            data: [

@foreach($days as $day)
@if(array_key_exists($day,$orderMainChart))
                {
                period: '{{$orderMainChart[$day]->oneMonth}}',
                Total: {{$orderMainChart[$day]->total}},
                SiteB:  {{$orderMainChart[$day]->total}},

            },
                    @else
                       {
                    period: '{{$day}}',
                    Total: 0,
                    SiteB:  0,

                },
                    @endif
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