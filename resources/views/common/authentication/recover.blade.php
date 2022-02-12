@extends('common.layouts.login', array('class' => 'page-signin'))
@section('title', Lang::get('user.PageTitleSignIn'))
@section('content')

    <div class="login-box">
        <div class="white-box">
            {!! HTML::image('/assets/fxwebkit/img/logo.png', '', ['style' => 'width:100%']) !!}

            {!! Form::open(['id'=>'loginform' , 'class'=>'form-horizontal form-material']) !!}


            <h3 class="box-title m-b-20">{{ trans('user.forgetPasswordText') }}</h3>

            @include('common.partials.messages')

            <div class="form-group ">
                <div class="col-xs-12">
                    {!! Form::text('email', null, ['class'=>'form-control','placeholder'=>trans('user.email')]) !!}

                </div>
            </div>

            <div class="form-group text-center m-t-20">
                <div class="col-xs-12">
                    <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">{{trans('user.sendLink')}}</button>

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                    <div class="social">



                    </div>

                </div>
            </div>
            <div class="form-group m-b-0">
                <div class="col-sm-12 text-center">

                </div>
            </div>
            </form>

        </div>
    </div>
@stop