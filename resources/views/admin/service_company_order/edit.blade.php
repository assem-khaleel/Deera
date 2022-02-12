@extends('common.layouts.main')

@section('title', trans('general.service_company_order'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.service_company_order') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.service_company_order') }}</a></li>
                        <li class="active">{{ trans('service_company_order.editservice_company_order') }}</li>
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
                        <h3 class="box-title m-b-0">{{ trans('service_company_order.service_company_order') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('service_company_order.editservice_company_order') }}</p>
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


                                {!! Form::model($service_company_order, [
                                    'method' => 'PATCH',
                                    'url' => ['/admin/service_company_order', $service_company_order->id],
                                    'class' => 'form-horizontal'
                                ]) !!}







                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">{{ trans('service_company_order.editservice_company_order') }}</span>
                                    </div>

                                    <div class="panel-body">






                                        <div class="form-group {{ $errors->has("users_id") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("users_id", trans("general.driver"), ["class" => "col-sm-4 text-left"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("users_id",[''=>'Select Driver']+$usersList, null, ["class" => "form-control","placeholder"=> trans("shop_rate.users_id")]) !!}
                                                {!! $errors->first("users_id", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>



                                        <div class="form-group {{ $errors->has("service_company_id") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("service_company_id", trans("general.service_company"), ["class" => "col-sm-4 "]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("service_company_id",$serviceCompanyList, null, ["class" => "form-control","placeholder"=> trans("service_boy.service_company_id")]) !!}
                                                {!! $errors->first("service_company_id", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>



                                        <div class="form-group {{ $errors->has("service_boy_id") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("service_boy_id", trans("general.service_boy"), ["class" => "col-sm-4  "]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("service_boy_id",[''=>'Assign to Service boy']+$serviceBoyList, null, ["class" => "form-control","placeholder"=> trans("general.service_boy")]) !!}
                                                {!! $errors->first("service_boy_id", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>

                                        <div class=" col-xs-12" style="overflow: auto;float:left;  height: 100px; border:1px solid #ccc;padding-top:10px; margin:10px;">

                                            @foreach($serviceList as $service_id=>$service_name)
                                                <label style="display:block;width:100%;padding:5px;border:1px solid #cccccc;">
                                                    {!!  Form::checkbox('service['.$service_id.']',1,(isset($request->service[$service_id])? true:null),[]) !!} - {{$service_name}}
                                                </label>
                                            @endforeach
                                        </div>


                                        <div class="form-group {{ $errors->has("description") ? "has-error" : ""}}  col-xs-12">
                                            {!! Form::label("description", trans("service_company_order.description"), ["class" => "col-sm-12"]) !!}
                                            <div class="col-sm-12">
                                                {!! Form::textarea("description", null, ["class" => "form-control","placeholder"=> trans("service_company_order.description")]) !!}
                                                {!! $errors->first("description", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>



                                        <div class="form-group {{ $errors->has("status") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("status", trans("service_company_order.status"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("status",config('array.service_company_order_status'), null, ["class" => "form-control","placeholder"=> trans("service_company_order.status")]) !!}
                                                {!! $errors->first("status", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>



                                        <div class="form-group {{ $errors->has("notification") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("notification", trans("service_company_order.notification"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("notification",config('array.service_company_order_notification'), null, ["class" => "form-control","placeholder"=> trans("service_company_order.notification")]) !!}
                                                {!! $errors->first("notification", "<p class='help-block'>:message</p>") !!}
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