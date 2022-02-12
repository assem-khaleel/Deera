


@if(Input::has('mobileRequest'))

    {!! HTML::style('/assets/website/css/Selectyze.jquery.css') !!}
    {!! HTML::style('/assets/website/css/bootstrap-datetimepicker.css') !!}

    {!! HTML::style('/assets/website/css/font-awesome.css') !!}


    {!! HTML::style('/assets/website/css/main-style.css') !!}
    {!! HTML::style('/assets/website/css/bootstrap.css') !!}
    {!! HTML::style('/assets/website/css/bootstrap-theme.css') !!}
    {!! HTML::style('/assets/website/css/Selectyze.jquery.css') !!}
    {!! HTML::style('/assets/website/css/responsiveslides.css') !!}
    {!! HTML::style('/assets/website/css/themes.css') !!}
    {!! HTML::style('/assets/website/css/reveal.css') !!}
    {!! HTML::style('/assets/website/css/custom_maid.css') !!}
    {!! HTML::style('/assets/website/css/sara.css') !!}
    {{--{!! HTML::style('/assets/website/css/emadcss-en.css') !!}--}}


    {!! HTML::style('/assets/website/css/emadcss-en.css') !!}


    {!! HTML::style('/assets/website/css/additional.css') !!}








    {!! HTML::script('/assets/website/js/jquery.min.js') !!}
    {!! HTML::script('/assets/website/js/bootstrap.js') !!}
    {!! HTML::script('/assets/website/js/Selectyze.jquery.js') !!}
    {!! HTML::script('/assets/website/js/responsiveslides.min.js') !!}
    {!! HTML::script('/assets/website/js/jquery.reveal.js') !!}


    {!! HTML::script('/assets/website/lib/js/formWithResponse.js') !!}

    {!! HTML::script('/assets/website/js/custom.js') !!}
    {!! HTML::script('/assets/website/js/Selectyze.jquery.js') !!}

    {!! HTML::script('/assets/website/js/additional.js') !!}


    {!! HTML::script('/assets/website/js/emad.js') !!}
@endif



















<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>

<div class="full-width cartHeading">
    <h2><img src="/assets/website/images/cart2.png" alt="cart"/>  {{ trans('website.Mycart') }} </h2>
</div><!-- /.full-width -->

