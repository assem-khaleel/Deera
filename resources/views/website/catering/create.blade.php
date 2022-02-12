@extends('website.layouts.main')

@section('title', trans('general.catering') .'  '.trans('website.pages_title'))
@section('content')


<style type="text/css">
    aside{overflow: hidden;}
</style>


    <section class="main-wrapper">
        <article class="container">






        {!! Form::model($request,['url' => '/catering', 'class' => 'form-horizontal','onsubmit'=>"if($('#dtp_input2').val() < '".gmdate('Y-m-d')."'){ $('#dtp_input2').parent().addClass('has-error');$('#book_time_error_place').html('<p class=\"help-block\">".trans('website.validateMinDate')."</p>');return false;}"]) !!}


        <!--inner area-->
<section class="inner-wrapper">

    <div class="caption-sec">
        <h1> {{ trans('website.Catering') }} </h1>
    </div>

    <div class="inner-content">
        <div class="abut_wrap">
            <div class="cntact_sec">
                <div class="row">
                    <div class="col-md-12">
                        <h5>{{ trans('website.fillForm') }}.</h5>

                        <section class="form_sec">
                            <div class="row">
                                <aside class="col-md-6  {{ $errors->has("name") ? "has-error" : ""}}  ">
                                    {!! Form::text('name',null,['class'=>'text_box' ,'placeholder'=> trans('website.fullName')]) !!}
                                    {!! $errors->first("name", "<p class='help-block'>:message</p>") !!}
                                </aside>
                                <aside class="col-md-6  {{ $errors->has("email") ? "has-error" : ""}}  ">
                                    {!! Form::text('email',null,['class'=>'text_box' ,'placeholder'=> trans('website.email') ]) !!}
                                    {!! $errors->first("email", "<p class='help-block'>:message</p>") !!}
                                </aside>
                            </div>
                            <div class="row">
                                <aside class="col-md-6  {{ $errors->has("phone") ? "has-error" : ""}}  ">
                                    {!! Form::text('phone',null,['class'=>'text_box' ,'placeholder'=> trans('website.Phone') ]) !!}
                                    {!! $errors->first("phone", "<p class='help-block'>:message</p>") !!}
                                </aside>
                                <aside class="col-md-6  {{ $errors->has("shop_id") ? "has-error" : ""}}  ">
                                    {!! Form::select('shop_id',[''=>trans('general.shop')]+$shopList,null,['class'=>'text_box','placeholder'=>'']) !!}
                                    {!! $errors->first("shop_id", "<p class='help-block'>:message</p>") !!}
                                </aside>
                            </div>
                            <div class="row">
                                <aside class="col-md-6  {{ $errors->has("people_number") ? "has-error" : ""}}  ">
                                    {!! Form::text('people_number',null,['class'=>'text_box' ,'placeholder'=>  trans('website.numberPepole')  ]) !!}
                                    {!! $errors->first("people_number", "<p class='help-block'>:message</p>") !!}
                                </aside>
                                <aside class="col-md-6  {{ $errors->has("book_date") ? "has-error" : ""}}  ">

                                    <div class="input-group date form_date col-md-12 clnrd" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                        <input type="text" class="text_box" placeholder="{{ trans('website.dateOfBirth') }}" min="{{gmdate('Y-m-d')}}" readonly>

                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                    </div>
                                    <div id="book_time_error_place"></div>
                                    {!! Form::hidden('book_date',null,['id'=>'dtp_input2','min'=>gmdate('Y-m-d')]) !!}
                                    {!! $errors->first("book_date", "<p class='help-block'>:message</p>") !!}

                                </aside>
                            </div>
                            <div class="row">
                                <aside class="col-md-6  {{ $errors->has("book_time") ? "has-error" : ""}}  ">

                                    <div class="input-group date form_time col-md-12 clnrd" data-date="" data-date-format="hh:ii, todayBtn: false," data-link-field="dtp_input3" data-link-format="hh:ii">
                                        <input type="text" id="time-d" class="text_box" placeholder="{{ trans('website.time') }}" readonly>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>

                                    </div>

                                    {!! Form::hidden('book_time',null,['id'=>'dtp_input3']) !!}
                                    {!! $errors->first("book_time", "<p class='help-block'>:message</p>") !!}
                                </aside>
                                <style type="text/css">
                                    .day.today{display:inline !important; }
                                </style>
                                <aside class="col-md-6  {{ $errors->has("location") ? "has-error" : ""}}  ">
                                    {!! Form::select('location',[''=>trans('website.location')]+$areaList,null,['class'=>'text_box' ,'placeholder'=>trans('website.location')]) !!}
                                    {!! $errors->first("location", "<p class='help-block'>:message</p>") !!}
                                </aside>
                            </div>




                            <div class="row">
                                <div class="col-md-12  {{ $errors->has("request") ? "has-error" : ""}}  ">
                                    <textarea class="text_box textare" name="request" placeholder="{{ trans('website.yourRequest') }}"></textarea>
                                    {!! $errors->first("request", "<p class='help-block'>:message</p>") !!}
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <input value="{{ trans('website.submit') }}" class="sub_btn" type="submit">


                                    @if (Session::get('flash_success'))
                                        <div style="clear:both"></div>
                                        <div class="alert alert-success" style="clear:both;">

                                            {!! Session::get('flash_success') !!}

                                        </div>
                                    @endif
                                </div>
                            </div>

                        </section>

                        <div class="sub-contat">
                            <h5> {{ trans('website.alternativeContactUs') }} :  </h5>

                            <ul class="cont_dt">
                                <li><img src="/assets/website/images/phone-icon.png" alt="">+965 - 2222 2222</li>
                                <li><img src="/assets/website/images/mail-icon.png" alt=""><a href="mailto:catering@cofedistrict.com">catering@cofedistrict.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</section>
<!--inner area-->


{!! Form::close() !!}



</article>
    </section>







@endsection

@section('script')

    @parent

    <script type="text/javascript" src="/assets/website/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript">
        $('.form_datetime').datetimepicker({
            //language:  'fr',
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            forceParse: 0,
            showMeridian: 1
        });
        $('.form_date').datetimepicker({
            language:  'en',
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        });
        $('.form_time').datetimepicker({
            language: 'en',
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 0,
            startView: 1,
            minView: 0,

            maxView: 1,
            forceParse: 0,
            format: 'hh:ii',
        });
    </script>
              @if (false && Session::get('flash_success'))
            
                 <script>

                            function successAlert() {
                                var html = '<div style="text-align:center;padding:10px;color:#08a208;padding-bottom: 50px;    font-size: 24px;"> {!! Session::get('flash_success') !!}</div>';
                               $('#generalPopupModel  .modal-body').html(html);
                                $('#generalPopupModel').modal('show');

                            }
                            setTimeout('successAlert()',1000);
                        </script>
@endif
    @stop