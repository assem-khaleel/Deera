
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>

    <div class="full-width cartHeading">
        <h2><img src="/assets/website/images/summary2.png" alt="cart" />                                             {{trans('website.orderSummary')}}
</h2>
    </div><!-- /.full-width -->

    <div class="full-width min-height480">
        <div class="track_ul full-width">
            <ul>
                <li class="@if(config('array.order_status_delivering_index')==$oOrderResult->status
                || config('array.order_status_delay_index')==$oOrderResult->status
                 || config('array.order_status_ready_index')==$oOrderResult->status
                 ||config('array.order_status_preparing_index')==$oOrderResult->status
                  ||config('array.order_status_payed_index')==$oOrderResult->status
                   )==$oOrderResult->status) active @endif"> {{trans('website.orderRecieved')}}</li>


                <li class="@if(config('array.order_status_delivering_index')==$oOrderResult->status
                || config('array.order_status_delay_index')==$oOrderResult->status
                 || config('array.order_status_ready_index')==$oOrderResult->status
                 ||config('array.order_status_preparing_index')==$oOrderResult->status ) active @endif">{{trans('website.yourOrderprepared')}} </li>


                <li class=" @if(config('array.order_status_delivering_index')==$oOrderResult->status
                || config('array.order_status_delay_index')==$oOrderResult->status
                 || config('array.order_status_ready_index')==$oOrderResult->status) active @endif"> {{trans('website.orderPicked')}}</li>


                <li class=" @if(config('array.order_status_delivering_index')==$oOrderResult->status || config('array.order_status_delay_index')==$oOrderResult->status ) active @endif">{{trans('website.yourOrderontheway')}}
                    @if(config('array.order_status_delivering_index')==$oOrderResult->status)
                        <button  onclick="window.location.href='/admin/order-map?order_id={{$oOrderResult->id}}&track=1'"> {{trans('website.track')}} </button></li>
                @endif
                <li>{{trans('website.delivered')}}</li>
            </ul>
        </div><!-- /.track_ul -->
    </div><!-- /.min-height480 -->



      