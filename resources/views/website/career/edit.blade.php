@extends('common.layouts.main')

@section('title', trans('general.career')  .' '.trans('website.pages_title'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.career') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.career') }}</a></li>
                        <li class="active">{{ trans('career.editcareer') }}</li>
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
                        <h3 class="box-title m-b-0">{{ trans('career.career') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('career.editcareer') }}</p>
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


                                {!! Form::model($career, [
                                    'method' => 'PATCH',
                                    'url' => ['/website/career', $career->id],
                                    'class' => 'form-horizontal'
                                ]) !!}







                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">{{ trans('career.editcareer') }}</span>
                                    </div>

                                    <div class="panel-body">




                                        

        <div class="form-group {{ $errors->has("first_name") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("first_name", trans("career.first_name"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("first_name", null, ["class" => "form-control","placeholder"=> trans("career.first_name")]) !!}
    {!! $errors->first("first_name", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("last_name") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("last_name", trans("career.last_name"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("last_name", null, ["class" => "form-control","placeholder"=> trans("career.last_name")]) !!}
    {!! $errors->first("last_name", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("email") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("email", trans("career.email"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("email", null, ["class" => "form-control","placeholder"=> trans("career.email")]) !!}
    {!! $errors->first("email", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("phone") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("phone", trans("career.phone"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("phone", null, ["class" => "form-control","placeholder"=> trans("career.phone")]) !!}
    {!! $errors->first("phone", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("position") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("position", trans("career.position"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("position", null, ["class" => "form-control","placeholder"=> trans("career.position")]) !!}
    {!! $errors->first("position", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("file") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("file", trans("career.file"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("file", null, ["class" => "form-control","placeholder"=> trans("career.file")]) !!}
    {!! $errors->first("file", "<p class='help-block'>:message</p>") !!}
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