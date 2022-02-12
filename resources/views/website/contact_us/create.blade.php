@extends('website.layouts.main')
@section('title', trans('website.contactUs').' '.trans('website.pages_title'))
@section('content')





    <section class="main-wrapper">
        <article class="container">


            <!--inner area-->
            <section class="inner-wrapper">

                <div class="caption-sec">
                    <h1>{{ trans('website.contactUs') }}</h1>
                </div>

                <div class="inner-content">
                    <div class="abut_wrap">
                        <div class="cntact_sec">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5> {{ trans('website.ourCustomer') }} </h5>
                                    <h5> {{ trans('website.contactForm') }}  </h5>



                                    {!! Form::model($request,['url' => '/contact_us', 'class' => 'form-horizontal ajaxForm contact-form-ara']) !!}

                                  

                                    <section class="form_sec">

                                        <div class="row">
                                            <aside class="col-md-6  {{ $errors->has("first_name") ? "has-error" : ""}} ">
                                                {!! Form::text("first_name", null, ["class" => "text_box","placeholder"=>trans('website.firstName') ]) !!}
                                                {!! $errors->first("first_name", "<p class='help-block'>:message</p>") !!}
                                            </aside>
                                            <aside class="col-md-6  {{ $errors->has("last_name") ? "has-error" : ""}} ">
                                                {!! Form::text("last_name", null, ["class" => "text_box","placeholder"=> trans("website.lastName")]) !!}
                                                {!! $errors->first("last_name", "<p class='help-block'>:message</p>") !!}
                                            </aside>
                                        </div>
                                        <div class="row">
                                            <aside class="col-md-6   {{ $errors->has("email") ? "has-error" : ""}} ">
                                                {!! Form::text("email", null, ["class" => "text_box","placeholder"=> trans("contact_us.email")]) !!}
                                                {!! $errors->first("email", "<p class='help-block'>:message</p>") !!}
                                            </aside>
                                            <aside class="col-md-6  {{ $errors->has("phone") ? "has-error" : ""}} ">
                                                {!! Form::text("phone", null, ["class" => "text_box","placeholder"=> trans("contact_us.phone")]) !!}
                                                {!! $errors->first("phone", "<p class='help-block'>:message</p>") !!}
                                            </aside>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12   {{ $errors->has("comments") ? "has-error" : ""}} ">

                                                {!! Form::textarea("comments", null, ["class" => "text_box textare","placeholder"=> trans("contact_us.comments")]) !!}
                                                {!! $errors->first("comments", "<p class='help-block'>:message</p>") !!}
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">



                                                @if (Session::get('flash_success'))
                                                <div style="clear:both"></div>
                                                <div class="alert alert-success" style="clear:both;">
                                                    {!! Session::get('flash_success') !!}

                                                </div>
                                                <div style="clear:both"></div>
                                                @endif


                                                {!! Form::submit('Send', ['class' => 'sub_btn']) !!}
                                            </div>
                                        </div>

                                    </section>

                                    {!! Form::close() !!}

                                    <div class="sub-contat">
                                        <h5>{{trans('website.alternativelyContact') }} : </h5>

                                        <ul class="cont_dt">
                                            <li><img src="/assets/website/images/phone-icon.png" alt="">{{trans('website.deeraPhoneNumber')}}</li>
                                            <li><img src="/assets/website/images/mail-icon.png" alt=""><a href="mailto:{{trans('website.deeraEmailText')}}">{{trans('website.deeraEmailText')}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </section>
            <!--inner area-->

        </article>
    </section>



@if (Session::get('flash_success'))
            
                 <script>

                            function successAlert() {
                                {{--var html = '<div style="text-align:center;padding:10px;color:#08a208;padding-bottom: 50px;    font-size: 24px;"> {!! Session::get('flash_success') !!}</div>';--}}
                               {{--$('#generalPopupModel  .modal-body').html(html);--}}
                                {{----}}
                                {{--$('#generalPopupModel').modal('show');--}}


                                $('.alert-success').show();

                            }
                       //     setTimeout('successAlert()',1000);
                        </script>
@endif


@stop