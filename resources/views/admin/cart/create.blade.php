@extends('common.layouts.main')

@section('title', trans('general.cart'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.cart') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.cart') }}</a></li>
                        <li class="active">{{ trans('cart.cartCreate') }}</li>
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
                        <h3 class="box-title m-b-0">{{ trans('cart.cart') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('cart.addcart') }}</p>
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

                                {!! Form::model($request,['url' => '/admin/cart', 'class' => 'form-horizontal']) !!}





                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">{{ trans('cart.addcart') }}</span>
                                    </div>

                                    <div class="panel-body">






                                        <div class="form-group {{ $errors->has("users_id") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("users_id", trans("general.users"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("users_id",$usersList, null, ["class" => "form-control","placeholder"=> trans("audit_track.users_id")]) !!}
                                                {!! $errors->first("users_id", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>




                                        <div class="form-group {{ $errors->has("shop_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("shop_id", trans("general.shop"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("shop_id",$shopList, null, ["class" => "form-control","placeholder"=> trans("cart.shop_id")]) !!}
    {!! $errors->first("shop_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("coffee_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("coffee_id", trans("general.coffee"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("coffee_id",$coffeeList, null, ["class" => "form-control","placeholder"=> trans("cart.coffee_id")]) !!}
    {!! $errors->first("coffee_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("order_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("order_id", trans("general.order"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("order_id",$orderList, null, ["class" => "form-control","placeholder"=> trans("cart.order_id")]) !!}
    {!! $errors->first("order_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("deliver_charge") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("deliver_charge", trans("cart.deliver_charge"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("deliver_charge", null, ["class" => "form-control","placeholder"=> trans("cart.deliver_charge")]) !!}
    {!! $errors->first("deliver_charge", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("quantity") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("quantity", trans("cart.quantity"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("quantity", null, ["class" => "form-control","placeholder"=> trans("cart.quantity")]) !!}
    {!! $errors->first("quantity", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("unit_price") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("unit_price", trans("cart.unit_price"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("unit_price", null, ["class" => "form-control","placeholder"=> trans("cart.unit_price")]) !!}
    {!! $errors->first("unit_price", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("total_price") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("total_price", trans("cart.total_price"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("total_price", null, ["class" => "form-control","placeholder"=> trans("cart.total_price")]) !!}
    {!! $errors->first("total_price", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("special_request") ? "has-error" : ""}}  col-xs-12">
{!! Form::label("special_request", trans("cart.special_request"), ["class" => "col-sm-12"]) !!}
<div class="col-sm-12">
    {!! Form::textarea("special_request", null, ["class" => "form-control","placeholder"=> trans("cart.special_request")]) !!}
    {!! $errors->first("special_request", "<p class='help-block'>:message</p>") !!}
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