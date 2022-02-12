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
                        <div class="gift-more"><a href="javascript:void(0)" onclick="addGiftCart({{$oGiftCardResult->id}})">+</a></div>
                    </div>
                </div>

<script>

    function sumTotal(){

        var total=0;
        $('.summaryPrice').each(function(){
            total+= $(this).text()*1;

        });
        if(total>0){$('#paymentSummaryForm').show();}else{   $('#paymentSummaryForm').hide(); }
        $('#finalSubTotal,#finalTotal').html(total);
    }

    function addGiftCart(cartId){
        var cartNode=$('#oneGiftCard_'+cartId);
        var price=cartNode.find('.cartPrice').text();
        var percent=cartNode.find('.gift-percent').text();
        var title=cartNode.find('.cartTitle').text();

        var html='<div id="summaryOneItem_'+cartId+'">' +
                '<input type="hidden" name="gift_card_id[]" value="'+cartId+'">' +
                ' <h4>'+title+' - '+percent+'<span > <span class="summaryPrice">'+price+'</span> {{trans('website.kd')}} </span></h4>' +
                '<img src="/assets/website/images/close2.png" alt="close" onclick="removeGiftCart('+cartId+');" style="float:right;" /> <br><hr/></div>';
       $('#summaryItemsList').append(html);
        sumTotal();
    }
    function removeGiftCart(cartId){
        var cartNode=$('#summaryOneItem_'+cartId);
        cartNode.remove();
        sumTotal();
    }
</script>


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






@endsection