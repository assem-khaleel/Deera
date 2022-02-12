
<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>

<div id="popupWatingDiv"></div>
{!! Form::model($request,[
'url'=>'/cart',
'onsubmit'=>'formWithResponse("#addToCartForm_'.$oCoffee->id.'");return false;',
'class'=>'formWithResponse',
'data-wait-place'=>'#popupWatingDiv',
'data-success-place'=>'#generalPopupModel  .modal-body',
'data-success-function'=>'removePopupWinSuccess',
'id'=>'addToCartForm_'.$oCoffee->id, ]) !!}
<script>
    window.removePopupWinSuccess=function(a,b,c){
        $('#generalPopupModel').modal('hide');
        @if(!isset(current_user()->getUser()->id))
        window.location.reload();
        @endif
$('#headerCartIcon').attr('data-quentity',($('#headerCartIcon').attr('data-quentity')*1)+$('#quantity').val()*1);
        $('#headerCartIcon').removeClass('hideAfterClass');

    }
</script>
<div class="full-width big_pop">
    <img src="{{$oCoffee->img }} " alt="pop" />
    <div class="full-width pop_contents">
        <h2>{{$oCoffee->{'name_'.config('app.locale')} }} <span id="unit_price">{{$oCoffee->priceWithDiscount() }} </span></h2>
        <div class="quantity">
            <label>   {{ trans('website.Quantity') }}</label>
            <div class="numb-box1">
                <button class="down" type="button" onclick="if($('#quantity').val()*1 > 1){$('#quantity').val($('#quantity').val()*1 -1);}countTotalPrice();"></button>
                <input type="text" id="quantity" name="quantity" oninput="countTotalPrice();" value="1" readonly />
                <button class="up" type="button"  onclick="$('#quantity').val($('#quantity').val()*1 +1);countTotalPrice();"></button>
            </div><!-- /.numbox -->
        </div><!-- /.quantity -->

        @if(isset($oCoffee->size) && count($oCoffee->size))

            <div class="gray_drop full-width">
                <h2>  {{ trans('website.Size') }} <span> </span></h2>
            </div><!-- /.gray_drop -->

{{--*/$i=0;/*--}}
        @foreach($oCoffee->size as $size)
        <div class="full-width pad15">
            <div class="custom-radio">
                <input id="size_{{$size->id }}" name="size_id" onchange="countTotalPrice();" value="{{$size->id }}" type="radio" @if($i==0) checked @endif {{--*/$i++;/*--}}>
                <label for="size_{{$size->id }}">{{$size->{'name_'.config('app.locale')} }}</label>

                <span><b class="option_price"> {{number_format(($size->price*1 >=0 ? $size->price*1 :0),3) }}</b>{{trans('website.kd')}}</span>

            </div><!-- /.custom_radio -->

        </div>
            @endforeach
@endif



        @if(isset($oCoffee->additional) && count($oCoffee->additional))

            <div  id="additionalContainerDiv">
            <div class="gray_drop full-width">
                <h2>  Add Ons <span> </span></h2>
            </div><!-- /.gray_drop -->

            {{--*/$i=0;/*--}}
            @foreach($oCoffee->additional as $additional)
                <div class="full-width pad15">
                    <div class="custom-checkbox">
                        <input id="additional_{{$additional->id }}" name="additional[{{$additional->id }}]" onchange="countTotalPrice();" value="{{$additional->price }}" type="checkbox"  {{--*/$i++;/*--}}>
                        <label for="additional_{{$additional->id }}">{{$additional->{'name_'.config('app.locale')} }}</label>

                        <span><b class="additional_option_price" id="b_additional_option_price_{{$additional->id }}"> {{number_format((floatval($additional->price) >=0 ? floatval($additional->price):0),3) }}</b>{{trans('website.kd')}}</span>

                    </div><!-- /.custom_radio -->

                </div>
            @endforeach
    </div>
        @endif


        <div class="gray_drop full-width">
            <h2> {{ trans('website.specialRequest') }} <span>({{ trans('website.Optional') }})</span></h2>
        </div><!-- /.gray_drop -->


        <div class="form-group {{ $errors->has("coffee_id") ? "has-error" : ""}} clearfix ">
            <div>
        <textarea class="full-width txt_noneborder" name="special_request" placeholder="{{ trans('website.typeHere') }} ... "></textarea>
</div></div>


        <div class="col-xs-12 totalCart">
            <h2> {{ trans('website.TOTAL') }} 	<span ><b id="oneCartTotal">{{$oCoffee->priceWithDiscount()}} </b> {{trans('website.kd')}}</span></h2>

            {!! Form::hidden('coffee_id',$oCoffee->id) !!}
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


var x = price*quantity;

var additionalPrice=0;

    $('#additionalContainerDiv input[type=checkbox]:checked').each(function(){

        additionalPrice+=$(this).attr('value')*quantity;
    });

    x+=additionalPrice;
$('#oneCartTotal').html(x.toFixed(3));


}
countTotalPrice();
</script>