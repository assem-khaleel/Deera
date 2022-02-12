@extends('common.layouts.main')

@section('title', trans('general.knet').'  '.trans('website.pages_title'))
@section('content')


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
                        <li class="active">{{ trans('knet.editknet') }}</li>
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
                        <h3 class="box-title m-b-0">{{ trans('knet.knet') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('knet.editknet') }}</p>
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


                                {!! Form::model($knet, [
                                    'method' => 'PATCH',
                                    'url' => ['/website/knet', $knet->id],
                                    'class' => 'form-horizontal'
                                ]) !!}







                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">{{ trans('knet.editknet') }}</span>
                                    </div>

                                    <div class="panel-body">




                                        

        <div class="form-group {{ $errors->has("payment_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("payment_id", trans("knet.payment_id"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("payment_id", null, ["class" => "form-control","placeholder"=> trans("knet.payment_id")]) !!}
    {!! $errors->first("payment_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("users_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("users_id", trans("knet.users_id"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("users_id", null, ["class" => "form-control","placeholder"=> trans("knet.users_id")]) !!}
    {!! $errors->first("users_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("order_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("order_id", trans("knet.order_id"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("order_id", null, ["class" => "form-control","placeholder"=> trans("knet.order_id")]) !!}
    {!! $errors->first("order_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("PaymentID") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("PaymentID", trans("knet.PaymentID"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("PaymentID", null, ["class" => "form-control","placeholder"=> trans("knet.PaymentID")]) !!}
    {!! $errors->first("PaymentID", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("Result") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("Result", trans("knet.Result"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("Result", null, ["class" => "form-control","placeholder"=> trans("knet.Result")]) !!}
    {!! $errors->first("Result", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("PostDate") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("PostDate", trans("knet.PostDate"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("PostDate", null, ["class" => "form-control","placeholder"=> trans("knet.PostDate")]) !!}
    {!! $errors->first("PostDate", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("TranID") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("TranID", trans("knet.TranID"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("TranID", null, ["class" => "form-control","placeholder"=> trans("knet.TranID")]) !!}
    {!! $errors->first("TranID", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("Auth") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("Auth", trans("knet.Auth"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("Auth", null, ["class" => "form-control","placeholder"=> trans("knet.Auth")]) !!}
    {!! $errors->first("Auth", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("Ref") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("Ref", trans("knet.Ref"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("Ref", null, ["class" => "form-control","placeholder"=> trans("knet.Ref")]) !!}
    {!! $errors->first("Ref", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("TrackID") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("TrackID", trans("knet.TrackID"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("TrackID", null, ["class" => "form-control","placeholder"=> trans("knet.TrackID")]) !!}
    {!! $errors->first("TrackID", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("UDF1") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("UDF1", trans("knet.UDF1"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("UDF1", null, ["class" => "form-control","placeholder"=> trans("knet.UDF1")]) !!}
    {!! $errors->first("UDF1", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("UDF2") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("UDF2", trans("knet.UDF2"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("UDF2", null, ["class" => "form-control","placeholder"=> trans("knet.UDF2")]) !!}
    {!! $errors->first("UDF2", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("UDF3") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("UDF3", trans("knet.UDF3"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("UDF3", null, ["class" => "form-control","placeholder"=> trans("knet.UDF3")]) !!}
    {!! $errors->first("UDF3", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("UDF4") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("UDF4", trans("knet.UDF4"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("UDF4", null, ["class" => "form-control","placeholder"=> trans("knet.UDF4")]) !!}
    {!! $errors->first("UDF4", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("UDF5") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("UDF5", trans("knet.UDF5"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("UDF5", null, ["class" => "form-control","placeholder"=> trans("knet.UDF5")]) !!}
    {!! $errors->first("UDF5", "<p class='help-block'>:message</p>") !!}
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