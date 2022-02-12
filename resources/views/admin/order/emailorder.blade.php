@extends('common.layouts.main')
@section('title', trans('general.order'))
@section('content')
 <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">Email</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                   <!--  <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.order') }}</a></li>
                        <li class="active">{{ trans('order.orderCreate') }}</li>
                    </ol> -->
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                   <!--  <form role="search" method="get" action="" class="app-search hidden-xs pull-right">
                        <input type="text" placeholder=" {{ trans('general.search') }} ..." class="form-control">
                        <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
                    </form> -->
                </div>
            </div>
{!! Form::open() !!}


<div class="form-group">
	<label>Email:</label>
	<input type="email" name="email" class="form-control">
	@if(count($errors)>0)

	<label style="color: red">{{$errors->first('email')}}</label>
@endif
</div>

<div class="form-group">
	<label>Subject:</label>
	<input type="text" name="subject" class="form-control">
	
</div>

<div class="form-group">
	<label>Massege:</label>
	<textarea  name="Massege" class="form-control" rows="3"></textarea> 
	
</div>





<button type="submit"> Send email</button>  

{!! Form::close() !!}




</div></div>

@endsection