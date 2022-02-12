@extends('common.layouts.main')

@section('title', trans('general.catering') .' '.trans('website.pages_title'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.catering') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.catering') }}</a></li>
                        <li class="active">{{ trans('catering.editcatering') }}</li>
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
                        <h3 class="box-title m-b-0">{{ trans('catering.catering') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('catering.editcatering') }}</p>
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


                                {!! Form::model($catering, [
                                    'method' => 'PATCH',
                                    'url' => ['/website/catering', $catering->id],
                                    'class' => 'form-horizontal'
                                ]) !!}







                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">{{ trans('catering.editcatering') }}</span>
                                    </div>

                                    <div class="panel-body">




                                        

        <div class="form-group {{ $errors->has("name") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("name", trans("catering.name"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("name", null, ["class" => "form-control","placeholder"=> trans("catering.name")]) !!}
    {!! $errors->first("name", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("email") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("email", trans("catering.email"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("email", null, ["class" => "form-control","placeholder"=> trans("catering.email")]) !!}
    {!! $errors->first("email", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("phone") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("phone", trans("catering.phone"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("phone", null, ["class" => "form-control","placeholder"=> trans("catering.phone")]) !!}
    {!! $errors->first("phone", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("shop_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("shop_id", trans("catering.shop_id"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("shop_id", null, ["class" => "form-control","placeholder"=> trans("catering.shop_id")]) !!}
    {!! $errors->first("shop_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("people_number") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("people_number", trans("catering.people_number"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("people_number", null, ["class" => "form-control","placeholder"=> trans("catering.people_number")]) !!}
    {!! $errors->first("people_number", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("book_date") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("book_date", trans("catering.book_date"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("book_date", null, ["class" => "form-control","placeholder"=> trans("catering.book_date")]) !!}
    {!! $errors->first("book_date", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("book_time") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("book_time", trans("catering.book_time"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("book_time", null, ["class" => "form-control","placeholder"=> trans("catering.book_time")]) !!}
    {!! $errors->first("book_time", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("location") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("location", trans("catering.location"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("location", null, ["class" => "form-control","placeholder"=> trans("catering.location")]) !!}
    {!! $errors->first("location", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("request") ? "has-error" : ""}}  col-xs-12">
{!! Form::label("request", trans("catering.request"), ["class" => "col-sm-12"]) !!}
<div class="col-sm-12">
    {!! Form::textarea("request", null, ["class" => "form-control","placeholder"=> trans("catering.request")]) !!}
    {!! $errors->first("request", "<p class='help-block'>:message</p>") !!}
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