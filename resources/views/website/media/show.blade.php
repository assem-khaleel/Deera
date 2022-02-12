@extends('website.layouts.main')
@section('title', trans('media.media').'  '.trans('website.pages_title'))
@section('content')



    <section class="main-wrapper">
        <article class="container">



            <!--inner area-->
            <section class="inner-wrapper">

                <div class="caption-sec">
                    <h1> {{trans('website.media')}}</h1>
                </div>

                <div class="inner-content">

                    <div class="media-dtail">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="media-banner">

                                    <div class="rslides_container">
                                        <ul class="rslides" id="slider2">
                                            {{--*/
                                           $i=0;
                                             $images=explode(',',$media->img );
                                             /*--}}

                                            @foreach($images as $key=>$oneImage)
                                            <li><img src="{{ $oneImage }}" alt=""></li>
                                            @endforeach

                                        </ul>
                                    </div>

                                </div>

                                <h3>{{$media->{'title_'.config('app.locale')} }} </h3>

                                <p>{{$media->{'description_'.config('app.locale')} }} </p>




                            </div>
                        </div>

                    </div>


                </div>


            </section>
            <!--inner area-->


    </article>
    <section>

@stop
@section('script')
    @parent



            <script src="/assets/website/js/responsiveslides.min.js"></script>
            <script>
                // You can also use "$(window).load(function() {"
                $(function () {

                    // Slideshow 1
                    $("#slider1").responsiveSlides({
                        auto: true,
                        pager: false,
                        nav: false,
                        speed: 1500,
                        speed:1500,
                        timeout:4E3,
                        namespace: "centered-btns"
                    });

                    $("#slider2").responsiveSlides({
                        auto: true,
                        pager: true,
                        nav: true,
                        speed: 1500,
                        timeout:5E3,
                        pause: true,
                        namespace: "centered-btns"
                    });
                });
            </script>

            <script type="text/javascript" src="/assets/website/js/jquery.reveal.js"></script>

            <script>
                $(document).ready(function(){
                    $('.carousel').carousel({
                        pause: "false"
                    });
                });

            </script>
            <!--
            <script type="text/javascript">
                        $(function () {
                            $('#datetimepicker4').datetimepicker();
                        });
                    </script>-->

            <script src="/assets/website/js/jquery.bxslider.min.js"></script>
            <script>
                $(function(){
                    $('.offers_slide').bxSlider({
                        auto: true,
                        //mode: 'fade',
                        nextText:'',
                        prevText:'',
                        pagerCustom: '#bx-pager'
                    });

                });

            </script>
    @stop