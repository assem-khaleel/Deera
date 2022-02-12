<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Waypoints in directions</title>
    <style>
        #right-panel {
            font-family: 'Roboto','sans-serif';
            line-height: 30px;
            padding-left: 2%;
        }

        #right-panel select, #right-panel input {
            font-size: 15px;
        }

        #right-panel select {
            width: 100%;
        }

        #right-panel i {
            font-size: 12px;
        }
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #map {
            height: 100%;
            float: left;
            width: 85%;
            height: 100%;
        }
        #right-panel {
            margin: 20px 0px;
            border-width: 2px;
            width: 13%;
            height: 400px;
            float: left;
            text-align: left;
            padding-top: 0;
        }
        #directions-panel {
            margin-top: 10px;
            background-color: #FFEE77;
            padding: 10px;
            overflow: scroll;
            height: 174px;
        }

        #DriverList{
            height:200px;
            overflow: auto;
        }

        #DriverList .oneDriver{
            display:block;
            padding:2px 5px;
            margin:2px 0px;
            border:1px solid #162a36;
            font-size:10px;
        }

        #waypoints{

            /*height:200px;*/
            overflow: auto;
        }
        #waypoints .oneOrder{
            display:block;
            padding:2px 5px;
            margin:2px 0px;
            border:1px solid #162a36;
            font-size:10px;
        }
    </style>
</head>
<body>
<div id="map"></div>


<script>

    var orderData={
@foreach($oOrderResults as $oOrderResult)
    {{ $oOrderResult->id }}:{
        'deliver_time':'{{ $oOrderResult->deliver_time }}'

        },
@endforeach
    };

</script>

