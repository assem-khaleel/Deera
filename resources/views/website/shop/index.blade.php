@extends('website.layouts.main')
@section('title','shop'.'  '.trans('website.pages_title'))
@section('content')






    <section class="main-wrapper">
        <article class="container">
            <section class="inner-wrapper">
                <div class="top_banner">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="rferd">
                                <img src="/assets/website/images/search-icon.png" style="float:left;" alt="">
                                <h3>  {{trans('website.yourCoffeeDelivered')}}<span>  @if(\Session::has('area_id') && \Session::get('area_id') >0  && array_key_exists(\Session::get('area_id'),$aAreas) ) {{$aAreas[\Session::get('area_id')] }} @else {{trans('website.salhiya')}} @endif</span></h3>

                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="sub-banner">
                                @inject('banner','\App\Repositories\website\banner\EloquentBannerRepository')
                                {{--*/
             $shopListBanners= $banner->getByFilter(['type'=>config('array.banner_type_shop_list_index')])->first();

              /*--}}

                                @if(count($shopListBanners))


                                        <img src="{{$shopListBanners->img}}" alt="">

                                @else
                                <img src="/assets/website/images/sub-banner.jpg" alt="">
                                @endif
                            </div>
                        </div>

                    </div>
                </div>

                <section class="search-bar">

                    {!!  Form::model($request,['method'=>'get','id'=>'searchShopForm','style'=>'margin:0px;padding:0px;']) !!}
                    <div class="row">

                        <aside class="EmadFloating1">
                            <div class="news-srh srch-select">
                                {!! Form::select('area_id',$aAreas,null,['class'=>'selectyze3 text_box selct-place new-pin','style'=>'margin:0px;']) !!}

                            </div>


                        </aside>

                        <aside class="EmadFloating11">
                            <div class="news-srh new-search01 srch-select">

                                {!! Form::select('id',[''=>trans('website.allCoffeeShops')]+$shopList,null,['class'=>'selectyze3 text_box selct-place new-pin','placeholder'=>trans('website.allCoffeeShops')]) !!}

                            </div>

                        </aside>





                        <aside class="EmadFloating2">


                            {!! Form::hidden('deliver_type',null,['id'=>'deliver_type_input']) !!}

                            <button type="submit" class="blog_btn" value=""><img src="/assets/website/images/02new-search.png" alt=""></button>
                        </aside>
                    </div>
                    {!! Form::close() !!}
                </section>



                <div class="search-result">



                    @if(count($oResults))
                        @foreach($oResults as $i=>$oResult)

                            @if($i%2==0)  <div class="row"> @endif

                                <aside class="col-md-6" @if($oResult->isClose()) style="opacity:0.5;" @endif>
                                    <a @if(!$oResult->isClose()) href="/shop/menuItem?shop_id={{$oResult->id}}" @else  @endif><div class="dt-box">
                                            <img src="{{$oResult->img}}" alt="">
                                            {!! $oResult->isClose()? '<h6 style="text-align:center">close</h6>':'' !!}
                                            <h2 style="display:none;">{{$oResult->{'name_'.config('app.locale')} }}</h2>


                                            @if(!( (\Session::has('deliver_type')&&\Session::get('deliver_type')==config('array.shop_deliver_type_pickup_index'))))
                                                <h6>{{trans('website.averageDeliverTime')}}: {{($oResult->expected_deliver_time > 0)?$oResult->expected_deliver_time:30 }} {{trans('website.minutes')}} </h6>
                                            @endif
                                            </div></a>
                                </aside>

                                @if($i%2==1)  </div> @endif

                        @endforeach
                    @else
                        <div class="noResultDiv" >{{trans('general.noResult')}}</div>
                    @endif





                </div>


            </section>



        </article></section>















@stop
@section('script')
    @parent
    <script type="text/javascript">
        $(document).ready(function(){

            $('.selectyze3').Selectyze({
                theme : 'new'
            });


        });
    </script>
@endsection