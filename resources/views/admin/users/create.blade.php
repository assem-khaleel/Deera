@extends('common.layouts.main')

@section('title', trans('general.users'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.users') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.users') }}</a></li>
                        <li class="active">{{ trans('users.usersCreate') }}</li>
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
                        <h3 class="box-title m-b-0">{{ trans('users.users') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('users.addusers') }}</p>
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

                                {!! Form::model($request,['url' => '/admin/users', 'class' => 'form-horizontal']) !!}





                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">{{ trans('users.addusers') }}</span>
                                    </div>

                                    <div class="panel-body">



                                        

        <div class="form-group {{ $errors->has("first_name") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("first_name", trans("users.first_name"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("first_name", null, ["class" => "form-control","placeholder"=> trans("users.first_name")]) !!}
    {!! $errors->first("first_name", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("last_name") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("last_name", trans("users.last_name"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("last_name", null, ["class" => "form-control","placeholder"=> trans("users.last_name")]) !!}
    {!! $errors->first("last_name", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("email") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("email", trans("users.email"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("email", null, ["class" => "form-control","placeholder"=> trans("users.email")]) !!}
    {!! $errors->first("email", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("password") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("password", trans("users.password"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("password", null, ["class" => "form-control","placeholder"=> trans("users.password")]) !!}
    {!! $errors->first("password", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("mobile") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("mobile", trans("users.mobile"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("mobile", null, ["class" => "form-control","placeholder"=> trans("users.mobile")]) !!}
    {!! $errors->first("mobile", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("mobile_company") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("mobile_company", trans("users.mobile_company"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("mobile_company",config('array.users_mobile_company'), null, ["class" => "form-control","placeholder"=> trans("users.mobile_company")]) !!}
    {!! $errors->first("mobile_company", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("phone") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("phone", trans("users.phone"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("phone", null, ["class" => "form-control","placeholder"=> trans("users.phone")]) !!}
    {!! $errors->first("phone", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("gender") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("gender", trans("users.gender"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("gender",config('array.users_gender'), null, ["class" => "form-control","placeholder"=> trans("users.gender")]) !!}
    {!! $errors->first("gender", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("occupation") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("occupation", trans("users.occupation"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("occupation",config('array.users_occupation'), null, ["class" => "form-control","placeholder"=> trans("users.occupation")]) !!}
    {!! $errors->first("occupation", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("session_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("session_id", trans("users.session_id"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("session_id", null, ["class" => "form-control","placeholder"=> trans("users.session_id")]) !!}
    {!! $errors->first("session_id", "<p class='help-block'>:message</p>") !!}
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