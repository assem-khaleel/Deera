@extends('common.layouts.main')

@section('title', trans('general.voucher'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.voucher') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.voucher') }}</a></li>
                        <li class="active">{{ trans('voucher.voucherCreate') }}</li>
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
                        <h3 class="box-title m-b-0">{{ trans('voucher.voucher') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('voucher.addvoucher') }}</p>
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

                                {!! Form::model($request,['url' => '/admin/voucher', 'class' => 'form-horizontal']) !!}





                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">{{ trans('voucher.addvoucher') }}</span>
                                    </div>

                                    <div class="panel-body">



                                        

        <div class="form-group {{ $errors->has("code") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("code", trans("voucher.code"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("code", null, ["class" => "form-control","placeholder"=> trans("voucher.code")]) !!}
    {!! $errors->first("code", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("type") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("type", trans("voucher.type"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("type",config('array.voucher_type'), null, ["class" => "form-control","placeholder"=> trans("voucher.type")]) !!}
    {!! $errors->first("type", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        {{--<div class="form-group {{ $errors->has("amount") ? "has-error" : ""}}  col-xs-6">--}}
{{--{!! Form::label("amount", trans("voucher.amount"), ["class" => "col-sm-4 control-label"]) !!}--}}
{{--<div class="col-sm-8">--}}
    {{--{!! Form::text("amount", null, ["class" => "form-control","placeholder"=> trans("voucher.amount")]) !!}--}}
    {{--{!! $errors->first("amount", "<p class='help-block'>:message</p>") !!}--}}
{{--</div>--}}
{{--</div>--}}

    

        <div class="form-group {{ $errors->has("current_amount") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("current_amount", trans("voucher.current_amount"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("current_amount", null, ["class" => "form-control","placeholder"=> trans("voucher.current_amount")]) !!}
    {!! $errors->first("current_amount", "<p class='help-block'>:message</p>") !!}
</div>
</div>

                                        <div class="form-group {{ $errors->has("total_number") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("total_number", trans("voucher.total_number"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::text("total_number", null, ["class" => "form-control","placeholder"=> trans("voucher.total_number")]) !!}
                                                {!! $errors->first("total_number", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>

                                        <div class="form-group {{ $errors->has("used_number") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("used_number", trans("voucher.used_number"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::text("used_number", null, ["class" => "form-control","placeholder"=> trans("voucher.used_number")]) !!}
                                                {!! $errors->first("used_number", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>




                                        <div class="form-group {{ $errors->has("status") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("status", trans("voucher.status"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("status",config('array.voucher_status'), null, ["class" => "form-control","placeholder"=> trans("voucher.status")]) !!}
    {!! $errors->first("status", "<p class='help-block'>:message</p>") !!}
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