@extends('common.layouts.main')

@section('title', trans('general.shop_cuisine'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.shop_cuisine') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.shop_cuisine') }}</a></li>
                        <li class="active">{{ trans('shop_cuisine.editshop_cuisine') }}</li>
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
                        <h3 class="box-title m-b-0">{{ trans('shop_cuisine.shop_cuisine') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('shop_cuisine.editshop_cuisine') }}</p>
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


                                {!! Form::model($shop_cuisine, [
                                    'method' => 'PATCH',
                                    'url' => ['/admin/shop_cuisine', $shop_cuisine->id],
                                    'class' => 'form-horizontal'
                                ]) !!}







                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">{{ trans('shop_cuisine.editshop_cuisine') }}</span>
                                    </div>

                                    <div class="panel-body">







                                        <div class="form-group {{ $errors->has("shop_id") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("shop_id", trans("general.shop"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("shop_id",$shopList, null, ["class" => "form-control","placeholder"=> trans("shop_cuisine.shop_id")]) !!}
                                                {!! $errors->first("shop_id", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>



                                        <div class="form-group {{ $errors->has("cuisine_id") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("cuisine_id", trans("general.cuisine"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("cuisine_id",$cuisineList, null, ["class" => "form-control","placeholder"=> trans("shop_cuisine.cuisine_id")]) !!}
                                                {!! $errors->first("cuisine_id", "<p class='help-block'>:message</p>") !!}
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