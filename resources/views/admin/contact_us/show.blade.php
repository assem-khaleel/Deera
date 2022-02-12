@extends('common.layouts.main')
@section('title', trans('contact_us.contact_us'))
@section('content')


    {{--*/

    $canEdit=canAccess('admin.contact_us.edit');
    $canDestroy=canAccess('admin.contact_us.destroy');


    /*--}}





    <div id="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                    <div class="col-lg-12">
                        <h4 class="page-title">{{ trans('general.contact_us') }}</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <ol class="breadcrumb pull-left">
                            <li><a href="#">{{ trans('general.contact_us') }}</a></li>
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
                            <h3 class="box-title m-b-0">{{ trans('general.contact_us') }}</h3>
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
                                            <span class="panel-title">{{ trans('contact_us.contact_usInfo') }}</span>
                                        </div>

                                        <div class="panel-body">


                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('website.firstName') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$contact_us['first_name'] }}</label>
                                                </div>
                                            </div>



                                                                                            <div class="col-sm-2 text-right">
                                                                                                <div class="form-group no-margin-hr">
                                                                                                    <label class="control-label">Last Name  </label>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-sm-4 text-left">
                                                                                                <div class="form-group no-margin-hr">
                                                                                                    <label class="control-label">{{$contact_us['last_name'] }}</label>
                                                                                                </div>
                                                                                            </div>




                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('contact_us.phone') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$contact_us['phone'] }}</label>
                                                </div>
                                            </div>




                                                                                            <div class="col-sm-2 text-right">
                                                                                                <div class="form-group no-margin-hr">
                                                                                                    <label class="control-label">{{ trans('contact_us.email') }}  </label>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-sm-4 text-left">
                                                                                                <div class="form-group no-margin-hr">
                                                                                                    <label class="control-label">{{$contact_us['email'] }}</label>
                                                                                                </div>
                                                                                            </div>






                                                                                        </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('contact_us.created_at') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$contact_us['created_at'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('contact_us.updated_at') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$contact_us['updated_at'] }}</label>
                                                </div>
                                            </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-sm-2 text-right">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{ trans('contact_us.comments') }}  </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 text-left">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{$contact_us['comments'] }}</label>
                                                    </div>
                                                </div>



                                            </div>
                                            



                                            <div class="row">

                                                <div class="col-xs-offset-6 col-xs-3">

                                                    @if($canEdit)
                                                        <a href="/admin/contact_us/{{ $contact_us['id'] }}/edit"
                                                           class="fa fa-edit btn btn-primary form-control"> {{trans('general.edit')}}</a>
                                                    @endif
                                                </div>
                                                <div class=" col-xs-3">
                                                    @if($canDestroy)
                                                        {!! Form::open(['method' => 'DELETE',
                                                'url' => ['/admin/contact_us',$contact_us['id']]]) !!}
                                                        <button type="submit" name="Delete" class="deleteRow  btn btn-danger form-control" >
                                                            <i class="fa fa-trash"></i>
                                                            {{trans('general.delete')}}
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