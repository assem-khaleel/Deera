@extends('common.layouts.main')

@section('title', trans('general.blogger'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.blogger') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.blogger') }}</a></li>
                        <li class="active">{{ trans('blogger.bloggerCreate') }}</li>
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
                        <h3 class="box-title m-b-0">{{ trans('blogger.blogger') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('blogger.addblogger') }}</p>
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

                                {!! Form::model($request,['url' => '/admin/blogger', 'class' => 'form-horizontal']) !!}





                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">{{ trans('blogger.addblogger') }}</span>
                                    </div>

                                    <div class="panel-body">



                                        

        <div class="form-group {{ $errors->has("name") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("name", trans("blogger.name"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("name", null, ["class" => "form-control","placeholder"=> trans("blogger.name")]) !!}
    {!! $errors->first("name", "<p class='help-block'>:message</p>") !!}
</div>
</div>



  <div class="form-group {{ $errors->has("facebook_account") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("facebook_account", trans("blogger.facebook_account"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("facebook_account", null, ["class" => "form-control","placeholder"=> trans("blogger.facebook_account")]) !!}
    {!! $errors->first("facebook_account", "<p class='help-block'>:message</p>") !!}
</div>
</div>


  <div class="form-group {{ $errors->has("twitter_account") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("twitter_account", trans("blogger.twitter_account"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("twitter_account", null, ["class" => "form-control","placeholder"=> trans("blogger.twitter_account")]) !!}
    {!! $errors->first("twitter_account", "<p class='help-block'>:message</p>") !!}
</div>
</div>


  <div class="form-group {{ $errors->has("linkedin_account") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("linkedin_account", trans("blogger.linkedin_account"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("linkedin_account", null, ["class" => "form-control","placeholder"=> trans("blogger.linkedin_account")]) !!}
    {!! $errors->first("linkedin_account", "<p class='help-block'>:message</p>") !!}
</div>
</div>





    

        <div class="form-group {{ $errors->has("phone") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("phone", trans("blogger.phone"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("phone", null, ["class" => "form-control","placeholder"=> trans("blogger.phone")]) !!}
    {!! $errors->first("phone", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("email") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("email", trans("blogger.email"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("email", null, ["class" => "form-control","placeholder"=> trans("blogger.email")]) !!}
    {!! $errors->first("email", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("status") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("status", trans("blogger.status"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("status",config('array.blogger_status'), null, ["class" => "form-control","placeholder"=> trans("blogger.status")]) !!}
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