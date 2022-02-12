@extends('common.layouts.main')

@section('title', trans('general.shop'))
@section('content')


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
                        <li class="active">{{ trans('shop.editshop') }}</li>
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
                        <h3 class="box-title m-b-0">{{ trans('shop.shop') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('shop.editshop') }}</p>
                        <!-- Nav tabs -->

                        @include ('common/partials/messages')
                        <ul class="nav nav-tabs" role="tablist">


                            <li role="presentation" class="active">
                                <a href="#idetail" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-home"></i>{{trans('general.basic')}}</span></a>
                            </li>


                            <li role="presentation" >
                                <a href="#iArabic" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-language"></i>{{trans('general.arabic')}}</span></a>
                            </li>
                            <li role="presentation" >
                                <a href="#iOwner" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.owner')}}</span></a>
                            </li>
                            <li role="presentation" >
                                <a href="#iExtra" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.extra')}}</span></a>
                            </li>

                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">


                            <div role="tabpanel" class="tab-pane active" id="">


                                {!! Form::model($shop, [
                                    'method' => 'PATCH',
                                    'url' => ['/admin/shop', $shop->id],
                                    'class' => 'form-horizontal'
                                ]) !!}


                                <div class="tab-content">


                                    <div role="tabpanel" class="tab-pane active" id="idetail">





                                        <div class="panel">
                                            <div class="panel-heading">
                                                <span class="panel-title">{{ trans('shop.editshop') }}</span>
                                            </div>

                                            <div class="panel-body">





                                                <div class="form-group {{ $errors->has("name_en") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("name_en", trans("shop.name_en"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::text("name_en", null, ["class" => "form-control","placeholder"=> trans("shop.name_en")]) !!}
                                                        {!! $errors->first("name_en", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>


                                                <div class="form-group {{ $errors->has("branch") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("branch", trans("general.branch"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::select("branch",[0=>trans('general.mainBranch')]+$mainBranchList, null, ["class" => "form-control","placeholder"=> trans("general.branch")]) !!}
                                                        {!! $errors->first("branch", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>



                                                <div class="form-group col-sm-12 map-cvr">
                                                    <input class="form-control" placeholder="Name" id="placeInput" type="text">
                                                    <div  style="position:relative;" onclick="window.open('/selectAddressFromMap?latitude='+$('#hiddenLatitudeInput').val()+'&longitude='+$('#hiddenLongitudeInput').val()+'', 'address map', 'width=1000,height=1000,status=yes');">
                                                        <div style="position:absolute;left:0px;top:0px;background-color:rgba(255,255,255,0.1);height: 200px;width:100%;">  </div>
                                                        <iframe  onclick="window.location.href='/selectAddressFromMap?latitude='+$('#hiddenLatitudeInput').val()+'&longitude='+$('#hiddenLongitudeInput').val()+''" id="insertAddressIframe"src="" height="200px" width="100%"></iframe>
                                                    </div>
                                                    <div class="map clearfix">
                                                        {{--<iframe  onclick="window.location.href='/selectAddressFromMap?latitude='+$('#hiddenLatitudeInput').val()+'&longitude='+$('#hiddenLongitudeInput').val()+''" id="insertAddressIframe"src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d187179.63669472354!2d47.53111409935966!3d29.33945907845681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3fc5363fbeea51a1%3A0x74726bcd92d8edd2!2sKuwait!3m2!1d29.31166!2d47.481766!5e0!3m2!1sen!2sin!4v1488429901625" width="100%" height="100" frameborder="0" style="border:0" ></iframe>--}}
                                                    </div>


                                                    {!! Form::hidden('long',null,['id'=>'hiddenLongitudeInput']) !!}
                                                    {!! Form::hidden('lat',null,['id'=>'hiddenLatitudeInput']) !!}

                                                </div>
                                                <script>

                                                    document.getElementById('insertAddressIframe').setAttribute('src','/selectAddressFromMap?latitude='+document.getElementById('hiddenLatitudeInput').value+'&longitude='+document.getElementById('hiddenLongitudeInput').value+'')

                                                    //        getLocation();
                                                </script>





                                                <div class="form-group {{ $errors->has("available_payment") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("available_payment", trans("shop.available_payment"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::text("available_payment", null, ["class" => "form-control","placeholder"=> trans("shop.available_payment")]) !!}
                                                        {!! $errors->first("available_payment", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>





                                                <div class="form-group {{ $errors->has("status") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("status", trans("shop.status"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::select("status",config('array.shop_status'), null, ["class" => "form-control","placeholder"=> trans("shop.status")]) !!}
                                                        {!! $errors->first("status", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>



                                                <div class="form-group {{ $errors->has("min_amount") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("min_amount", trans("shop.min_amount"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::text("min_amount", null, ["class" => "form-control","placeholder"=> trans("shop.min_amount")]) !!}
                                                        {!! $errors->first("min_amount", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>


                                                <div class="form-group {{ $errors->has("expected_deliver_time") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("expected_deliver_time", 'Expected Deliver Time', ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::text("expected_deliver_time", null, ["class" => "form-control","placeholder"=>'Expected Deliver Time']) !!}
                                                        {!! $errors->first("expected_deliver_time", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>

                                                <div class="form-group {{ $errors->has("working_hour_from") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("working_hour_from", trans("shop.working_hour_from"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8  clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
                                                        {!! Form::text("working_hour_from", null, ["class" => "form-control","placeholder"=> trans("shop.working_hour_from")]) !!}
                                                        {!! $errors->first("working_hour_from", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>



                                                <div class="form-group {{ $errors->has("working_hour_to") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("working_hour_to", trans("shop.working_hour_to"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8   clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
                                                        {!! Form::text("working_hour_to", null, ["class" => "form-control","placeholder"=> trans("shop.working_hour_to")]) !!}
                                                        {!! $errors->first("working_hour_to", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>


                                                <div class="clearfix"></div>

                                                <div class="form-group {{ $errors->has("deliver_time_from") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("deliver_time_from", trans("shop.deliver_time_from"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8  clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
                                                        {!! Form::text("deliver_time_from", null, ["class" => "form-control","placeholder"=> trans("shop.deliver_time_from")]) !!}
                                                        {!! $errors->first("deliver_time_from", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>



                                                <div class="form-group {{ $errors->has("deliver_time_to") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("deliver_time_to", trans("shop.deliver_time_to"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8  clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
                                                        {!! Form::text("deliver_time_to", null, ["class" => "form-control","placeholder"=> trans("shop.deliver_time_to")]) !!}
                                                        {!! $errors->first("deliver_time_to", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>


                                                <div class="clearfix"></div>

                                                <div class="form-group {{ $errors->has("deliver_charge") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("deliver_charge", trans("shop.deliver_charge"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::text("deliver_charge", null, ["class" => "form-control","placeholder"=> trans("shop.deliver_charge")]) !!}
                                                        {!! $errors->first("deliver_charge", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>




                                                <div class="form-group {{ $errors->has("deliver_type") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("deliver_type", 'Deliver Type', ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::select("deliver_type",config('array.shop_deliver_type'), null, ["class" => "form-control","placeholder"=> 'Deliver Type']) !!}
                                                        {!! $errors->first("deliver_type", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>




                                                <div class="form-group {{ $errors->has("schedule_commission") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("schedule_commission",'Schedule Commission', ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::text("schedule_commission", null, ["class" => "form-control","placeholder"=> 'Schedule Commission']) !!}
                                                        {!! $errors->first("schedule_commission", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>




                                                <div class="form-group {{ $errors->has("service_charge") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("service_charge", 'Service Charge', ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::text("service_charge", null, ["class" => "form-control","placeholder"=>'Service Charge']) !!}
                                                        {!! $errors->first("service_charge", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>



                                                <div class="form-group {{ $errors->has("Pickup Interval") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("pickup_interval", 'pickup_interval', ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::text("pickup_interval", null, ["class" => "form-control","placeholder"=> 'Pickup Interval']) !!}
                                                        {!! $errors->first("pickup_interval", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>




                                                <div class="form-group {{ $errors->has("rating") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("rating", trans("shop.rating"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::text("rating", null, ["class" => "form-control","placeholder"=> trans("shop.rating")]) !!}
                                                        {!! $errors->first("rating", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>



                                                <div class="form-group {{ $errors->has("show_menu") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("show_menu", trans("shop.show_menu"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::text("show_menu", null, ["class" => "form-control","placeholder"=> trans("shop.show_menu")]) !!}
                                                        {!! $errors->first("show_menu", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>



                                                <div class="form-group {{ $errors->has("order_accept_days") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("order_accept_days", trans("shop.order_accept_days"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::text("order_accept_days", null, ["class" => "form-control","placeholder"=> trans("shop.order_accept_days")]) !!}
                                                        {!! $errors->first("order_accept_days", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>



                                                <div class="form-group {{ $errors->has("offline_order") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("offline_order", trans("shop.offline_order"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::select("offline_order",config('array.shop_offline_order'), null, ["class" => "form-control","placeholder"=> trans("shop.offline_order")]) !!}
                                                        {!! $errors->first("offline_order", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>



                                                <div class="form-group {{ $errors->has("url") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("url", trans("shop.url"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::text("url", null, ["class" => "form-control","placeholder"=> trans("shop.url")]) !!}
                                                        {!! $errors->first("url", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>



                                                <div class="form-group {{ $errors->has("img") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("img", trans("shop.img"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::text("img", null, ["class" => "form-control uploadFile","placeholder"=> trans("shop.img")]) !!}
                                                        {!! $errors->first("img", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>



                                                <div class="form-group {{ $errors->has("commission_type") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("commission_type", trans("shop.commission_type"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::select("commission_type",config('array.shop_commission_type'), null, ["class" => "form-control","placeholder"=> trans("shop.commission_type")]) !!}
                                                        {!! $errors->first("commission_type", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>



                                                <div class="form-group {{ $errors->has("discount_type") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("discount_type", trans("shop.discount_type"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::select("discount_type",config('array.shop_discount_type'), null, ["class" => "form-control","placeholder"=> trans("shop.discount_type")]) !!}
                                                        {!! $errors->first("discount_type", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>



                                                <div class="form-group {{ $errors->has("discount") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("discount", trans("shop.discount"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::text("discount", null, ["class" => "form-control","placeholder"=> trans("shop.discount")]) !!}
                                                        {!! $errors->first("discount", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>



                                                <div class="form-group {{ $errors->has("area_id") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("area_id", trans("shop.area_id"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::select("area_id",$areaList, null, ["class" => "form-control","placeholder"=> trans("shop.area_id")]) !!}
                                                        {!! $errors->first("area_id", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>



                                                <div class="form-group {{ $errors->has("follow_us") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("follow_us", trans("shop.follow_us"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::select("follow_us",config('array.shop_follow_us'), null, ["class" => "form-control","placeholder"=> trans("shop.follow_us")]) !!}
                                                        {!! $errors->first("follow_us", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>



                                                <div class="form-group {{ $errors->has("notification") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("notification", trans("shop.notification"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::select("notification",config('array.shop_notification'), null, ["class" => "form-control","placeholder"=> trans("shop.notification")]) !!}
                                                        {!! $errors->first("notification", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>







                                                <div class="form-group">
                                                    <div class="col-sm-offset-9 col-sm-3">
                                                        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div role="tabpanel" class="tab-pane " id="iArabic">





                                        <div class="panel">
                                            <div class="panel-heading">
                                                <span class="panel-title">{{ trans('shop.addshop') }}</span>
                                            </div>

                                            <div class="panel-body">







                                                <div class="form-group {{ $errors->has("name_ar") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("name_ar", trans("shop.name_ar"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::text("name_ar", null, ["class" => "form-control","placeholder"=> trans("shop.name_ar")]) !!}
                                                        {!! $errors->first("name_ar", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>













                                                <div class="form-group {{ $errors->has("address_ar") ? "has-error" : ""}}  col-xs-12">
                                                    {!! Form::label("address_ar", trans("shop.address_ar"), ["class" => "col-sm-12"]) !!}
                                                    <div class="col-sm-12">
                                                        {!! Form::textarea("address_ar", null, ["class" => "form-control","placeholder"=> trans("shop.address_ar")]) !!}
                                                        {!! $errors->first("address_ar", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>





                                                <div class="form-group {{ $errors->has("description_ar") ? "has-error" : ""}}  col-xs-12">
                                                    {!! Form::label("description_ar", trans("shop.description_ar"), ["class" => "col-sm-12"]) !!}
                                                    <div class="col-sm-12">
                                                        {!! Form::textarea("description_ar", null, ["class" => "form-control","placeholder"=> trans("shop.description_ar")]) !!}
                                                        {!! $errors->first("description_ar", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>




                                                <div class="form-group {{ $errors->has("summary_ar") ? "has-error" : ""}}  col-xs-12">
                                                    {!! Form::label("summary_ar", trans("shop.summary_ar"), ["class" => "col-sm-12"]) !!}
                                                    <div class="col-sm-12">
                                                        {!! Form::textarea("summary_ar", null, ["class" => "form-control","placeholder"=> trans("shop.summary_ar")]) !!}
                                                        {!! $errors->first("summary_ar", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>







                                                <div class="form-group">
                                                    <div class="col-sm-offset-9 col-sm-3">
                                                        {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div role="tabpanel" class="tab-pane " id="iOwner">





                                        <div class="panel">
                                            <div class="panel-heading">
                                                <span class="panel-title">{{ trans('shop.addshop') }}</span>
                                            </div>

                                            <div class="panel-body">







                                                <div class="form-group {{ $errors->has("Owner_first_name") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("Owner_first_name", trans("shop.Owner_first_name"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::text("Owner_first_name", null, ["class" => "form-control","placeholder"=> trans("shop.Owner_first_name")]) !!}
                                                        {!! $errors->first("Owner_first_name", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>



                                                <div class="form-group {{ $errors->has("Owner_last_name") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("Owner_last_name", trans("shop.Owner_last_name"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::text("Owner_last_name", null, ["class" => "form-control","placeholder"=> trans("shop.Owner_last_name")]) !!}
                                                        {!! $errors->first("Owner_last_name", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>



                                                <div class="form-group {{ $errors->has("email") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("email", trans("shop.email"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::text("email", null, ["class" => "form-control","placeholder"=> trans("shop.email")]) !!}
                                                        {!! $errors->first("email", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>




                                                <div class="form-group {{ $errors->has("telephone") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("telephone", trans("shop.telephone"), ["class" => "col-sm-4 control-label"]) !!}
                                                    <div class="col-sm-8">
                                                        {!! Form::text("telephone", null, ["class" => "form-control","placeholder"=> trans("shop.telephone")]) !!}
                                                        {!! $errors->first("telephone", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>







                                                <div class="form-group">
                                                    <div class="col-sm-offset-9 col-sm-3">
                                                        {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div role="tabpanel" class="tab-pane " id="iExtra">





                                        <div class="panel">
                                            <div class="panel-heading">
                                                <span class="panel-title">{{ trans('shop.addshop') }}</span>
                                            </div>

                                            <div class="panel-body">





                                                <div class="form-group {{ $errors->has("address_en") ? "has-error" : ""}}  col-xs-12">
                                                    {!! Form::label("address_en", trans("shop.address_en"), ["class" => "col-sm-12"]) !!}
                                                    <div class="col-sm-12">
                                                        {!! Form::textarea("address_en", null, ["class" => "form-control","placeholder"=> trans("shop.address_en")]) !!}
                                                        {!! $errors->first("address_en", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>


                                                <div class="form-group {{ $errors->has("description_en") ? "has-error" : ""}}  col-xs-12">
                                                    {!! Form::label("description_en", trans("shop.description_en"), ["class" => "col-sm-12"]) !!}
                                                    <div class="col-sm-12">
                                                        {!! Form::textarea("description_en", null, ["class" => "form-control","placeholder"=> trans("shop.description_en")]) !!}
                                                        {!! $errors->first("description_en", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>





                                                <div class="form-group {{ $errors->has("summary_en") ? "has-error" : ""}}  col-xs-12">
                                                    {!! Form::label("summary_en", trans("shop.summary_en"), ["class" => "col-sm-12"]) !!}
                                                    <div class="col-sm-12">
                                                        {!! Form::textarea("summary_en", null, ["class" => "form-control","placeholder"=> trans("shop.summary_en")]) !!}
                                                        {!! $errors->first("summary_en", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>








                                                <div class="form-group">
                                                    <div class="col-sm-offset-9 col-sm-3">
                                                        {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>


                                </div>

                                {!! Form::close() !!}


                            </div>

                        </div>
                    </div>
                </div>

            </div>





        </div>
    </div>
@endsection