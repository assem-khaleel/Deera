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

                <div id="addShopWatingPlace" style="text-align: center;"></div>
                @if(count($oGiftCardResults))
                    @foreach($oGiftCardResults as $oGiftCardResult)

                <div class="col-md-4 col-sm-6 oneGiftCard" id="oneGiftCard_{{$oGiftCardResult->id}}">
                    <div class="v-gift">
                        <div class="gift-img">
                            <img src="{{$oGiftCardResult->img}}" width="370" height="220" alt="">
                            <div class="gift-percent">{{$oGiftCardResult->discount}} @if($oGiftCardResult->discount_type ==config('array.gift_card_discount_type_percentage_index')) % @else{{trans('website.kd')}} @endif </div>
                        </div>
                        <div class="gift-head">
                            <h3><span class="cartPrice">{{$oGiftCardResult->price}}</span> {{trans('website.kd')}}<span class="cartTitle">{{$oGiftCardResult->{'title_'.config('app.locale')}  }}</span> </h3>
                            <h4>{{$oGiftCardResult->{'description_'.config('app.locale')}  }}</h4>
                        </div>
                        <div class="gift-more"><a class="aWithResponse" id="fvkm_{{$oGiftCardResult->id}}" href="{{route('website.gift_card.addToCart')}}?gift_cart_id={{$oGiftCardResult->id}}" data-success-place='#generalPopupModel  .modal-body' onclick="/*formWithResponse('#addCardToCart_{{$oGiftCardResult->id}}')*/"></a></div>

                    </div>
                </div>



                        {!! Form::model($request,
                             [
      'method' => 'POST',
      'url' => '/gift_card_users',
      'class' => '  formWithResponse',
      'id'=>'addCardToCart_'.$oGiftCardResult->id ,
      'onsubmit'=>"formWithResponse('#addCardToCart_"+$oGiftCardResult->id +"');",
      'data-success-function'=>'showAddShopSuccessMessage',
      'data-success-place'=>'#addShopWatingPlace',
      'data-wait-place'=>'#addShopWatingPlace',
       'style'=>'display:none;'

  ]) !!}


                        <script>

                            window.showAddShopSuccessMessage = function (form, targetPlace, data) {
                                $(form.data('wait-place')).hide();
                                var html = '<div style="text-align:center;padding:10px;color:#08a208;padding-bottom: 50px;    font-size: 24px;"> {{trans('website.addGiftCardSuccess')}}</div>';
                                $('#generalPopupModel  .modal-body').html(html);

                            }
                        </script>
                        <input id="rb4" name="payment_type" value="{{config('array.payment_type_knet_index')}}"  type="hidden">
                        <input id="rb4" name="gift_card_id" value="{{$oGiftCardResult->id}}"  type="hidden">
                        {!! Form::close() !!}


                    @endforeach
                @endif


            </div>


            {!! Form::model($request,['url' => '/gift_card_users', 'class' => ' ','id'=>'paymentSummaryForm' ,'style'=>'display:none;']) !!}
@include('common.partials.messages')

            <div class="row" >
                <div class="col-md-12">
                    <div class="logwrapp">
                        <div class="sign_in">
                            <h3> {{ trans('website.orderSummary') }}</h3>

                            <div class="summaryy">
                                <div id="summaryItemsList">

                                </div>
                                <h4>{{ trans('website.subTotal') }}	<span id="finalSubTotal">0.000 {{trans('website.kd')}}</span></h4>

                                <h4> {{ trans('website.Total') }}<span id="finalTotal">0.000 {{trans('website.kd')}}</span></h4>
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
                                    <input id="rb4" name="payment_type" value="{{config('array.payment_type_knet_index')}}"  type="radio">
                                    <label for="rb4"><img src="/assets/website/images/knet-icon.png" alt="">{{ trans('website.KNET') }}</label>
                                </div>

                                <div class="custom-radio v-custom-radio">
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
            <input type="submit" value="{{ trans('website.purchase') }}" class="sub_btn">

            {!! Form::close()  !!}

        </div>










    </div>


</section>
<!--inner area-->

</article>
    </section>











    <div style="display:none;" id="hiddenCardTemplate">

        <div class="full-width big_pop">
            <img src="images/pop_big.jpg" alt="pop" />
            <div class="full-width pop_contents">
                <h2>Con Helado <span>2.000 KD</span></h2>
                <div class="quantity">
                    <label>Quantity</label>
                    <div class="numb-box">
                        <button class="down"></button>
                        <input type="text" value="1" />
                        <button class="up"></button>
                    </div><!-- /.numbox -->
                </div><!-- /.quantity -->

                <div class="gray_drop full-width">
                    <h2>Size <span class="requrd">(Required)</span></h2>
                </div><!-- /.gray_drop -->

                <div class="full-width pad15">
                    <div class="custom-radio">
                        <input id="rb1" name="needsame" type="radio">
                        <label for="rb1">14 OZ</label>
                        <span>2.250 KD</span>
                    </div><!-- /.custom_radio -->

                </div>

                <div class="full-width pad15">
                    <div class="custom-radio">
                        <input id="rb2" name="needsame" type="radio">
                        <label for="rb2">16 OZ</label>
                        <span>2.250 KD</span>
                    </div><!-- /.custom_radio -->

                </div><!-- /.full-width -->

                <div class="gray_drop full-width">
                    <h2>Special Request <span>(Optional)</span></h2>
                </div><!-- /.gray_drop -->

                <textarea class="full-width txt_noneborder" placeholder="Type here..."></textarea>

                <div class="col-xs-12 totalCart">
                    <h2 class="tot-bold">Total 	<span>4.250 KD</span></h2>
                    <button type="button" data-toggle="modal" data-target="#myModalTwo" class="dismissed">Add To Cart</button>
                </div><!-- /.totalCart -->


            </div><!-- /.pop_contents -->
        </div><!-- /.big_pop-->



    </div>











@endsection

@section('script')
    @parent



    <script>

function showAddCardToCartPopup(){return ;
        var html=$('#hiddenCardTemplate').html();
        $('#generalPopupModel  .modal-body').html(html);
        $('#generalPopupModel').modal('show');

}

        setTimeout('showAddCardToCartPopup();',500);

    </script>
    @endsection