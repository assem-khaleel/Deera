@extends('website.layouts.main')
@section('title', trans('general.offer').'  '.trans('website.pages_title'))

@section('content')



    <section class="main-wrapper">
        <article class="container">


            <section class="inner-wrapper">

                <div class="caption-sec">
                    <h1> {{trans('website.offers')}}</h1>
                </div>


    <div class="inner-content">
        <div class="offers full-width">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <ul class="offers_slide">

                        @if(count($oResults))
                            {{--*/$i=0;/*--}}
                        @foreach($oResults as $oResult)
                        <li>
                            <a href="{{'/shop/menuItem?shop_id='.(isset($oResult->coffee->shop_id)?$oResult->coffee->shop_id:'').'&menu_section=offer'}}" id="product_{{$oResult->coffee_id}}">
                            <img height="auto" src="{{$oResult->img}}" alt="" />
                            </a>
                        </li>
                        @endforeach
                        @endif

                    </ul>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                    <div id="bx-pager">
                        @if(count($oResults))
                            {{--*/$i=0;/*--}}
                        @foreach($oResults as $oResult)
                            <a href="{{'/shop/menuItem?shop_id='.(isset($oResult->coffee->shop_id)?$oResult->coffee->shop_id:'').'&menu_section=offer'}}" id="product_{{$oResult->coffee_id}}" ><img  height="auto" src="{{$oResult->img}}" alt="" /></a>
                                {{--*/$i++;/*--}}
                        @endforeach
                      @endif
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.offers -->
    </div>

            </section>


    </article>
    </section>


@stop
@section('script')
    @parent
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