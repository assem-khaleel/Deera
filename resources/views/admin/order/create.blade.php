@extends('common.layouts.main')

@section('title', trans('general.order'))
@section('content')

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
                        <li class="active">{{ trans('order.orderCreate') }}</li>
                    </ol>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <form role="search" method="get" action="" class="app-search hidden-xs pull-right">
                        <input type="text" placeholder=" {{ trans('general.search') }} ..." class="form-control">
                        <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
                    </form>
                </div>
            </div>









            <div class="row">


                <div class="col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">{{ trans('order.order') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('order.addorder') }}</p>
                        <!-- Nav tabs -->

                        @include ('common/partials/messages')
                        <ul class="nav nav-tabs" role="tablist">


                            <li role="presentation" class="active">
                                <a href="#idetail" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-home"></i>{{trans('general.basic')}}</span></a>
                            </li>



                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">


                            <div role="tabpanel" class="tab-pane active" id="idetail">
{{--*/
$request->merge(['deliver_date'=>\Carbon\Carbon::now()->format('Y-m-d'),'deliver_time'=>\Carbon\Carbon::now()->format('H:i')]);
/*--}}
                                {!! Form::model($request,['url' => '/admin/order', 'class' => 'form-horizontal']) !!}





                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">{{ trans('order.addorder') }}</span>
                                    </div>

                                    <div class="panel-body">



                                        

        <div class="form-group {{ $errors->has("users_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("users_id", trans("order.users_id"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("users_id",$usersList, null, ["class" => "form-control","placeholder"=> trans("order.users_id")]) !!}
    {!! $errors->first("users_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

                                        <div class="form-group {{ $errors->has("shop_id") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("shop_id", trans("general.shop"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("shop_id",$shopList, null, ["class" => "form-control","placeholder"=> trans("order.users_id")]) !!}
                                                {!! $errors->first("shop_id", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>

    

        <div class="form-group {{ $errors->has("area_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("area_id", trans("general.area"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("area_id",$areaList, null, ["class" => "form-control","placeholder"=> trans("order.area_id")]) !!}
    {!! $errors->first("area_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    


    

        <div class="form-group {{ $errors->has("address_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("address_id", trans("general.address"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("address_id",$addressList, null, ["class" => "form-control","placeholder"=> trans("order.address_id")]) !!}
    {!! $errors->first("address_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

<div class="clearfix"></div>

    

        <div class="form-group {{ $errors->has("deliver_time") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("deliver_time", trans("order.deliver_time"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8  input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
    {!! Form::text("deliver_time", null, ["class" => "form-control","placeholder"=> trans("order.deliver_time")]) !!}
    {!! $errors->first("deliver_time", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("deliver_date") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("deliver_date", trans("order.deliver_date"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("deliver_date", null, ["class" => "form-control mydatepicker","placeholder"=> trans("order.deliver_date")]) !!}
    {!! $errors->first("deliver_date", "<p class='help-block'>:message</p>") !!}
</div>
</div>


                                        <div class="clearfix"></div>

    

        <div class="form-group {{ $errors->has("deliver_charge") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("deliver_charge", trans("order.deliver_charge"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("deliver_charge", null, ["class" => "form-control","placeholder"=> trans("order.deliver_charge")]) !!}
    {!! $errors->first("deliver_charge", "<p class='help-block'>:message</p>") !!}
</div>
</div>


                                        <div class="form-group {{ $errors->has("deera_charge") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("deera_charge", trans("order.deera_charge"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::text("deera_charge", null, ["class" => "form-control","placeholder"=> trans("order.deera_charge")]) !!}
                                                {!! $errors->first("deera_charge", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>

                                        <div class="form-group {{ $errors->has("extra_charge") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("extra_charge", trans("order.extra_charge"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::text("extra_charge", null, ["class" => "form-control","placeholder"=> trans("order.extra_charge")]) !!}
                                                {!! $errors->first("extra_charge", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>

                                        <div class="form-group {{ $errors->has("sub_total") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("sub_total", trans("order.sub_total"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::text("sub_total", null, ["class" => "form-control","placeholder"=> trans("order.sub_total")]) !!}
                                                {!! $errors->first("sub_total", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>
                                        <div class="form-group {{ $errors->has("total") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("total", trans("order.total"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::text("total", null, ["class" => "form-control","placeholder"=> trans("order.total")]) !!}
                                                {!! $errors->first("total", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>

        <div class="form-group {{ $errors->has("rate") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("rate", trans("order.rate"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("rate", null, ["class" => "form-control","placeholder"=> trans("order.rate")]) !!}
    {!! $errors->first("rate", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("point") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("point", trans("order.point"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("point", null, ["class" => "form-control","placeholder"=> trans("order.point")]) !!}
    {!! $errors->first("point", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("status") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("status", trans("order.status"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("status",config('array.order_status'), null, ["class" => "form-control","placeholder"=> trans("order.status")]) !!}
    {!! $errors->first("status", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("notification") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("notification", trans("order.notification"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("notification",config('array.order_notification'), null, ["class" => "form-control","placeholder"=> trans("order.notification")]) !!}
    {!! $errors->first("notification", "<p class='help-block'>:message</p>") !!}
</div>
</div>



                                        <div class="form-group {{ $errors->has("note") ? "has-error" : ""}}  col-xs-12">
                                            {!! Form::label("note", trans("order.note"), ["class" => "col-sm-12"]) !!}
                                            <div class="col-sm-12">
                                                {!! Form::textarea("note", null, ["class" => "form-control","placeholder"=> trans("order.note")]) !!}
                                                {!! $errors->first("note", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>




                                        <div class="form-group">
                                            <div class="col-sm-offset-9 col-sm-3">
                                                {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
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