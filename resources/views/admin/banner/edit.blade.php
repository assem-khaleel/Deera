@extends('common.layouts.main')

@section('title', trans('general.banner'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.banner') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.banner') }}</a></li>
                        <li class="active">{{ trans('banner.editbanner') }}</li>
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
                        <h3 class="box-title m-b-0">{{ trans('banner.banner') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('banner.editbanner') }}</p>
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


                                {!! Form::model($banner, [
                                    'method' => 'PATCH',
                                    'url' => ['/admin/banner', $banner->id],
                                    'class' => 'form-horizontal'
                                ]) !!}







                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">{{ trans('banner.editbanner') }}</span>
                                    </div>

                                    <div class="panel-body">




                                        

        <div class="form-group {{ $errors->has("img") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("img", trans("banner.img"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("img", null, ["class" => "form-control uploadFile","placeholder"=> trans("banner.img")]) !!}
    {!! $errors->first("img", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("order") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("order", trans("banner.order"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("order", null, ["class" => "form-control","placeholder"=> trans("banner.order")]) !!}
    {!! $errors->first("order", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("status") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("status", trans("banner.status"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("status",config('array.banner_status'), null, ["class" => "form-control","placeholder"=> trans("banner.status")]) !!}
    {!! $errors->first("status", "<p class='help-block'>:message</p>") !!}
</div>
</div>


                                        <div class="form-group {{ $errors->has("type") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("type", trans("banner.type"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("type",config('array.banner_type'), null, ["class" => "form-control","placeholder"=> trans("banner.type")]) !!}
                                                {!! $errors->first("type", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>



                                        <div class="form-group {{ $errors->has("url") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("url", trans("banner.url"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::text("url", null, ["class" => "form-control","placeholder"=> trans("banner.url")]) !!}
                                                {!! $errors->first("url", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>
                                        <div class="form-group {{ $errors->has("default") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("default", trans("banner.default"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::checkbox("default",1, null, ["class" => "form-control","placeholder"=> trans("banner.default")]) !!}
                                                {!! $errors->first("default", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>



                                        <div class="form-group {{ $errors->has("available_from") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("available_from", trans("banner.available_from"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::text("available_from",(!isset($banner->available_from))? gmdate('Y-m-d'): null, ["class" => "form-control mydatepicker","placeholder"=> trans("banner.available_from")]) !!}
                                                {!! $errors->first("available_from", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>

                                        <div class="form-group {{ $errors->has("available_to") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("available_to", trans("banner.available_to"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::text("available_to",(!isset($banner->available_to))? date('Y-m-d', strtotime('+2 years')): null, ["class" => "form-control mydatepicker","placeholder"=> trans("banner.available_to")]) !!}
                                                {!! $errors->first("available_to", "<p class='help-block'>:message</p>") !!}
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