@extends('common.layouts.main')
@section('title', trans('order.order'))
@section('content')


    {{--*/

    $canEdit=canAccess('admin.order.edit');
    $canDestroy=canAccess('admin.order.destroy');


    $canCartRelation=canAccess('admin.cart.relation');
    $canCartEdit=canAccess('admin.cart.edit');
    $canCartDestroy=canAccess('admin.cart.destroy');
    $canCartCreate=canAccess('admin.cart.create');
    $canCartShow=canAccess('admin.cart.show');
    /*--}}





    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.order') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.order') }}</a></li>
                        <li class="active">{{ trans('general.details') }}</li>
                    </ol>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <form role="search" class="app-search hidden-xs pull-right">
                        <input type="text" placeholder=" {{ trans('general.search') }} ..." class="form-control">
                        <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
                    </form>
                </div>
            </div>







            <div class="row">


                <div class="col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">{{ trans('general.order') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('general.details') }}</p>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">


                            <li role="presentation" class="active">
                                <a href="#idetail" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-home"></i>{{trans('general.detail')}}</span></a>
                            </li>


                            <li role="presentation" >
                                <a href="#cart" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.cart')}}</span></a>
                            </li>


                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">


                            <div role="tabpanel" class="tab-pane active" id="idetail">


                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">{{ trans('order.orderInfo') }}</span>
                                    </div>

                                    <div class="panel-body">


                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('order.users_id') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ isset($order->users()->first()->first_name)? $order->users()->first()->first_name:'' }}</label>
                                                </div>
                                            </div>



                                            <div class="row">                                            <div class="col-sm-2 text-right">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{ trans('general.shop') }}  </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 text-left">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{ isset($order->shop()->first()->name_en)? $order->shop()->first()->name_en:'' }}</label>
                                                    </div>
                                                </div>





                                                <div class="col-sm-2 text-right">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{ trans('general.area') }}  </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 text-left">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{isset($order->area)? $order->area->name_en:'' }}</label>
                                                    </div>
                                                </div>










                                                <div class="col-sm-2 text-right">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{ trans('order.rate') }}  </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 text-left">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{$order['rate'] }}</label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">















                                                <div class="col-sm-2 text-right">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">Customer Address  </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 text-left">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">
                                                            {!! isset($order->address->name)? '<a href="/admin/address/'.$order['address_id'].'">'.$order->address->name.'</a>':'Not Selected' !!}</label>
                                                    </div>
                                                </div>


                                                <div class="col-sm-2 text-right">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{ trans('order.deliver_time') }}  </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 text-left">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{$order['deliver_time'] }}</label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">

                                                <div class="col-sm-2 text-right">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{ trans('order.deliver_date') }}  </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 text-left">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{$order['deliver_date'] }}</label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">

                                                <div class="col-sm-2 text-right">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{ trans('order.deliver_charge') }}  </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 text-left">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{$order['deliver_charge'] }}</label>
                                                    </div>
                                                </div>



                                                <div class="col-sm-2 text-right">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{ trans('order.deera_charge') }}  </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 text-left">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{$order['deera_charge'] }}</label>
                                                    </div>
                                                </div>




                                                <div class="col-sm-2 text-right">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{ trans('order.extra_charge') }}  </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 text-left">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{$order['extra_charge'] }}</label>
                                                    </div>
                                                </div>



                                                <div class="col-sm-2 text-right">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{ trans('order.total') }}  </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 text-left">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{$order['total'] }}</label>
                                                    </div>
                                                </div>





                                            </div>
                                            <div class="row">                                            <div class="col-sm-2 text-right">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{ trans('order.point') }}  </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 text-left">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{$order['point'] }}</label>
                                                    </div>
                                                </div>


                                                <div class="col-sm-2 text-right">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{ trans('order.status') }}  </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 text-left">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{config('array.order_status')[$order['status']] }}</label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">                                            <div class="col-sm-2 text-right">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{ trans('order.notification') }}  </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 text-left">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{
                                                        array_key_exists($order['notification'],config('array.order_notification'))?
                                                        config('array.order_notification')[$order['notification']] :''}}</label>
                                                    </div>
                                                </div>


                                                <div class="col-sm-2 text-right">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{ trans('order.created_at') }}  </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 text-left">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{$order['created_at'] }}</label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">                                            <div class="col-sm-2 text-right">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{ trans('order.updated_at') }}  </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 text-left">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{$order['updated_at'] }}</label>
                                                    </div>
                                                </div>

                                                </div>

                                            <div class="row">


                                                <div class="col-sm-2 text-right">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{ trans('order.note') }}  </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 text-left">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{$order['note'] }}</label>
                                                    </div>
                                                </div>













                                                <div class="col-sm-2 text-right">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">Payment Type   </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 text-left">
                                                    <div class="form-group no-margin-hr">
                                                        <label class="control-label">{{
                                        isset($order->payment->first()->type)?
                                        (array_key_exists( $order->payment->first()->type,config('array.payment_type')) ? config('array.payment_type')[$order->payment->first()->type]:'')
                                        :''
                                        }}</label>
                                                    </div>
                                                </div>



                                            </div>






                                                <div class="row">

                                                    <div class="col-xs-offset-6 col-xs-3">

                                                        @if($canEdit)
                                                            <a href="/admin/order/{{ $order['id'] }}/edit"
                                                               class="fa fa-edit btn btn-primary form-control"> {{trans('general.edit')}}</a>
                                                        @endif
                                                    </div>
                                                    <div class=" col-xs-3">
                                                        @if($canDestroy)
                                                            {!! Form::open(['method' => 'DELETE',
                                                    'url' => ['/admin/order',$order['id']]]) !!}
                                                            <button type="submit" name="Delete" class="deleteRow  btn btn-danger form-control" >
                                                                <i class="fa fa-trash"></i>
                                                                {{trans('general.delete')}}
                                                            </button>
                                                            {!! Form::close() !!}
                                                        @endif
                                                    </div>

                                                </div>


                                            </div>
                                            <!-- row -->
                                        </div>


                                    </div>






                                </div>


                            @if( $canCartRelation)
                                <div role="tabpanel" class="tab-pane active" id="cart">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="white-box">



                                                @include('common.partials.messages')

                                                <div class=" col-xs-9">
                                                    <h3 class="box-title m-b-0">{{ trans('cart.cartTableHead') }}</h3>
                                                    <p class="text-muted m-b-20">{{ trans('cart.cartTableDescription') }}</p>



                                                </div>

                                                @if( $canCartCreate)
                                                    <div class="col-xs-3">
                                                        <a  href="{{route('admin.cart.create')}}?order_id={{$order['id'] }}"class="btn btn-primary form-control">
                                                            + {{trans('cart.cartCreate')}}
                                                        </a>
                                                    </div>
                                                @endif

                                                <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                    <thead>
                                                    <tr>


                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                            {!! th_sort(trans('cart.id'), 'id', $oCartResults) !!}
                                                        </th>

                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                            {!! th_sort(trans('general.users'), 'users_id', $oCartResults) !!}
                                                        </th>



                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                            {!! th_sort(trans('general.coffee'), 'coffee_id', $oCartResults) !!}
                                                        </th>

                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                            {!! th_sort(trans('cart.order_id'), 'order_id', $oCartResults) !!}
                                                        </th>


                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                            {!! th_sort(trans('cart.quantity'), 'quantity', $oCartResults) !!}
                                                        </th>



                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                            {!! th_sort(trans('cart.total_price'), 'total_price', $oCartResults) !!}
                                                        </th>

                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                                            {!! th_sort(trans('cart.special_request'), 'special_request', $oCartResults) !!}
                                                        </th>
                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="11">
                                                           Add Ons
                                                        </th>


                                                        @if($canCartShow
|| $canCartEdit
|| $canCartDestroy
)
                                                            <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                        @endif
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @if (count($oCartResults))
                                                        {{-- */$i=0;/* --}}
                                                        {{-- */$class='';/* --}}
                                                        @foreach($oCartResults as $oResult)
                                                            {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                            <tr class='{{ $class }}'>

                                                                <td>{{ $oResult->id }}</td>

                                                                <td>{{ isset($oResult->users->first_name)?$oResult->users->first_name:'' }}</td>

                                                                <td>{{ isset($oResult->coffee->name_en)? $oResult->coffee->name_en:'' }}</td>

                                                                <td><a href="/admin/order/{{ $oResult->order_id }}">#{{ $oResult->order_id }}</a></td>

                                                                <td>{{ $oResult->quantity  }}</td>
                                                                <td>{{ floatval( $oResult->quantity) *  floatval( $oResult->unit_price) }}</td>

                                                                <td>{{ $oResult->special_request }}</td>

                                                                <td>
                                                                @if(count($oResult->product_option))
                                                                @foreach($oResult->product_option as $option)
                                                                    {{isset($option->product_option->name_en)? $option->product_option->name_en.'-':''}}
                                                                    @endforeach
                                                                    @endif
                                                                </td>


                                                                <td>

                                                                    <div class="tableActionsMenuDiv">
                                                                        <div class="innerContainer">
                                                                            <i class="fa fa-list menuIconList"></i>

                                                                            @if($canCartDestroy )
                                                                                {!! Form::open(['method' => 'DELETE',
                                                                                'url' => ['/admin/cart',$oResult->id]]) !!}
                                                                                <button type="submit" name="Delete" class="deleteRow" >
                                                                                    <i class="fa fa-trash"></i>
                                                                                </button>
                                                                                {!! Form::close() !!}
                                                                            @endif

                                                                            @if( $canCartEdit)
                                                                                <a href="/admin/cart/{{ $oResult->id }}/edit"
                                                                                   class="fa fa-edit"></a>
                                                                            @endif
                                                                            @if($canCartShow )
                                                                                <a href="/admin/cart/{{ $oResult->id }}"
                                                                                   class="fa fa-file-text"></a>

                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                    </tbody>
                                                </table>
                                                @if (count($oCartResults))
                                                    <div class="row">

                                                        <div class="col-xs-12 col-sm-6 ">
                                                            <span class="text-xs">{{trans('general.showing')}} {{ $oCartResults->firstItem() }} {{trans('general.to')}} {{ $oCartResults->lastItem() }} {{trans('general.of')}} {{ $oCartResults->total() }} {{trans('general.entries')}}</span>
                                                        </div>


                                                        <div class="col-xs-12 col-sm-6 ">
                                                            {!! str_replace('/?', '?', $oCartResults->appends(Input::except('page_cart'))->appends($request->all())->render()) !!}
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="noResultDiv" >{{trans('general.noResult')}}</div>

                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endif










































                                <div id="selectOrderDriverDiv">

                                    <div id="mapDiv">

                                    </div>

                                    <div id="ordersListDiv"></div>

                                    <div id="shopDiversList"></div>

                                    <div id="deeraDriversList"></div>



                                </div>


                                {!! HTML::script('/assets/website/js/jquery.min.js') !!}
<script>



//    json.routes[0].legs[i].(distance.text - duration.text - end_location. lat  long)

var jsonUrl="https://maps.googleapis.com/maps/api/directions/json?origin=32.05316727895472,36.08853166469726&destination=32.05316727895472,36.08853166469726&waypoints=32.028721253063296%20,%2036.08793084987792|32.05127585522657,36.132777384606925|32.06655162175497,36.10213582882079&key=AIzaSyDLkoPoZU4wmIOavt0y7yEj8n2k2mBalRI";

function parseRoute(json){
    condole.log(json);

    for(var i=0;i<json.routes[0].legs.length;i++){
        var oneLocation=json.routes[0].legs[i];

        console.log({
            "distance":oneLocation.distance.text,
            "duration":oneLocation.duration.text,
            "end_location":oneLocation.end_location.lat +','+oneLocation.end_location.long ,
            "start_location":oneLocation.start_location.lat +','+oneLocation.start_location.long ,
        });

    }
}

(function() {
    var flickerAPI = jsonUrl;
    $.getJSON( flickerAPI, {
        tags: "mount rainier",
        tagmode: "any",
        format: "json"
    })
            .done(function( data ) {

                parseRoute(data);



            });
})();

//    $.getJSON( jsonUrl, function( json ) {
//    condole.log(json);
//
//        for(var i=0;i<json.routes[0].legs.length;i++){
//            var oneLocation=json.routes[0].legs[i];
//
//            console.log({
//                "distance":oneLocation.distance.text,
//                "duration":oneLocation.duration.text,
//                "end_location":oneLocation.end_location.lat +','+oneLocation.end_location.long ,
//                "start_location":oneLocation.start_location.lat +','+oneLocation.start_location.long ,
//    });
//
//        }
//
//    });

</script>
<script>

    32.05316727895472,36.08853166469726|32.028721253063296 , 36.08793084987792|32.05127585522657,36.132777384606925|32.06655162175497,36.10213582882079
    https://maps.googleapis.com/maps/api/directions/json?origin=Boston,MA&destination=Concord,MA&waypoints=Charlestown,MA|Lexington,MA&key=AIzaSyDLkoPoZU4wmIOavt0y7yEj8n2k2mBalRI
    https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=40.6655101,-73.89188969999998&destinations=40.6905615%2C-73.9976592%7C40.6905615%2C-73.9976592%7C40.6905615%2C-73.9976592%7C40.6905615%2C-73.9976592%7C40.6905615%2C-73.9976592%7C40.6905615%2C-73.9976592%7C40.659569%2C-73.933783%7C40.729029%2C-73.851524%7C40.6860072%2C-73.6334271%7C40.598566%2C-73.7527626%7C40.659569%2C-73.933783%7C40.729029%2C-73.851524%7C40.6860072%2C-73.6334271%7C40.598566%2C-73.7527626&key=YOUR_API_KEY




            https://maps.googleapis.com/maps/api/directions/json?origin=32.05316727895472,36.08853166469726&destination=32.05316727895472,36.08853166469726&waypoints=32.028721253063296 , 36.08793084987792|32.05127585522657,36.132777384606925|32.06655162175497,36.10213582882079&key=AIzaSyDLkoPoZU4wmIOavt0y7yEj8n2k2mBalRI



            https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=32.05316727895472,36.08853166469726&destinations=32.05316727895472,36.08853166469726|32.028721253063296 , 36.08793084987792|32.05127585522657,36.132777384606925|32.06655162175497,36.10213582882079&key=AIzaSyDLkoPoZU4wmIOavt0y7yEj8n2k2mBalRI

</script>

































                            </div>
                        </div>

                    </div>







                </div>
            </div>



@stop