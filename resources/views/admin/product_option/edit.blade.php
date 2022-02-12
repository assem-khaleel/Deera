@extends('common.layouts.main')

@section('title', trans('general.product_option'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.product_option') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.product_option') }}</a></li>
                        <li class="active">{{ trans('product_option.editproduct_option') }}</li>
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
                        <h3 class="box-title m-b-0">{{ trans('product_option.product_option') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('product_option.editproduct_option') }}</p>
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


                                {!! Form::model($product_option, [
                                    'method' => 'PATCH',
                                    'url' => ['/admin/product_option', $product_option->id],
                                    'class' => 'form-horizontal'
                                ]) !!}







                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">{{ trans('product_option.editproduct_option') }}</span>
                                    </div>

                                    <div class="panel-body">




                                        

        <div class="form-group {{ $errors->has("coffee_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("coffee_id", trans("product_option.coffee_id"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("coffee_id", null, ["class" => "form-control","placeholder"=> trans("product_option.coffee_id")]) !!}
    {!! $errors->first("coffee_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("option") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("option", trans("product_option.option"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("option",config('array.product_option_option'), null, ["class" => "form-control","placeholder"=> trans("product_option.option")]) !!}
    {!! $errors->first("option", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("name_en") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("name_en", trans("product_option.name_en"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("name_en", null, ["class" => "form-control","placeholder"=> trans("product_option.name_en")]) !!}
    {!! $errors->first("name_en", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("name_ar") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("name_ar", trans("product_option.name_ar"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("name_ar", null, ["class" => "form-control","placeholder"=> trans("product_option.name_ar")]) !!}
    {!! $errors->first("name_ar", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("price") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("price", trans("product_option.price"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("price", null, ["class" => "form-control","placeholder"=> trans("product_option.price")]) !!}
    {!! $errors->first("price", "<p class='help-block'>:message</p>") !!}
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