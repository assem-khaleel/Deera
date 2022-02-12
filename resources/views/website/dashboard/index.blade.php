@extends('website.layouts.main')
@section('title', Lang::get('dashboard.PageTitle'))
@section('content')




        <!--banner-->
<div class="banner" id="homePageBanner" >

    <div class="sliderwrap">
        <div class="rslides_container">
            <ul class="rslides" id="slider1">
                @inject('banner','\App\Repositories\website\banner\EloquentBannerRepository')
                {{--*/
               $homeBanners= $banner->getByFilter(['type'=>config('array.banner_type_home_banner_index')]);

                /*--}}


                @if(count($homeBanners))
                    @foreach($homeBanners as $homeBanner)

                        <li><img src="{{$homeBanner->img}}" alt=""></li>
                        @endforeach
                    @endif

            </ul>
        </div>
    </div>
    <div class="overlay"></div>


    <div class="select-wrap">

        <h2> {{ trans('website.scheduleMorning') }}  </h2>





        {!! Form::open(['route'=>'shop.index','method'=>'get','id'=>'searchAreaForm']) !!}
        <div class="boxs">
            {!! Form::select('area_id',$aAreas,null,['class'=>'selectyze2','required'=>'required','id'=>'areaSearchSelect','required'=>"required"]) !!}
            {!! Form::hidden('deliver_type',null,['id'=>'deliver_type_input']) !!}
            <script>

                function watchKeyDown(){

                    $('#searchAreaForm .DivSelectyze.mac').on('keydown', function (e) {
                        var key=String.fromCharCode(e.keyCode);
                        $('.UlSelectize a').each(function(){
                            if($(this).text().indexOf(key)  ==0){$(this).click();}

                        });
                    });
                    $('#areaSearchSelect').change();
                }
                setTimeout("watchKeyDown()",'1000');
            </script>
        </div>

        <div class="boxs index-btn">


            <a href="javascript:void(0)"   onclick="submitSearchForm('{{ config('array.shop_deliver_type_deliver_index') }}');"><p>{{ trans('website.delivery') }}</p></a>
            <a href="javascript:void(0)"    onclick="submitSearchForm('{{ config('array.shop_deliver_type_pickup_index') }}');"><p> {{ trans('website.pickUp') }}</p></a>
        </div>
        {!! Form::close() !!}
    </div>



</div>
<!--banner-->

<article class="container">
    <div class="wrapper">

        <!--content sec-->
        <div class="contet-wrapper">
            <div class="sub-content">
                <div class="row" id="iconsInHomePageToHide">

                    <aside class="col-md-6">
                        <h1>{{ trans('website.cofeDistrict') }}  </h1>
                        <p>{{ trans('website.cofePlatform') }}
                        </p>
                    </aside>

                    <aside class="col-md-6">
                        <div class="speciality">

                            <div class="spec_bx">
                                <img src="/assets/website/images/icon1.png" alt="">
                                <h2> {{ trans('website.pickUp') }}   <span>  {{ trans('website.min') }}   </span></h2>
                            </div>

                            <div class="spec_bx">
                                <img src="/assets/website/images/icon2.png" alt="">
                                <h2>  {{ trans('website.schedule') }} <span>   {{ trans('website.ordersYou1') }} </span></h2>
                            </div>

                            <div class="spec_bx">
                                <img src="/assets/website/images/icon3.png" alt="">
                                <h2>{{ trans('website.deliveryTime') }} <span> {{ trans('website.min1') }}  </span></h2>
                            </div>




                        </div>
                    </aside>

                </div>
            </div>


            <!--steps-->
            <section class="steps-wrap">

                <div class="each-step">
                    <img class="icon" src="/assets/website/images/step-1.png" alt="">
                    <h4>{{ trans('website.orderYour') }}  <span> {{ trans('website.coffee') }}</span></h4>
                </div>

                <div class="each-step">
                    <img class="icon" src="/assets/website/images/step-2.png" alt="">
                    <h4>  {{ trans('website.schedulepic') }} <span> {{ trans('website.coffee') }}    </span></h4>
                </div>

                <div class="each-step">
                    <img class="icon" src="/assets/website/images/step-3.png" alt="">
                    <h4>{{ trans('website.payBy') }} <span> {{ trans('website.cashOnline') }}  </span></h4>
                </div>

                <div class="each-step">
                    <img class="icon" src="/assets/website/images/step-4.png" alt="">
                    <h4> {{ trans('website.track') }} <span> {{ trans('website.yourOrder') }} </span></h4>
                </div>

                <div class="each-step">
                    <img class="icon" src="/assets/website/images/step-5.png" alt="">
                    <h4>  {{ trans('website.enjoy') }} <span> {{ trans('website.yourCoffe') }} </span></h4>
                </div>


            </section>
            <!--steps-->
        </div>
        <!--content sec-->


        <!--add & sections-->
        <section class="addsec">

            <div class="add-slider">
                <div class="bs-example">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            {{--*/
              $homeAdvSlides= $banner->getByFilter(['type'=>config('array.banner_type_home_adv_slide_index')]);
$i=0;
               /*--}}
                            @foreach($homeAdvSlides as $homeAdvSlide)
                            <li data-target="#myCarousel" data-slide-to="{{$i}}" @if($i==0) class="active" @endif></li>
                                {{--*/
          $i++;
             /*--}}
                            @endforeach
                        </ol>
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                           {{--*/
                           $i=0;
                            /*--}}
                            @foreach($homeAdvSlides as $homeAdvSlide)

                                <div class="item  @if($i==0) active @endif">
                                    <img src="{{$homeAdvSlide->img}}" alt="">
                                </div>
                                {{--*/
          $i++;
             /*--}}

                            @endforeach


                        </div>

                    </div>
                </div>

            </div>

            <!--category-->
            <div class="category-box removeMarginBottomOnMobile" >
                <div class="row">

                    {{--*/
            $homeBottomAdvs= $banner->getByFilter(['type'=>config('array.banner_type_bottom_adv_index')]);
$i=0;
             /*--}}
                    @foreach($homeBottomAdvs as $homeBottomAdv)


                        <div class="col-md-4 col-sm-4">
                            <a
                                    @if($i == 2 )
                                    href="/shop/create"  data-success-place="#generalPopupModel  .modal-body" id="addClientShopLink"   class="aWithResponse"
                                    @else
                                    href="#"
                                    @endif

                                    ><div class="secbox ">

                                    <img src="{{$homeBottomAdv->img}}" alt="">
                                    <div class="overly"></div>


                                </div></a>
                        </div>

                        {{--*/
  $i++;
  if($i == 3){break;}
     /*--}}
                    @endforeach



                </div>
            </div>
            <!--category-->


        </section>
        <!--add-->




    </div>

</article>


<section class="main-wrapper" style="margin-top:10px; display:none;">
    <article class="container" >

        <footer>
            <div class="footinn">
                <div class="row">

                    <div class="col-md-2 col-sm-4 col-xs-4">

                        <h3>{{trans('website.browse')}}</h3>
                        <ul>
                            <li><a href="/"> {{trans('website.home')}}</a></li>
                            <li><a href="/about">{{trans('website.aboutUs')}} </a></li>
                            <li><a href="/career/create">{{trans('website.careers')}}</a></li>
                            <li><a href="/media">{{trans('website.media')}}</a></li>
                            <li><a href="/blog">{{trans('website.cofeBlog')}}</a></li>
                            <li><a href="/contact_us/create"> {{trans('website.contactUs')}} </a></li>
                        </ul>
                    </div>

                    <div class="col-md-2 col-sm-4 col-xs-4">
                        <h3>{{trans('website.orders')}}</h3>
                        <ul>

                            @if(isset(current_user()->getUser()->id))
                                <li><a href="/users">{{trans('website.myProfile')}}</a></li>
                                <li><a href="/my-order">{{trans('website.myOrders')}} </a></li>
                                <li><a href="/gift_card_users">{{trans('website.myGiftCard')}} </a></li>

                            @else
                                <li><a href="#" data-reveal-id="myModal_login" data-animation="fade">{{trans('website.login')}}</a></li>
                                <li><a href="/users/create" >{{trans('website.signUp')}}</a></li>
                            @endif
                            <li><a href="/faq">{{trans('website.faqs')}}</a></li>
                            <li><a href="/privacy"> {{trans('website.Policy')}}</a></li>
                            <li><a href="/terms">{{trans('website.Terms')}} </a></li>
                        </ul>
                    </div>


                    <div class="col-md-2 col-sm-4 col-xs-4">
                        <h3>{{trans('website.cofeClub')}} </h3>
                        <ul>
                            <li><a href="/gift_card_users/create">{{trans('website.giftCards')}}</a></li>
                            <li><a href="/offer">{{trans('website.offers')}}</a></li>
                            <li><a href="/catering/create"> {{trans('website.Catering')}}</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <h3>{{trans('website.contact')}}</h3>
                        <ol>
                            <li>{{trans('website.call_us')}}: {{trans('website.cofeDistrictPhone')}}</li>
                            <li><a href="mailto:{{trans('website.deeraEmailText')}}">{{trans('website.deeraEmailText')}}</a> </li>
                        </ol>
                    </div>


                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="app-links">
                            <a href="#"><img src="/assets/website/images/app-store.png" alt="appstore"></a>
                            <a href="#"><img src="/assets/website/images/google-store.png" alt="googleplay"></a>
                        </div>
                    </div>

                </div>
            </div>

        </footer>



        </div>

    </article>

    </section>

@stop

@section('script')
    @parent

    {{--*/

$oAdvertisementBanners=$banner->getByFilter(['type'=>config('array.banner_type_advertisement_index'),'default'=>1]);
$aAdvertisementBanners=[];
$aAdvertisementUrl=[];
if(count($oAdvertisementBanners)){
foreach($oAdvertisementBanners as $oAdvertisementBanner){
$aAdvertisementBanners[]=$oAdvertisementBanner->img;
$aAdvertisementUrl[]=$oAdvertisementBanner->url;
}
}
$randomIndex=rand(0,count($aAdvertisementBanners) - 1);
$randomAdvertisement='';
$randomAdvertisementUrl='';
if(count($aAdvertisementBanners) >0){
$randomAdvertisement=$aAdvertisementBanners[$randomIndex];
$randomAdvertisementUrl=$aAdvertisementUrl[$randomIndex];
}
            /*--}}

    <script>

        function setCookie(key, value) {
            var expires = new Date();
            expires.setTime(expires.getTime() + (1 * 24 * 60 * 60 * 1000));
            document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
        }

        function getCookie(key) {
            var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
            return keyValue ? keyValue[2] : null;
        }
        function showAdvertize() {
            var model=$('#generalPopupModel');
            var imgLink="{{$randomAdvertisement}}";
            if(getCookie('advertiseShow')==1 || imgLink==""){return false;}
            model.find('.modal-body').html('<img src="'+imgLink+'" onclick="window.location.href=\'{{$randomAdvertisementUrl}}\'" style="width:100%;margin-bottom:10px; position:relative; z-index:99999; cursor:pointer;">');

            if(model.length > 0){
                $('#generalPopupModel').modal({
                    show: 'false'
                });
            }
            setCookie("advertiseShow",1);
        }
        setTimeout('showAdvertize()',500);
    </script>



    <script >
        function submitSearchForm(deliver_type){
            if($('#areaSearchSelect').val() ==''){
                $('.DivSelectyze.mac>.selectyzeValue').css('color','#f00');
                return false;
            }else
            {

                $('.DivSelectyze.mac>.selectyzeValue').css('color','#000');
            }
            $('#deliver_type_input').val(deliver_type);
            $('#searchAreaForm').submit();
        }

        $(' a').click(function(){
            if($('#areaSearchSelect').val() ==''){
                //  $('.DivSelectyze.mac>.selectyzeValue').css('color','#f00');
               // return false;
            }else
            {

                $('.DivSelectyze.mac>.selectyzeValue').css('color','#000');
            }
        });
    </script>

@stop