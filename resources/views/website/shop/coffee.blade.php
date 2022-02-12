@extends('website.layouts.inner')
@section('title', 'shop'.'  '.trans('website.pages_title'))
@section('content')

    @include('website.partials.innerSearch',['title'=>((isset($request->type))? trans('website.'.$request->type):trans('website.all').' <br><span>'.trans('website.coffeees').'</span>'),'img'=>'/assets/website/images/current_order.png','icon'=>'fa fa-list'])






    <section class="inner_content_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="row">


                        @if(count($oResults))
                            @foreach($oResults as $oResult)

                        <div class="col-sm-6 col-md-4 col-lg-4 clearfix">
                            <div class="coffeees">
                                <img src="{{$oResult->img}}" alt="shop">
                                <div class="coffeees-content">

                                    <h4>{{$oResult->{'name_'.config('app.locale')} }}</h4>
                                    <div class="stars_main"> <div id="stars"   data-id="{{$oResult->id}}"  data-model="coffee" data-rating="{{$oResult->rating}}" class="starrr">
                                            {{--@for($i=0;$i< $oResult->rate;$i++)--}}
                                                <i class="fa fa-star"></i>
                                            {{--@endfor--}}
                                            {{--@for($i=$oResult->rate;$i<6 ;$i++)--}}
                                            {{--<i class="fa fa-star-o"></i>--}}
                                        {{--@endfor--}}
                                        </div> </div>
                                    <a href="/shop/{{$oResult->shop_id}}">
                                    <h3>
                                        @if(!isset($oResult->shop))
                                        {{$oResult->{'shop_name_'.config('app.locale')}  }}
@else
                                            {{$oResult->shop->{'name_'.config('app.locale')}  }}
                                        @endif
                                    </h3>
                                    </a>
                                    <button class="btn" onclick="window.location.href='/shop/menuItem?shop_id={{$oResult->shop_id}}&id={{$oResult->id }}'">{{trans('website.order')}}</button>
                                </div>
                            </div>
                        </div>

                            @endforeach
                            @endif


                    </div>
                </div>
@include('website.partials.asideMenu')
            </div>
        </div>


    </section>




@stop