<div id="right-panel">


        <div>


            <div multiple id="waypoints">


                @foreach($areaOrderNumber as $areaId=>$orderNumber)


                    <label class="oneOrder" >
                        {{$areaList[$areaId]}}  ( {{ $orderNumber }} ) order
                    </label>
                @endforeach

                {{--@foreach($oOrderResults as $oOrderResult)--}}
                    {{--@if(isset($oOrderResult->address))--}}
                    {{--<label class="oneOrder" >--}}


                        {{--<input type="checkbox" name="order_id[]" value="{{$oOrderResult->id}}" data-location="{{$oOrderResult->address->lat.','.$oOrderResult->address->long}}"--}}
                                {{--@if(strlen($oOrderResult->address->lat) >5 && strlen($oOrderResult->address->long) >5) checked @endif--}}
                                {{-->--}}

                        {{--<a href="/admin/order/{{$oOrderResult->id}}/edit" >#{{$oOrderResult->id}} {{$oOrderResult->users->first_name}}</a>--}}
                        {{--<br>{{config('array.order_status')[$oOrderResult->status] }} -<a href="/admin/address/{{$oOrderResult->address_id}}"> {{$oOrderResult->address->name }}</a> - <a href="/admin/shop/{{$oOrderResult->shop_id}}" ></a>{{$oOrderResult->shop->name_en}}</a>--}}



                    {{--<span style="float:right;" class="pull-right">{{$oOrderResult->deliver_time}}--}}
                        {{---Expected Time :{{$oOrderResult->expected_time}}--}}
                    {{--</span>--}}
                    {{--</label>--}}



                    {{--<div id="order_{{$oOrderResult->id}}" class="popupHtml" style="display: none">--}}
                        {{--<div style="clear:both">--}}
{{--<img src="{{$oOrderResult->shop->img}}" width="100" height="100" >--}}

                    {{--</div>--}}

                    {{--</div>--}}
                    {{--@endif--}}
                {{--@endforeach--}}



            </div>
            <br>


             @include ('common/partials/messages')
        </div>

</div>




{!! HTML::script('/assets/website/js/jquery.min.js') !!}


<script>
    /*_______________________________________shop*/
    function getMarkerList(){
        var markerList={

            @foreach($oOrderResults as $oOrderResult)
                @if(isset($oOrderResult->address))
          '{{$oOrderResult->id}}':
            {'name':'{{$oOrderResult->users->first_name}}','position':'{{$oOrderResult->address->lat.','.$oOrderResult->address->long}}',
                'img':'{{ $oOrderResult->shop->img }}'
            },
            @endif
            @endforeach
        };
        return markerList;
    }
    function addOrdersMarker(){
        var markerList=getMarkerList();

        for(var orderId in markerList) {
            var positionArray=markerList[orderId]['position'].split(',');

            addMarker({
                position: {lat: parseFloat(positionArray[0]), lng: parseFloat(positionArray[1])},
                label:markerList[orderId]['name'],
                popupHtmlSelector: '#order_'+orderId,
                title: markerList[orderId]['name'],
                html:'',//$('#driver_'+driverId).html(),

                icon: markerList[orderId]['img']
            });
        }
    }
</script>
<script>
//    function searchList(searchInput,listSelector){
//       var listItems=$(listSelector);
//        var searchText=searchInput.val().toLowerCase();
//
//        listItems.each(function(){
//            var listItem=$(this);
//            if(listItem.text().toLowerCase().match(new RegExp('.*'+searchText+'.*'))){
//                listItem.show();
//            }else{
//                listItem.hide();
//            }
//        });
//
//    }

</script>




<script>
    var map={};
var totalTime=0;
var currentHour="{{ gmdate('H:i') }}";
var currentTime=hourToSecond(currentHour);



function addMarker(markerData){
    markerData.map=map;

    var icon = {
        url: markerData.icon, // url
        scaledSize: new google.maps.Size(40, 40), // scaled size
        origin: new google.maps.Point(0,0), // origin
        anchor: new google.maps.Point(0, 0) // anchor
    };

    markerData.icon=icon;
    var marker = new google.maps.Marker(markerData);



//        var infowindow = new google.maps.InfoWindow({
//            content: ''
//        });
//
//        marker.addListener('click', function() {
//            infowindow.open(marker.get('map'), marker);
//        });

}
    function drowWaypoint(index, waypts,waypointsIds, data){

        var positionArray = waypts[index].location.split(',');
        var differenceTypeAndHtml=getMarkerData(data,waypointsIds[index]);

        var icon='/assets/website/images/pizza-icon.png';
        if(differenceTypeAndHtml[0]=='delay'){
            icon='/assets/website/images/red-pizza-icon.png';
        }else if(differenceTypeAndHtml[0]=='early'){
            icon='/assets/website/images/yellow-pizza-icon.png';
        }
        addMarker({
            position: {lat: parseFloat(positionArray[0]) ,lng: parseFloat(positionArray[1]) },
            label:waypointsIds[index],
            popupHtmlSelector:'#order_'+waypointsIds[index],
            title: 'Order Num '+waypointsIds[index],
            html:differenceTypeAndHtml[1],

            icon:icon
        });
    }

    function getMarkerData(data,waypointId){
var finalHtml=' order number <a href="/admin/order/'+waypointId +'">#'+waypointId +'</a> <br>';
//        finalHtml += data.start_address + ' to ';
//        finalHtml += data.end_address + '<br>';
//        finalHtml += data.distance.text + ' - duration :';
//        finalHtml += data.duration.text + '<br>';

        finalHtml +='<br>Time to deliver in:'+convertSecondsToText(totalTime,true);
        finalHtml +='<br>current hour  :'+ currentHour;
        finalHtml +='<br>driver expect arrive    :'+secondToHour(parseInt(totalTime) + parseInt(currentTime));
        finalHtml +='<br>customer hour :'+orderData[waypointId]['deliver_time'];

        var differenceTypeAndDifference=calculateDifferenceTime(secondToHour(totalTime + currentTime),orderData[waypointId]['deliver_time']);
        var differenceType=differenceTypeAndDifference[0];
        var difference=differenceTypeAndDifference[1];

$('#expected_time_'+waypointId).val(secondToHour(parseInt(totalTime) + parseInt(currentTime)));
        if(differenceType=='delay'){

            finalHtml +='<br>delay time :'+difference;
        }else if(differenceType=='early'){

            finalHtml +='<br> the deliver will be early :'+  difference;
        }else{

            finalHtml +='<br>small different in deliver time :'+  difference;
        }

        finalHtml +='<div style="clear:both"></div>';
        return [differenceType,finalHtml];
    }

    function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer( { suppressMarkers : true });


        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 9,
            center: {lat:29.279611, lng: 47.526855}
        });
     //   directionsDisplay.setMap(map);


        addOrdersMarker();


    }


</script>




<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLkoPoZU4wmIOavt0y7yEj8n2k2mBalRI&callback=initMap">
</script>

<script>


   // $('input[type="checkbox"]').prop('checked',true);

   // $('input[type="radio"]').eq(0).prop('checked',true);
    setTimeout('$("#submit").click()',1000);
</script>





























<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <section class="content">        <p>Some text in the Modal..</p></section>

    </div>

</div>

<script>
    // Get the modal
    var modal = document.getElementById('myModal');


    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];


    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<style>
    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>



</body>
</html>