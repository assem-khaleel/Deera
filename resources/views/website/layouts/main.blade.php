<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>@yield('title','COFE DISTRICT') </title>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/assets/website/images/favicon.ico" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

@section('meta')

    @show

@if(false)
    {!! HTML::style('/assets/website/css/Selectyze.jquery.css') !!}
        {!! HTML::style('/assets/website/css/bootstrap-datetimepicker.css') !!}

        {!! HTML::style('/assets/website/css/font-awesome.css') !!}
@endif

    @if(config('app.locale')=='ar')

        {!! HTML::style('/assets/website/css/ar/main-style.css') !!}
        {!! HTML::style('/assets/website/css/bootstrap.css') !!}
        {!! HTML::style('/assets/website/css/ar/bootstrap-theme.css') !!}
        {!! HTML::style('/assets/website/css/ar/Selectyze.jquery.css') !!}
        {!! HTML::style('/assets/website/css/ar/responsiveslides.css') !!}
        {!! HTML::style('/assets/website/css/ar/themes.css') !!}
        {!! HTML::style('/assets/website/css/ar/reveal.css') !!}
        {!! HTML::style('/assets/website/css/ar/custom_maid.css') !!}
        {!! HTML::style('/assets/website/css/ar/additional.css') !!}
        {!! HTML::style('/assets/website/css/ar/sara.css') !!}
        {{--{!! HTML::style('/assets/website/css/ar/emadcss.css') !!}--}}



    @else


        @if(false)
        {!! HTML::style('/assets/website/css/main-style.css') !!}
        {!! HTML::style('/assets/website/css/bootstrap.css') !!}
        {!! HTML::style('/assets/website/css/bootstrap-theme.css') !!}
        {!! HTML::style('/assets/website/css/Selectyze.jquery.css') !!}
        {!! HTML::style('/assets/website/css/responsiveslides.css') !!}
        {!! HTML::style('/assets/website/css/themes.css') !!}
        {!! HTML::style('/assets/website/css/reveal.css') !!}
        {!! HTML::style('/assets/website/css/custom_maid.css') !!}
        {!! HTML::style('/assets/website/css/sara.css') !!}
        {{--{!! HTML::style('/assets/website/css/emadcss-en.css') !!}--}}
@endif

            {!! HTML::style('/assets/website/css/css_en.css') !!}

    @endif

    @if(Input::has('mobileRequest'))
        @if(config('app.locale')=='ar')
            {!! HTML::style('/assets/website/css/ar/emadcss.css') !!}


        @else

            {!! HTML::style('/assets/website/css/emadcss-en.css') !!}
        @endif


    @endif

    {!! HTML::style('/assets/website/css/additional.css') !!}
    
     {!! HTML::style('/assets/website/css/default.css') !!}

    {!! HTML::style('/assets/website/css/component.css') !!}
    
   
</head>

