@extends('website.layouts.inner')
@section('title', 'shop'.'  '.trans('website.pages_title'))
@section('content')

    @include('website.partials.innerSearch',['title'=>' '.trans('website.shop').' <br><span>'.$shop->{'name_'.config('app.locale')}.'</span>','img'=>'/assets/website/images/add-ico.png','icon'=>'fa fa-list'])






    <section class="inner_content_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-8 order-conform clearfix">
                            <section class="clearfix">
                                <div class="heading">{{ $shop->{'name_'.config('app.locale')}  }}</div>

                                <label>{{trans('website.location')}} <span class="reqrd">*</span></label>

                                {!! Form::model($request,['method'=>'get','id'=>'selectAreaForm']) !!}
                                {!! Form::select('selected_area_id',$shopAreaList,null,['class'=>'newstyle form-control','onchange'=>'$("#selectAreaForm").submit();']) !!}

                                {!! Form::close() !!}
                                <div class="tbl-cvr">
                                    <table width="100%" cellspacing="2" cellpadding="2" class="hotl-data">
                                        <tr>
                                            <td>{{trans('website.status')}} :</td>
                                            <td>{{config('array.shop_status')[$shop->status]}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{trans('website.minimumAmount')}}  :</td>
                                            <td>  {{trans('website.kd')}} {{ count($selected_area)? $selected_area->min_amount:$shop->min_amount }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{trans('website.deliveringHours')}} :</td>
                                            @if(count($selected_area))

                                                <td>{{$selected_area->deliver_time_from}} to {{$selected_area->deliver_time_to }}</td>
                                                @else
                                                <td>{{$shop->deliver_time_from}} to {{$shop->deliver_time_to }}</td>
                                                @endif
                                        </tr>
                                        {{--<tr>--}}
                                            {{--<td>Delivery Time:</td>--}}
                                            {{--<td>60 minutes</td>--}}
                                        {{--</tr>--}}
                                        <tr>
                                            <td>{{trans('website.deliveryCharges')}} :</td>
                                            <td>{{trans('website.kd')}} {{ count($selected_area)? $selected_area->delivery_charges:$shop->deliver_charge }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{trans('website.payment')}} :</td>
                                            <td><img src="/assets/website/images/visa.jpg"> <img src="/assets/website/images/master_card.jpg"> <img src="/assets/website/images/knet.jpg">  	</td>
                                        </tr>
                                        <tr>
                                            <td>  {{trans('website.Rating')}}
</td>
                                            <td><div class="stars_main"> <div id="stars"   data-id="{{$shop->id}}"  data-model="shop" data-rating="{{$shop->rating}}" class="starrr"></div></td>
                                        </tr>
                                        <tr>
                                            <td>{{trans('website.cuisines')}}:
 </td>
                                            <td>

                                                @if(isset($shop->shop_cuisine) && count($shop->shop_cuisine))
                                                    @foreach($shop->shop_cuisine as $shop_cuisine)
                                                    {{$shop_cuisine->cuisine->{'name_'.config('app.locale')} }} .
                                                    @endforeach

                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" colspan="2">
                                                <a href="/shop/menuItem?shop_id={{$shop->id}}" class="btn btn-info btn-lg"> {{trans('website.showMenu')}}  </a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </section>
                        </div>
                        <div class="col-sm-4">
                            <div class="hotels-list">
                                <img src="{{$shop->img}}" alt="" style="display: block;margin:auto;border-radius:100%; width:150px;height:150px;">
                                <h4>{{trans('website.mostSellingCoffeees')}}</h4>
                               <ul>
                                   @foreach($mostSellingCoffeees as $coffee_id=>$coffee)
                                    <li><a href="/shop/menuItem?shop_id={{$shop->id}}&id={{$coffee_id}}">{{$coffee}}</a></li>
                                   @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                @include('website.partials.asideMenu')
            </div>
        </div>


    </section>





@stop