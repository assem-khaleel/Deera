@extends('common.layouts.main')

@section('title', trans('general.address'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.address') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.address') }}</a></li>
                        <li class="active">{{ trans('address.editaddress') }}</li>
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
                        <h3 class="box-title m-b-0">{{ trans('address.address') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('address.editaddress') }}</p>
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


                                {!! Form::model($address, [
                                    'method' => 'PATCH',
                                    'url' => ['/admin/address', $address->id],
                                    'class' => 'form-horizontal'
                                ]) !!}







                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">{{ trans('address.editaddress') }}</span>
                                    </div>

                                    <div class="panel-body">






                                        <div class="form-group {{ $errors->has("users_id") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("users_id", trans("address.users_id"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("users_id",$usersList, null, ["class" => "form-control","placeholder"=> trans("address.users_id")]) !!}
                                                {!! $errors->first("users_id", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>



                                        <div class="form-group {{ $errors->has("area_id") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("area_id", trans("address.area_id"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("area_id",$areaList, null, ["class" => "form-control","placeholder"=> trans("address.area_id")]) !!}
                                                {!! $errors->first("area_id", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>

    

        <div class="form-group {{ $errors->has("name") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("name", trans("address.name"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("name", null, ["class" => "form-control","placeholder"=> trans("address.name")]) !!}
    {!! $errors->first("name", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("type") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("type", trans("address.type"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("type",config('array.address_type'), null, ["class" => "form-control","placeholder"=> trans("address.type")]) !!}
    {!! $errors->first("type", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("first_name") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("first_name", trans("address.first_name"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("first_name", null, ["class" => "form-control","placeholder"=> trans("address.first_name")]) !!}
    {!! $errors->first("first_name", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("last_name") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("last_name", trans("address.last_name"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("last_name", null, ["class" => "form-control","placeholder"=> trans("address.last_name")]) !!}
    {!! $errors->first("last_name", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("pacl_number") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("pacl_number", trans("address.pacl_number"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("pacl_number", null, ["class" => "form-control","placeholder"=> trans("address.pacl_number")]) !!}
    {!! $errors->first("pacl_number", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("block") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("block", trans("address.block"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("block", null, ["class" => "form-control","placeholder"=> trans("address.block")]) !!}
    {!! $errors->first("block", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("street") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("street", trans("address.street"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("street", null, ["class" => "form-control","placeholder"=> trans("address.street")]) !!}
    {!! $errors->first("street", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("judda") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("judda", trans("address.judda"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("judda", null, ["class" => "form-control","placeholder"=> trans("address.judda")]) !!}
    {!! $errors->first("judda", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("avenue") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("avenue", trans("address.avenue"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("avenue", null, ["class" => "form-control","placeholder"=> trans("address.avenue")]) !!}
    {!! $errors->first("avenue", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("building") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("building", trans("address.building"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("building", null, ["class" => "form-control","placeholder"=> trans("address.building")]) !!}
    {!! $errors->first("building", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("floor") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("floor", trans("address.floor"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("floor", null, ["class" => "form-control","placeholder"=> trans("address.floor")]) !!}
    {!! $errors->first("floor", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("apartment_number") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("apartment_number", trans("address.apartment_number"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("apartment_number", null, ["class" => "form-control","placeholder"=> trans("address.apartment_number")]) !!}
    {!! $errors->first("apartment_number", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("mobile") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("mobile", trans("address.mobile"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("mobile", null, ["class" => "form-control","placeholder"=> trans("address.mobile")]) !!}
    {!! $errors->first("mobile", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("phone") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("phone", trans("address.phone"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("phone", null, ["class" => "form-control","placeholder"=> trans("address.phone")]) !!}
    {!! $errors->first("phone", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("long") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("long", trans("address.long"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("long", null, ["class" => "form-control","placeholder"=> trans("address.long")]) !!}
    {!! $errors->first("long", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("lat") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("lat", trans("address.lat"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("lat", null, ["class" => "form-control","placeholder"=> trans("address.lat")]) !!}
    {!! $errors->first("lat", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("directions") ? "has-error" : ""}}  col-xs-12">
{!! Form::label("directions", trans("address.directions"), ["class" => "col-sm-12"]) !!}
<div class="col-sm-12">
    {!! Form::textarea("directions", null, ["class" => "form-control","placeholder"=> trans("address.directions")]) !!}
    {!! $errors->first("directions", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("default") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("default", trans("address.default"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("default",config('array.address_default'), null, ["class" => "form-control","placeholder"=> trans("address.default")]) !!}
    {!! $errors->first("default", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("notification") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("notification", trans("address.notification"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("notification",config('array.address_notification'), null, ["class" => "form-control","placeholder"=> trans("address.notification")]) !!}
    {!! $errors->first("notification", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

                                        <div class="form-group">
                                            <div class="col-sm-offset-9 col-sm-3">
                                                {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
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