<body class="cbp-spmenu-push">
<div id="showRightPush"></div>
<section class="main-wrapper">

    @include('website.partials.header')


    @yield('content')


    @include('website.partials.footer')


            <!--popup-->
    <div id="myModal_login" class="reveal-modal2">

        {!! Form::open( [
 'method' => 'POST',
 'url' => '/login',
 'class' => '  formWithResponse',
 'id'=>'loginForm',
 'onsubmit'=>"formWithResponse('#loginForm');return false;",
 'data-success-function'=>'refreshWhenSuccess',
 'data-error-function'=>'loginFailFunction',
 'data-wait-function'=>'ff',
 'data-success-place'=>'#addressListDiv',
 'data-wait-place'=>'#formWaitingPlace'

]) !!}
        <script>
            window.refreshWhenSuccess=function(a,b,c){
                $('#errorPlace').hide();
                window.location.reload();
            }
            window.loginFailFunction=function(a,b,c){
                $('#errorPlace').show();
                $('#errorPlace').text('Login Failed. Either your Email/password is incorrect.');
            }
            window.ff=function(a,b,c){

            }
        </script>
        <div class="sign_in">
 <span
         id="formWaitingPlace" style="font-size: 12px; clear: both;"></span>
            <h3> {{trans('website.login')}}</h3>

            <div class="alert alert-danger alert-dark" id="errorPlace" style="clear:both;display: none;">

            </div>

            <div class="log_fill"><input type="text" name="email" class="text_log" placeholder="Email Address" required></div>
            <div class="log_fill"><input type="password" name="password" class="text_log" placeholder="Password" required></div>
            <div class="log_fill"><input type="hidden" name="deviceId" class="text_log"></div>

            <div class="log_fill">
                <aside class="rmr">
                    <div class="custom-checkbox">
                        <input id="cb3" type="checkbox">
                        <label for="cb3"> {{trans('website.rememberMe')}}</label>
                    </div>


                </aside>
                <aside class="frgt"><a href="/recover" id="recoverA" class="aWithResponse" data-success-place="#generalPopupModel .modal-body"> {{trans('website.forgetPassword')}}</a></aside>
            </div>
            <input type="submit" class="log_btn" value="{{trans('website.login')}}">
            <h5> {{trans('website.dontHaveAccount')}} <a href="/users/create">{{trans('website.createAnAccount')}}</a></h5>

        </div>

        {!! Form::close() !!}
        <a class="close-reveal-modal"></a>
    </div>
    <div id="myModal_add" class="reveal-modal2">

        <div class="sign_in">
            <h3> {{trans('website.addCoffeShop')}}  </h3>

            <div class="row">
                <div class="col-md-6">
                    <div class="log_fill"><input type="text" class="text_log" placeholder="{{trans('website.coffeShopname')}} "></div>
                </div>
                <div class="col-md-6">
                    <div class="log_fill"><input type="text" class="text_log" placeholder="{{trans('website.representativeName')}} "></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="log_fill"><input type="text" class="text_log" placeholder="
                     {{trans('website.phone')}}
                                "></div>
                </div>
                <div class="col-md-6">
                    <div class="log_fill"><input type="text" class="text_log" placeholder="{{trans('website.email')}}"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="log_fill"><input type="text" class="text_log" placeholder="
{{trans('website.website')}}
                                "></div>
                </div>
                <div class="col-md-6">
                    <div class="log_fill"><input type="text" class="text_log" placeholder="

{{trans('website.instagramAccount')}}

                                "></div>
                </div>
            </div>

            <div class="log_fill">
                <h6> {{trans('website.inquiresContact')}} <span>info@cofedistrict.com</span> {{trans('website.calluss')}} <span>+965 - 2222 2222</span>
                </h6>

            </div>
            {{trans('website.calluss')}}

            <input type="{{trans('website.submit')}}" class="log_btn" value="{{trans('website.submit')}}">


        </div>
        <a class="close-reveal-modal"></a>
    </div>


    @section('script')

        @if(false)
        {!! HTML::script('/assets/website/js/jquery.min.js') !!}
        {!! HTML::script('/assets/website/js/bootstrap.js') !!}
        {!! HTML::script('/assets/website/js/Selectyze.jquery.js') !!}
        {!! HTML::script('/assets/website/js/responsiveslides.min.js') !!}
        {!! HTML::script('/assets/website/js/jquery.reveal.js') !!}


        {!! HTML::script('/assets/website/lib/js/formWithResponse.js') !!}

        {!! HTML::script('/assets/website/js/custom.js') !!}
        {!! HTML::script('/assets/website/js/Selectyze.jquery.js') !!}

        {!! HTML::script('/assets/website/js/additional.js') !!}

{!! HTML::script('/assets/website/js/modernizr.custom.js') !!}
        {!! HTML::script('/assets/website/js/classie.js') !!}
       @endif

            {!! HTML::script('/js.js') !!}

        
        
        
 @if(Input::has('mobileRequest'))
        {!! HTML::script('/assets/website/js/emad.js') !!}
@endif




        <script>
            // $(function(){
            //  $('.inner-wrapper').css({"min-height": $(window).height() - 186});
            // });
            // $('.inner-wrapper').css({"min-height": $(window).height() - 186});
            // $(window).bind('resize', function(e){
            //     $('.inner-wrapper').css({"min-height": $(window).height() - 186});
            // });
        </script>


    @show





    <div class="modal fade" id="generalPopupModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index:999999;">
        <div class="modal-dialog custom_width" role="document">

            <div class="modal-content" style="background-color:#fff;">
                <i style="float:right;padding-right:10px;cursor:pointer; font-size: 28px;" onclick="$('#generalPopupModel').modal('hide');">&times;</i>

                <div class="modal-body padbottom" style="padding:10px;">




                </div>

            </div>
        </div>
    </div>



</body>
</html>















































