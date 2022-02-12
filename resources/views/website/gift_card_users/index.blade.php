@extends('website.layouts.main')

@section('title', trans('general.gift_card_users').'  '.trans('website.pages_title'))
@section('content')



    <section class="main-wrapper">
        <article class="container">


            <!--inner area-->
            <section class="inner-wrapper">

                <div class="caption-sec">
                    <h1>{{ trans('website.giftCard') }}</h1>
                </div>

                <div class="inner-content">
                    <div class="giftcard-container">
                        <div class="row">
                        

                            @if(count($oResults))
                                @foreach($oResults as $oResult)

                                    <div class="col-md-4 col-sm-6 oneGiftCard" id="oneGiftCard_{{$oResult->gift_card_id}}">
                                        <div class="v-gift">
                                            <div class="gift-img">
                                                <img src="{{$oResult->gift_card->img}}" width="370" height="220" alt="">
                                                <div class="gift-percent">{{$oResult->gift_card->discount}} @if($oResult->gift_card->discount_type ==config('array.gift_card_discount_type_percentage_index')) % @else {{trans('website.kd')}}@endif </div>
                                            </div>
                                            <div class="gift-head">
                                                <h3><span class="cartPrice">{{$oResult->price}}</span>  {{trans('website.kd')}} <span class="cartTitle">{{$oResult->gift_card->{'title_'.config('app.locale')}  }}</span> </h3>
                                                <h4>{{$oResult->gift_card->{'description_'.config('app.locale')}  }}</h4>

                                                <a href="{{route('website.gift_card.send')}}?users_gift_card_id={{$oResult->id}}"
                                                id="send_cart_{{$oResult->id}}" data-success-place="#generalPopupModel  .modal-body"
                                                class=" aWithResponse" >{{ trans('website.sendTofriend') }}</a>
                                                @if($oResult->status == config('array.gift_card_users_status_pending_index'))
                                                <a href="{{route('website.gift_card.confirmPayment')}}?users_gift_card_id={{$oResult->id}}">{{ trans('website.complePayment') }}</a>
                                                    @endif
                                            </div>

                                        </div>
                                    </div>


                                @endforeach
                            @endif


                        </div>



                    </div>










                </div>


            </section>
            <!--inner area-->

        </article>
    </section>



<style type="text/css">
    .oneGiftCard{ min-height: 400px;}
</style>


@endsection