@if(count($giftCards))

    <div class="oneOrder" id="oneOrder_gift_xxx">
    {{--*/$total=0;/*--}}
@foreach($giftCards as $giftCard)
    {{--*/$total+=$giftCard->gift_card->price * $giftCard->quantity;/*--}}


    <div class="removable full-width oneCart" id="oneCart_gift_{{$giftCard->id}}"  data-price="{{$giftCard->gift_card->price}}">
        <div class="col-md-3 col-sm-3 col-xs-12 img">
            <img src="{{$giftCard->gift_card->img}}"  style="height:90px;" alt="pop"/>
        </div>
        <!-- /.col-md-3 -->
        <div class="col-md-5 col-sm-5 col-xs-6 sech2 width100">
            <h2>{{$giftCard->gift_card->{'title_'.config('app.locale')}  }} </h2>
        <br>
            <div class="numb-box">


                {!! Form::open( [
                    'method' => 'PATCH',
                    'url' => ['/gift_card_users', $giftCard->id],
                     'id'=>'updateGiftCardCartForm_'.$giftCard->id,
            'data-success-function'=>'updateCartWhenSuccess',
            'data-wait-place'=>'#updateMessagesPlace_'.$giftCard->id,
'onsubmit'=>'formWithResponse("#updateGiftCardCartForm_'.$giftCard->id.'");',
'data-order_id'=>'gift_xxx'

                ]) !!}
                <button class="down" type="submit"
                        onclick="if($('#gift_quantity_{{$giftCard->id}}').val()*1 > 1){$('#gift_quantity_{{$giftCard->id}}').val($('#gift_quantity_{{$giftCard->id}}').val()*1 -1);}countTotalPrice('gift_xxx');"></button>
                <input type="text" id="gift_quantity_{{$giftCard->id}}" name="quantity" oninput="countTotalPrice();"  class="quantity" value="{{$giftCard->quantity}}"/>
                <button class="up" type="submit"
                        onclick="$('#gift_quantity_{{$giftCard->id}}').val($('#gift_quantity_{{$giftCard->id}}').val()*1 +1);countTotalPrice('gift_xxx' );"></button>
                <span style="font-size: 8px; display: none;" id="updateMessagesPlace_{{$giftCard->id}}"></span>
                <input type="hidden" name="gift_card_id" value="{{$giftCard->gift_card->id}}">
                <input type="hidden" name="payment_type" value="0">
                {!! Form::close() !!}
            </div>
            <!-- /.numbox -->
        </div>
        <!-- /.col-md-5 -->
        <div class="col-md-4 col-sm-4 col-xs-6 last_remove">


            {!! Form::open(['url'=>['/gift_card_users/delete',$giftCard->id ],'method'=>'get',
            'id'=>'deleteGiftCartForm_'.$giftCard->id,
            'data-success-function'=>'deleteWhenSuccess',
            'data-success-delete'=>'#oneCart_gift_'.$giftCard->id,
            'data-wait-place'=>'#deleteMessagesPlace_'.$giftCard->id,
'onsubmit'=>'formWithResponse("#deleteGiftCartForm_'.$giftCard->id.'");',
'data-order_id'=>'gift_xxx'
            ]) !!}

            <a onclick="formWithResponse('#deleteGiftCartForm_{{$giftCard->id}}');" style="float:right;" href="#" class="remove"> <img src="/assets/website/images/close2.png" alt="close"/>  <span style="display:none;" id="deleteMessagesPlace_{{$giftCard->id}}"></span></a>


            <h2><span> {{$giftCard->gift_card->price}} </span> </h2>
            {!! Form::close() !!}


        </div>
        <!-- .col-md-4 -->
    </div><!-- /.removable -->

@endforeach




    <div class="gray_drop2 full-width">



        <h2> {{ trans('website.TOTAL') }} <span ><b class="orderSubTotal"> {{number_format(($total*1 >= 0 ? $total*1:0),3)}}</b>{{trans('website.kd')}}</span></h2>
    </div><!-- /.gray_drop -->

    <div class="col-xs-12 totalCart">
        <button onclick="window.location.href='/gift-card/checkout'" type="button" class="width100">  {{ trans('website.placeOrder') }}</button>
    </div><!-- /.totalCart -->

    </div>
    </div>

    <br>


@endif

@if(count($oOrders))

    @foreach($oOrders as $oOrder)

        <div class="oneOrder" id="oneOrder_{{$oOrder->id}}">

            {{-- #order ( #{{$oOrder->id}} ) <a href="/shop/menuItem?shop_id={{$oOrder->shop_id}}" >trans('website.continue') }} ...</a> --}}

<div class="full-width"  @if(!Input::has('mobileRequest')) min-height480" @endif>

    @if($oOrder->cart)   <h4 > <strong style="padding-left: 17px">{{isset( $oOrder->shop->name_en)?$oOrder->shop->name_en:'' }} </strong> </h4>

        @foreach($oOrder->cart as $cart)

            <div class="removable full-width oneCart" id="oneCart_{{$cart->id}}" data-size="{{$cart->size_id}}" data-price="{{$cart->unit_price}}" data-option="{{$cart->product_option_one_total()}}">
                <div class="col-md-3 col-sm-3 col-xs-12 img">
                    <img src="{{$cart->coffee->img}}"  style="height:90px;" alt="pop"/>
                </div>
                <!-- /.col-md-3 -->
                <div class="col-md-5 col-sm-5 col-xs-6 sech2 ">
                    <h2>{{$cart->coffee->{'name_'.config('app.locale')}  }}
                        {{ isset( $cart->size)? ' ( '.$cart->size->{'name_'.config('app.locale')}.' ) ':'' }} </h2>

                </div>
                <br> 
                <!-- /.col-md-5 -->
                <!-- <div class="col-md-4 col-sm-4 col-xs-6 last_remove"> -->
<!-- <div class="col-md-3 last_remove">
                    {!! Form::open(['url'=>['/cart/delete',$cart->id ],'method'=>'get',
                    'id'=>'deleteCartForm_'.$cart->id,
                    'data-success-function'=>'deleteWhenSuccess',
                    'data-success-delete'=>'#oneCart_'.$cart->id,
                    'data-wait-place'=>'#deleteMessagesPlace_'.$cart->id,
                    'data-quantity'=> $cart->quantity,
'onsubmit'=>'formWithResponse("#deleteCartForm_'.$cart->id.'");',
'data-order_id'=>$oOrder->id
                    ]) !!}

                    <a onclick="formWithResponse('#deleteCartForm_{{$cart->id}}');" style="float:right;" href="#" class="remove"> <img src="/assets/website/images/close2.png" alt="close"/>  <span style="display:none;" id="deleteMessagesPlace_{{$cart->id}}"></span></a>


                    <h2><span> {{number_format((floatval($cart->unit_price)*1 >=0 )? floatval($cart->unit_price)*1:0 ,3)}}</span>{{trans('website.kd')}}</h2>
                    {!! Form::close() !!}
                    
                
                </div> -->
<div class="col-md-9" style="overflow: hidden" >

    <div class="numb-box">


        {!! Form::open( [
            'method' => 'PATCH',
            'url' => ['/cart', $cart->id],
             'id'=>'updateCartForm_'.$cart->id,
    'data-success-function'=>'updateCartWhenSuccess',
    'data-wait-place'=>'#updateMessagesPlace_'.$cart->id,
'onsubmit'=>'formWithResponse("#updateCartForm_'.$cart->id.'");return false;',
'data-order_id'=>$oOrder->id,

    'data-cart_id'=>$cart->id,
        ]) !!}
        <button class="down" name="down" type="submit"
                onclick="if($('#quantity_{{$cart->id}}').val()*1 > 1){$('#quantity_{{$cart->id}}').val($('#quantity_{{$cart->id}}').val()*1 -1);}countTotalPrice({{$oOrder->id}});"></button>

        <input type="text" id="quantity_{{$cart->id}}" name="quantity" oninput="countTotalPrice();"  class="quantity" value="{{$cart->quantity}}" readonly/>

        <button class="up" name="up" type="submit"
                onclick="$('#quantity_{{$cart->id}}').val(parseFloat($('#quantity_{{$cart->id}}').val())*1 +1);countTotalPrice({{$oOrder->id}});"></button>
        <span style="font-size: 8px; display: none;" id="updateMessagesPlace_{{$cart->id}}"></span>
        {!! Form::close() !!}
    </div>
    <!-- /.numbox -->

    <div class=" last_remove" style="z-index: 99">
                    {!! Form::open(['url'=>['/cart/delete',$cart->id ],'method'=>'get',
                    'id'=>'deleteCartForm_'.$cart->id,
                    'data-success-function'=>'deleteWhenSuccess',
                    'data-success-delete'=>'#oneCart_'.$cart->id,
                    'data-wait-place'=>'#deleteMessagesPlace_'.$cart->id,
                    'data-quantity'=> $cart->quantity,
'onsubmit'=>'formWithResponse("#deleteCartForm_'.$cart->id.'");',
'data-order_id'=>$oOrder->id
                    ]) !!}

                    <a onclick="formWithResponse('#deleteCartForm_{{$cart->id}}');" style="float:right;" href="#" class="remove"> <img src="/assets/website/images/close2.png" alt="close"/>  <span style="display:none;" id="deleteMessagesPlace_{{$cart->id}}"></span></a>


                    <h2><span> {{number_format(floatval($cart->unit_price)*1>=0 ? floatval($cart->unit_price)*1:0,3)}}</span>  {{trans('website.kd')}}</h2>
                    {!! Form::close() !!}
                    
                    
                      
                    <!-- /.numbox -->
                </div>
</div>

<div class="col-md-9">

<p style="clear:left;">{{$cart->special_request}}</p>

</div>

                <!-- .col-md-4 -->
            </div><!-- /.removable -->
        @endforeach
    @endif

</div><!-- /.min-height480 -->


<div class="gray_drop2 full-width">
    <h2> {{ trans('website.subTotal') }} <span ><b class="orderSubTotal"> 0.00</b>  {{trans('website.kd')}}</span></h2>



    @if( ($oOrder->deliver_type==config('array.shop_deliver_type_pickup_index')))

        <h2> {{ trans('website.serviceFees') }}    <span><b class="orderDeliveryFees"> {{number_format((isset($oOrder->shop->service_charge) && $oOrder->shop->service_charge*1 > 0)? $oOrder->shop->service_charge*1:0 ,3)}}</b>{{trans('website.kd')}}</span></h2>

    @else
        <h2> {{ trans('website.delevaryFees') }}    <span><b class="orderDeliveryFees"> {{number_format((isset($oOrder->shop->deliver_charge) && $oOrder->shop->deliver_charge*1 > 0)? $oOrder->shop->deliver_charge*1:0 ,3)}}</b>{{trans('website.kd')}}</span></h2>
    @endif



    <h2>Add Ons<span><b class="orderAdditional">{{number_format(floatval($oOrder->product_option_total()),3)}}</b> {{trans('website.kd')}}</span></h2>

    <h2>{{ trans('website.TOTAL') }} <span><b class="orderTotal">0.00</b> {{trans('website.kd')}}</span></h2>
</div><!-- /.gray_drop -->

<div class="col-xs-12 totalCart">
    <button onclick="window.location.href='/order?order_id={{$oOrder->id}}'" type="button" class="width100">  {{ trans('website.placeOrder') }}</button>
</div><!-- /.totalCart -->

</div>

        <br>
@endforeach

    @else


 <h3 style="text-align:center;">  Your cart is empty. Click <a href="/"> here</a> to continue ordering.</h3>

@endif

<script>
    window.deleteWhenSuccess=function(form, targetPlace, data){

        var removeHtml = form.data('success-delete');
        removeHtml = ( typeof removeHtml === "undefined") ? form : $(removeHtml);

        removeHtml.remove();
        
if($("#oneOrder_"+form.data('order_id')+" .oneCart").length ==0){
    $("#oneOrder_"+form.data('order_id')).hide();
}
       countTotalPrice(form.data('order_id'));



        $('.headerCartIcon').attr('data-quentity', ($('.headerCartIcon').attr('data-quentity')*1 -  form.attr('data-quantity')*1  ));

    }

    window.updateCartWhenSuccess=function(form, targetPlace, data){
        data= JSON.parse(data);

        $(form.data('wait-place')).html('');

        countTotalPrice(form.data('order_id'));

        var cart_id=form.data('cart_id');

        $('.headerCartIcon').attr('data-quentity', ($('.headerCartIcon').attr('data-quentity')*1 + (data.upOrDown == 'down'? -1:1) ));

    }



    function countTotalPrice($order_id) {

        var subTotal=0;
        var product_option_total=0;
        $('#oneOrder_'+$order_id+' .oneCart').each(function(){
            var price=$(this).data('price');
            var quantity=$(this).find('.quantity').val();
var option=$(this).data('option')*1;
            subTotal+=price *quantity;
            product_option_total+=option *quantity;

        });

        $('#oneOrder_'+$order_id+' .orderSubTotal').text(parseFloat(subTotal ).toFixed(3));



       $('#oneOrder_'+$order_id+' .orderAdditional').text(product_option_total.toFixed(3));
        if(product_option_total == 0){ $('#oneOrder_'+$order_id+' .orderAdditional').parent().parent().hide();}
        $('#oneOrder_'+$order_id+' .orderTotal').text(parseFloat((product_option_total+subTotal + ($('#oneOrder_'+$order_id+' .orderDeliveryFees').text()*1))).toFixed(3));


    }


    @if(count($oOrders))

        @foreach($oOrders as $oOrder)
        countTotalPrice({{$oOrder->id}});
    @endforeach
        @endif
</script>
