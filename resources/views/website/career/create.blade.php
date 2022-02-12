@extends('website.layouts.main')

@section('title', (trans('general.career' ).' - '.trans('website.pages_title') )) 
@section('content')


    <section class="main-wrapper">
        <article class="container">

        <!--inner area-->
<section class="inner-wrapper">

    <div class="caption-sec">
        <h1> {{trans('website.careers')}}</h1>
    </div>

    <div class="inner-content">
        <div class="abut_wrap">
            <div class="cntact_sec">
                <div class="row">
                    <div class="col-md-12">
                        <h5>
                              {{trans('website.interestedTeam')}}
                        </h5>

                        <section class="form_sec">

                            {!! Form::model($request,['url' => '/career', 'class' => 'form-horizontal','files'=>true]) !!}

                          @if (Session::get('flash_success'))
                                        <div class="alert alert-success">

                                            {!! Session::get('flash_success') !!}

                                        </div>
                                    @endif

                            @if($errors->has("upload"))
                                <div class="alert alert-danger alert-dark">
                                {!! $errors->first("upload", "<p class='help-block'>:message</p>") !!}
                                    </div>
                                @endif

                            <div class="row">
                                <aside class="col-md-6  {{ $errors->has("first_name") ? "has-error" : ""}}  ">

                                    {!! Form::text('first_name',null,['class'=>'text_box','placeholder'=>trans('website.firstName')]) !!}
                                    {!! $errors->first("first_name", "<p class='help-block'>:message</p>") !!}
                                </aside>
                                <aside class="col-md-6 {{ $errors->has("last_name") ? "has-error" : ""}} ">



                                    {!! Form::text('last_name',null,['class'=>'text_box','placeholder'=>trans('website.lastName')]) !!}
                                    {!! $errors->first("last_name", "<p class='help-block'>:message</p>") !!}
                                </aside>
                            </div>
                            <div class="row">
                                <aside class="col-md-6 {{ $errors->has("email") ? "has-error" : ""}}  ">

                                    {!! Form::text('email',null,['class'=>'text_box','placeholder'=>trans('website.emailAddress')]) !!}
                                    {!! $errors->first("email", "<p class='help-block'>:message</p>") !!}
                                </aside>
                                <aside class="col-md-6 {{ $errors->has("phone") ? "has-error" : ""}} ">

                                    {!! Form::text('phone',null,['class'=>'text_box','placeholder'=>trans('website.Phone')]) !!}

                                    {!! $errors->first("phone", "<p class='help-block'>:message</p>") !!}
                                </aside>
                            </div>
                            <div class="row">
                                <aside class="col-md-6   {{ $errors->has("position") ? "has-error" : ""}} ">

                                    {!! Form::text('position',null,['class'=>'text_box','placeholder'=>trans('website.interestedJob')]) !!}

                                    {!! $errors->first("position", "<p class='help-block'>:message</p>") !!}
                                </aside>
                                <aside class="col-md-6   {{ $errors->has("file") ? "has-error" : ""}}  ">
                                    <div style="position:relative;">
                                        <a class='text_box uplod' href='javascript:;'>

                                             {{trans('website.uploadCv')}}

                                            <input type="file" style='position:absolute;z-index:2;top:0;width:100%;height:100%;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file"  size="40"  onchange='$("#upload-file-info").html($(this).val().split("\\").pop());'>
                                        </a>
                                        &nbsp;
                                        <span class='label label-info' id="upload-file-info"></span>

                                    </div>{!! $errors->first("file", "<p class='help-block'>:message</p>") !!}
                                </aside>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <input value="{{trans('website.Submit')}}" class="sub_btn" type="submit">
                                </div>
                            </div>
{!! Form::close() !!}
                        </section>



                    </div>
                </div>
            </div>
        </div>

    </div>


</section>
<!--inner area-->




            <div style="display:none" id="showRightPush"> this dummy div to fix javascript getElementById </div>



        </article>
    </section>

@endsection