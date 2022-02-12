<style type="text/css">
    .search_form{
        display: none;
    }
    .res_search{
        display: none;
    }
    .linepart{
        display: none;
    }

    .but{

    background-color: #b59778;
    color:#FFF;
}

label{

    margin-bottom: -28px !important;

}
</style>
@extends('website.layouts.main')
@section('title', Lang::get('dashboard.PageTitle').'  '.trans('website.pages_title'))
@section('content')

    @include('website.partials.innerSearch',['title'=> trans('website.forget').' <br><span>'.trans('website.password').'</span>','img'=>'/assets/website/images/contact-ico.png','icon'=>'fa fa-list'])



    <section class="inner_content_area">

      <div class="container">
<div class="caption-sec">
        <h1> Reset Password</h1>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="forgot-password col-sm-6 col-sm-offset-3" style="height:70% ;line-height: 7;" >
                        {!! Form::open([]) !!}
                            <div class="form-group">

                                @include('common.partials.messages')

                                <label style="font-size: 20px ;">{{trans('website.enterNewPassword')}} :</label>
                                <input type="password" class="form-control" id="uLogin" placeholder="{{trans('website.password')}}" name="password">
                                <input type="password" class="form-control" id="uLogin" placeholder="{{trans('website.confirmPassword')}}" name="confirmPassword">
                                <hr>
                               <button type="submit" class="btn but">{{trans('website.submit')}}</button>
                            </div> <!-- /.form-group -->

                      {!! Form::close()  !!}

                    </div> <!-- /.modal-body -->

                </div>

            </div>
        </div>


    </section>


@stop