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


            {!! Form::model($request,['url' => '/gift_card_users', 'class' => ' ','id'=>'paymentSummaryForm' ]) !!}
@include('common.partials.messages')

            <div class="row" >
                <div class="col-md-12">
                    <div class="logwrapp">
                        <div class="sign_in">
                            <h3> {{ trans('website.orderSummary') }}</h3>

                            <div class="summaryy">
                                <div id="summaryItemsList">


                                    @if(count($giftCards))
                                        {{--*/$total=0;/*--}}
                                        @foreach($giftCards as $giftCard)
                                            {{--*/$total+=$giftCard->gift_card->price * $giftCard->quantity;/*--}}
                                    <div id="summaryOneItem_'+cartId+'">
                                        <input type="hidden" name="gift_card_id[]" value="'+cartId+'">
                                        <h4>{{$giftCard->gift_card->{'title_'.config('app.locale')}  }} <span >
                                                <span class="summaryPrice">{{$giftCard->gift_card->price}} X {{$giftCard->quantity}}</span>  </span>
                                        </h4>
                                        <br><hr/></div>

                                        @endforeach
                                        @endif

                                </div>


                                <h4> {{ trans('website.total') }}<span id="finalTotal">{{$total}} {{trans('website.kd')}}</span></h4>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="logwrapp">
                        <div class="sign_in">
                            <h3>{{ trans('website.paymentMethod') }} </h3>

                            <div class="payy">


                                <div class="custom-radio v-custom-radio">
                                    <input id="rb4" name="payment_type" value="{{config('array.payment_type_knet_index')}}"  type="radio" checked>
                                    <label for="rb4"><img src="/assets/website/images/knet-icon.png" alt="">{{ trans('website.KNET') }}</label>
                                </div>

                                <div class="custom-radio v-custom-radio" style="display: none;">
                                    <input id="rb5" name="payment_type" value="{{config('array.payment_type_visa_index')}}" type="radio">
                                    <label for="rb5"><img src="/assets/website/images/visa-icon.png" alt="">
                                {{ trans('website.creditCard') }}

                                     </label>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <input type="button" value="{{ trans('website.purchase') }}" onclick="window.location.href='https://www.knetpay.com.kw/CGW/hppaction?formAction=com.aciworldwide.commerce.gateway.payment.action.HostedPaymentPageAction&?PaymentID=1761634260872010';" class="sub_btn">

            {!! Form::close()  !!}

        </div>










    </div>


</section>
<!--inner area-->

</article>
    </section>






@endsection