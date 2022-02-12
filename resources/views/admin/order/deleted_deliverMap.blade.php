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
            width: 60%;
            height: 100%;
        }
        #right-panel {
            margin: 20px 0px;
            border-width: 2px;
            width: 38%;
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

            height:200px;
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

<div id="right-panel">
    <form action="{{route('admin.order_driver.index')}}" method="post">
    <div>
        <b>Driver :</b>
        <div id="DriverList">

            @foreach($drivers as $driver)
               <label class="oneDriver">
                   <input type="radio" name="users_id" value="{{$driver['id'] }}" data-location="{{$driver['location'] }}">
                   {{$driver['name'] }} - {{$driver['address_name']}}- {{$driver['shop_name'] }} <br>
                   Status :{{$driver['driver_status']}}

               </label>

            @endforeach
        </div>
        <br>
        <b>Orders:</b> <br>
        <i>(select orders then click show)</i> <br>
        <div multiple id="waypoints">
            @foreach($orders as $order)


            <label class="oneOrder" ><input type="checkbox" name="order_id" value="{{$order['order_id']}}" data-location="{{$order['location']}}">
              <a href="/admin/order/{{$order['order_id'] }}" >#{{$order['order_id']}}</a>
                <br>{{$order['address_name']}} - {{$order['shop_name']}}</label>

            @endforeach

        </div>
        <br>
        {{--<b>End:</b>--}}
        {{--<select id="end">--}}
            {{--<option value="32.05316727895472,36.08853166469726">Vancouver, BC</option>--}}
            {{--<option value="Seattle, WA">Seattle, WA</option>--}}
            {{--<option value="San Francisco, CA">San Francisco, CA</option>--}}
            {{--<option value="Los Angeles, CA">Los Angeles, CA</option>--}}
        {{--</select>--}}
        {{--<br>--}}
        <button type="button" id="submit"> show route </button>
        <button type="submit" id="assingButton"> Assign Orders To Driver </button>

        @include ('common/partials/messages')
    </div>
    <div id="directions-panel"></div>
    </form>
</div>

{!! HTML::script('/assets/website/js/jquery.min.js') !!}


<script>
    function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 6,
            center: {lat: 41.85, lng: -87.65}
        });
        directionsDisplay.setMap(map);

        document.getElementById('submit').addEventListener('click', function() {
            calculateAndDisplayRoute(directionsService, directionsDisplay);
        });
    }

    function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var waypts = [];
       // var waypointsDiv = document.getElementById('waypoints');
        $('#waypoints input:checkbox:checked').each(function(){

                waypts.push({
                    location:$(this).data('location'),
                    stopover: true
                });

        });



        directionsService.route({
            origin: $('#DriverList input:checked').data('location'),
            destination: $('#DriverList input:checked').data('location'),
            waypoints: waypts,
            optimizeWaypoints: true,
            travelMode: 'DRIVING'
        }, function(response, status) {
            if (status === 'OK') {
                directionsDisplay.setDirections(response);
                var route = response.routes[0];
                var summaryPanel = document.getElementById('directions-panel');

                summaryPanel.innerHTML = '';
                // For each route, display summary information.
                for (var i = 0; i < route.legs.length; i++) {
                    var routeSegment = i + 1;
                    summaryPanel.innerHTML += '<b>Route Segment: ' + routeSegment +
                            '</b><br>';
                    summaryPanel.innerHTML += route.legs[i].start_address + ' to ';
                    summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
                    summaryPanel.innerHTML += route.legs[i].distance.text + ' - duration :';
                    summaryPanel.innerHTML += route.legs[i].duration.text + '<br>';


//alert(route.legs[i].end_location.lat+','+route.legs[i].end_location.log);
//                   alert($('#waypoints input[type="checkbox"][value="'+route.legs[i].end_location.lat+','+route.legs[i].end_location.log+'"]').parent().text()) ;
                }
            } else {
                window.alert('Directions request failed due to ' + status);
            }
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLkoPoZU4wmIOavt0y7yEj8n2k2mBalRI&callback=initMap">
</script>
</body>
</html>