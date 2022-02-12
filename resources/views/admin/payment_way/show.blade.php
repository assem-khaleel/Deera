@extends('common.layouts.main')
@section('title', trans('payment_way.payment_way'))
@section('content')


    {{--*/

    $canEdit=canAccess('admin.payment_way.edit');
    $canDestroy=canAccess('admin.payment_way.destroy');


    /*--}}





    <div id="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                    <div class="col-lg-12">
                        <h4 class="page-title">{{ trans('general.payment_way') }}</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <ol class="breadcrumb pull-left">
                            <li><a href="#">{{ trans('general.payment_way') }}</a></li>
                            <li class="active">{{ trans('general.details') }}</li>
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
                            <h3 class="box-title m-b-0">{{ trans('general.payment_way') }}</h3>
                            <p class="text-muted m-b-40">{{ trans('general.details') }}</p>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">


                                <li role="presentation" class="active">
                                    <a href="#idetail" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-home"></i>{{trans('general.detail')}}</span></a>
                                </li>

                                

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">


                                <div role="tabpanel" class="tab-pane active" id="idetail">


                                    <div class="panel">
                                        <div class="panel-heading">
                                            <span class="panel-title">{{ trans('payment_way.payment_wayInfo') }}</span>
                                        </div>

                                        <div class="panel-body">


                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('payment_way.shop_id') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$payment_way['shop_id'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('payment_way.payment_way_id') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$payment_way['payment_way_id'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">





                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('payment_way.created_at') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$payment_way['created_at'] }}</label>
                                                </div>
                                            </div>




                                                                                            <div class="col-sm-2 text-right">
                                                                                                <div class="form-group no-margin-hr">
                                                                                                    <label class="control-label">{{ trans('payment_way.updated_at') }}  </label>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-sm-4 text-left">
                                                                                                <div class="form-group no-margin-hr">
                                                                                                    <label class="control-label">{{$payment_way['updated_at'] }}</label>
                                                                                                </div>
                                                                                            </div>




                                                                                        </div>
                                                                                        <div class="row">

@if(is_array($payment_way['setting'])&& count($payment_way['setting']))
    @foreach($payment_way['setting'] as $key=>$value)

                                                                                            <div class="col-sm-2 text-right">
                                                                                                <div class="form-group no-margin-hr">
                                                                                                    <label class="control-label">{{ $key }}  </label>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-sm-4 text-left">
                                                                                                <div class="form-group no-margin-hr">
                                                                                                    <label class="control-label">{{ $value  }}</label>
                                                                                                </div>
                                                                                            </div>
                                                                                                @endforeach

@endif

                                            <div class="row">

                                                <div class="col-xs-offset-6 col-xs-3">

                                                    @if($canEdit)
                                                        <a href="/admin/payment_way/{{ $payment_way['id'] }}/edit"
                                                           class="fa fa-edit btn btn-primary form-control"> {{trans('payment_way.edit')}}</a>
                                                    @endif
                                                </div>
                                                <div class=" col-xs-3">
                                                    @if($canDestroy)
                                                        {!! Form::open(['method' => 'DELETE',
                                                'url' => ['/admin/payment_way',$payment_way['id']]]) !!}
                                                        <button type="submit" name="Delete" class="deleteRow  btn btn-danger form-control" >
                                                            <i class="fa fa-trash"></i>
                                                            {{trans('payment_way.delete')}}
                                                        </button>
                                                        {!! Form::close() !!}
                                                    @endif
                                                </div>

                                            </div>


                                        </div>
                                        <!-- row -->
                                    </div>


                                </div>




                                

                            </div>
                        </div>
                    </div>

                </div>







            </div>
        </div>



@stop