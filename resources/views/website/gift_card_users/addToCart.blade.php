

<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>

<div id="popupWatingDiv"></div>


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
'style'=>''

]) !!}
<script>
    window.removePopupWinSuccess=function(a,b,c){
        $('#generalPopupModel').modal('hide');
        @if(!isset(current_user()->getUser()->id))
        window.location.reload();
        @endif
$('#headerCartIcon').attr('data-quentity',($('#headerCartIcon').attr('data-quentity')*1)+$('#quantity').val()*1);

    }
</script>
<div class="full-width big_pop">
    <img src="{{$oGiftCardResult->img }} " alt="pop" />
    <div class="full-width pop_contents">
        <h2>{{$oGiftCardResult->{'title_'.config('app.locale')}  }} <span id="unit_price">{{$oGiftCardResult->price }} </span></h2>
        <div class="quantity">
            <label>   {{ trans('website.Quantity') }}</label>
            <div class="numb-box">
                <button class="down" type="button" onclick="if($('#quantity').val()*1 > 1){$('#quantity').val($('#quantity').val()*1 -1);}countTotalPrice();"></button>
                <input type="text" id="quantity" name="quantity" oninput="countTotalPrice();" value="1" />
                <button class="up" type="button"  onclick="$('#quantity').val($('#quantity').val()*1 +1);countTotalPrice();"></button>
            </div><!-- /.numbox -->
        </div><!-- /.quantity -->








        <div class="col-xs-12 totalCart">
            <h2> {{ trans('website.TOTAL') }} 	<span ><b id="oneCartTotal">{{$oGiftCardResult->price }} </b> {{trans('website.kd')}}</span></h2>


            <input id="rb4" name="payment_type" value="{{config('array.payment_type_knet_index')}}"  type="hidden">
            <input id="rb4" name="gift_card_id" value="{{$oGiftCardResult->id}}"  type="hidden">

            <button type="submit"  class="dismissed">{{ trans('website.addTocart') }}     </button>
            <div style="clear:both"></div>
        </div><!-- /.totalCart -->
        <div style="clear:both"></div>

    </div><!-- /.pop_contents -->
    <div style="clear:both"></div>
</div><!-- /.big_pop-->
<br>
<div style="clear:both"></div>
<br>
{!! Form::close() !!}
<script>
    function countTotalPrice(){
        var quantity=$('#quantity').val()*1;
        if(quantity <1){quantity=1;$('#quantity').val(quantity);}

        var price=$('#unit_price').text()*1;

        if($('[name="size_id"]:checked').length > 0){price=$('[name="size_id"]:checked').parent().find('.option_price').text()*1;}

        $('#oneCartTotal').html(price*quantity);
    }
    countTotalPrice();
</script>



































