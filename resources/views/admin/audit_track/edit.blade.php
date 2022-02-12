@extends('common.layouts.main')

@section('title', trans('general.audit_track'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.audit_track') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.audit_track') }}</a></li>
                        <li class="active">{{ trans('audit_track.editaudit_track') }}</li>
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
                        <h3 class="box-title m-b-0">{{ trans('audit_track.audit_track') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('audit_track.editaudit_track') }}</p>
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


                                {!! Form::model($audit_track, [
                                    'method' => 'PATCH',
                                    'url' => ['/admin/audit_track', $audit_track->id],
                                    'class' => 'form-horizontal'
                                ]) !!}







                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">{{ trans('audit_track.editaudit_track') }}</span>
                                    </div>

                                    <div class="panel-body">







                                        <div class="form-group {{ $errors->has("users_id") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("users_id", trans("audit_track.users_id"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("users_id",$usersList, null, ["class" => "form-control","placeholder"=> trans("audit_track.users_id")]) !!}
                                                {!! $errors->first("users_id", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>




                                        <div class="form-group {{ $errors->has("action") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("action", trans("audit_track.action"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("action", null, ["class" => "form-control","placeholder"=> trans("audit_track.action")]) !!}
    {!! $errors->first("action", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("users_name") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("users_name", trans("audit_track.users_name"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("users_name", null, ["class" => "form-control","placeholder"=> trans("audit_track.users_name")]) !!}
    {!! $errors->first("users_name", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("users_role") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("users_role", trans("audit_track.users_role"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("users_role", null, ["class" => "form-control","placeholder"=> trans("audit_track.users_role")]) !!}
    {!! $errors->first("users_role", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("description") ? "has-error" : ""}}  col-xs-12">
{!! Form::label("description", trans("audit_track.description"), ["class" => "col-sm-12"]) !!}
<div class="col-sm-12">
    {!! Form::textarea("description", null, ["class" => "form-control","placeholder"=> trans("audit_track.description")]) !!}
    {!! $errors->first("description", "<p class='help-block'>:message</p>") !!}
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