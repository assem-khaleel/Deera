@extends('common.layouts.main')

@section('title', trans('general.operation_hour'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.operation_hour') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.operation_hour') }}</a></li>
                        <li class="active">{{ trans('operation_hour.operation_hourCreate') }}</li>
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
                        <h3 class="box-title m-b-0">{{ trans('operation_hour.operation_hour') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('operation_hour.addoperation_hour') }}</p>
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
$request->merge(['shift1_from'=>'08:00:00','shift1_to'=>'13:00:00','shift2_from'=>'13:00:00','shift2_to'=>'23:00:00']);
/*--}}
                                {!! Form::model($request,['url' => '/admin/operation_hour', 'class' => 'form-horizontal']) !!}





                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">{{ trans('operation_hour.addoperation_hour') }}</span>
                                    </div>

                                    <div class="panel-body">



                                        

        <div class="form-group {{ $errors->has("shop_area_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("shop_area_id", trans("general.shop_area"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("shop_area_id",$shopAreaList, null, ["class" => "form-control","placeholder"=> trans("operation_hour.shop_area_id")]) !!}
    {!! $errors->first("shop_area_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>




                                        <div class="form-group {{ $errors->has("shop_id") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("shop_id", trans("general.shop"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("shop_id",$shopList, null, ["class" => "form-control","placeholder"=> trans("coffee_rate.shop_id")]) !!}
                                                {!! $errors->first("shop_id", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>

    

        <div class="form-group {{ $errors->has("day") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("day", trans("operation_hour.day"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("day",config('array.days'), null, ["class" => "form-control","placeholder"=> trans("operation_hour.day")]) !!}
    {!! $errors->first("day", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("shift1_from") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("shift1_from", trans("operation_hour.shift1_from"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8  input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
    {!! Form::text("shift1_from", null, ["class" => "form-control","placeholder"=> trans("operation_hour.shift1_from")]) !!}
    {!! $errors->first("shift1_from", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("shift1_to") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("shift1_to", trans("operation_hour.shift1_to"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8  input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
    {!! Form::text("shift1_to", null, ["class" => "form-control","placeholder"=> trans("operation_hour.shift1_to")]) !!}
    {!! $errors->first("shift1_to", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("shift2_from") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("shift2_from", trans("operation_hour.shift2_from"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8  input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
    {!! Form::text("shift2_from", null, ["class" => "form-control","placeholder"=> trans("operation_hour.shift2_from")]) !!}
    {!! $errors->first("shift2_from", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("shift2_to") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("shift2_to", trans("operation_hour.shift2_to"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8 input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
    {!! Form::text("shift2_to", null, ["class" => "form-control","placeholder"=> trans("operation_hour.shift2_to")]) !!}
    {!! $errors->first("shift2_to", "<p class='help-block'>:message</p>") !!}
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