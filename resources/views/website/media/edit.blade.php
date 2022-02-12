@extends('common.layouts.main')

@section('title', trans('general.media').'  '.trans('website.pages_title'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.media') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.media') }}</a></li>
                        <li class="active">{{ trans('media.editmedia') }}</li>
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
                        <h3 class="box-title m-b-0">{{ trans('media.media') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('media.editmedia') }}</p>
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


                                {!! Form::model($media, [
                                    'method' => 'PATCH',
                                    'url' => ['/website/media', $media->id],
                                    'class' => 'form-horizontal'
                                ]) !!}







                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">{{ trans('media.editmedia') }}</span>
                                    </div>

                                    <div class="panel-body">




                                        

        <div class="form-group {{ $errors->has("title_en") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("title_en", trans("media.title_en"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("title_en", null, ["class" => "form-control","placeholder"=> trans("media.title_en")]) !!}
    {!! $errors->first("title_en", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("title_ar") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("title_ar", trans("media.title_ar"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("title_ar", null, ["class" => "form-control","placeholder"=> trans("media.title_ar")]) !!}
    {!! $errors->first("title_ar", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("img") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("img", trans("media.img"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("img", null, ["class" => "form-control","placeholder"=> trans("media.img")]) !!}
    {!! $errors->first("img", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("link") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("link", trans("media.link"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("link", null, ["class" => "form-control","placeholder"=> trans("media.link")]) !!}
    {!! $errors->first("link", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("description_en") ? "has-error" : ""}}  col-xs-12">
{!! Form::label("description_en", trans("media.description_en"), ["class" => "col-sm-12"]) !!}
<div class="col-sm-12">
    {!! Form::textarea("description_en", null, ["class" => "form-control","placeholder"=> trans("media.description_en")]) !!}
    {!! $errors->first("description_en", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("description_ar") ? "has-error" : ""}}  col-xs-12">
{!! Form::label("description_ar", trans("media.description_ar"), ["class" => "col-sm-12"]) !!}
<div class="col-sm-12">
    {!! Form::textarea("description_ar", null, ["class" => "form-control","placeholder"=> trans("media.description_ar")]) !!}
    {!! $errors->first("description_ar", "<p class='help-block'>:message</p>") !!}
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