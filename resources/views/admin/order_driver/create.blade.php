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


<script>
    var orderData={
    @foreach($orders as $order)
        {{$order['order_id'] }}:{
        'deliver_time':'{{$order['deliver_time']}}'

        },
    @endforeach
    };
</script>

<div id="right-panel">
    <form action="{{route('admin.order_driver.index')}}" method="post">
        <div>
            <b>Driver :<input oninput="searchList($(this),'#DriverList .oneDriver')" placeholder="Search"></b>
            <div id="DriverList">

                @foreach($drivers as $driver)

                    <label class="oneDriver">
                        <input type="radio" name="users_id" value="{{$driver['id'] }},{{$driver['location'] }}" data-location="{{$driver['location'] }}">
                        {{$driver['name'] }} - {{$driver['address_name']}}- {{$driver['shop_name'] }} <br>
                   @if(isset($driver['order_driver_id']))

                       <a href="/admin/order_driver/{{$driver['order_driver_id']}}/edit"    >Status :{{$driver['driver_status']}}</a>
                        @else
                      Status :{{$driver['driver_status']}}
@endif


                        @if(isset($driver['order_id']))
                            <br>
                            <a href="/admin/order/{{$driver['order_id']}}/edit"    >Order :#{{$driver['order_id']}}</a>

                        @endif
                    </label>

                @endforeach
            </div>
            <br>
            <b>Orders:<input oninput="searchList($(this),'#waypoints .oneOrder')" placeholder="Search"></b> <br>
            <i>(select orders then click show)</i> <br>
            <div multiple id="waypoints">

                @foreach($orders as $order)


                    <label class="oneOrder" ><input type="checkbox" name="order_id" value="{{$order['order_id']}}" data-location="{{$order['location']}}">
                        <a href="/admin/order/{{$order['order_id'] }}/edit" >#{{$order['order_id']}}</a>
                        <br>{{$order['order_status']}} - {{$order['address_name']}} - {{$order['shop_name']}}

                    <span style="float:right;" class="pull-right">{{$order['deliver_date']}}</span>
                    </label>



                    <div id="order_{{$order['order_id'] }}" class="popupHtml" style="display: none">

                        <button onclick="$('[name=order_id][value={{$order['order_id'] }}]').prop('checked',false);$('#submit').click();">remove</button>
                        <button onclick="$('[name=order_id][value={{$order['order_id'] }}]').prop('checked',true);$('#submit').click();">Add</button>
                    </div>
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
            @if(canAccess('admin.order.groupData'))
            <button type="submit" id="assingButton"> Assign Orders To Driver </button>
@endif
            @include ('common/partials/messages')
        </div>
        <div id="directions-panel"></div>
    </form>
</div>

{!! HTML::script('/assets/website/js/jquery.min.js') !!}
<script>
    function searchList(searchInput,listSelector){
       var listItems=$(listSelector);
        var searchText=searchInput.val().toLowerCase();

        listItems.each(function(){
            var listItem=$(this);
            if(listItem.text().toLowerCase().match(new RegExp('.*'+searchText+'.*'))){
                listItem.show();
            }else{
                listItem.hide();
            }
        });

    }

</script>




<script>
    /*___________________________________helper_functions*/

    /*__________________________time*/

    function convertSecondsToText(timeDifirint,negative){
        negative=(timeDifirint<0 || negative==true)? true:false;
        timeDifirint=Math.abs(timeDifirint);

        var daysNumber=Math.floor(timeDifirint/86400);
        var reminderSeconds=timeDifirint- (daysNumber*86400);

        var  hoursNumber=Math.floor(reminderSeconds/3600);
        reminderSeconds=reminderSeconds- (hoursNumber*3600);
        var momentsNumber=Math.floor(reminderSeconds/60);
        reminderSeconds=reminderSeconds- (momentsNumber*60);


        var timeString=' ';//(negative == true)? 'After ':'Before ';
        timeString+=(daysNumber > 0)? ''+daysNumber +' day , ':'';
        timeString+=(hoursNumber > 0)? hoursNumber +' hour , ':'';
        timeString+=(momentsNumber > 0)? momentsNumber +' minute , ':'';
        timeString+=(reminderSeconds > 0)? reminderSeconds +' second ':'';
        timeString=(timeString=='before ')? 'Now':timeString;


        return timeString;
    }
    function getHour(time){

        timeDifirint=Math.abs(time);

        var daysNumber=Math.floor(timeDifirint/86400);
        var reminderSeconds=timeDifirint- (daysNumber*86400);

        var  hoursNumber=Math.floor(reminderSeconds/3600);
        reminderSeconds=reminderSeconds- (hoursNumber*3600);
        var momentsNumber=Math.floor(reminderSeconds/60);
        reminderSeconds=reminderSeconds- (momentsNumber*60);

        var timeString='';

        timeString+=(daysNumber > 0)? ''+daysNumber +':':'';
        timeString+=(hoursNumber > 0)? hoursNumber +':':'00';
        timeString+=(momentsNumber > 0)?  momentsNumber :'00';


        return timeString;
    }



    function calculateDifferenceTime(valuestart,valuestop) {

        //create date format 86400
        var valuestartArray=valuestart.split(':');
        valuestart=(valuestartArray[0].length<2 ? '0'+valuestartArray[0]:valuestartArray[0])+':'+(valuestartArray[1]<10 ? '0'+valuestartArray[1]:valuestartArray[1])+':00';

        var valuestopArray=valuestop.split(':');
        valuestop=(valuestopArray[0].length<2 ? '0'+valuestopArray[0]:valuestopArray[0])+':'+(valuestopArray[1]<10 ? '0'+valuestopArray[1]:valuestopArray[1])+':00';

        var timeStart = new Date('1970-01-01 ' + valuestart ).getTime()  ;// new Date("01/01/2007 " + valuestart);
        var timeEnd =new Date('1970-01-01 ' + valuestop ).getTime() ;// new Date("01/01/2007 " + valuestop);

        var difference = Math.abs(timeEnd - timeStart)/1000 ;

        var diff_result = new Date(difference);

        var differenceType='onTime';
        if(timeEnd > timeStart && difference /(60) > 10  ){

            differenceType='early';

        }else if(timeEnd < timeStart && difference /(60)  > 10  ){

            differenceType='delay';
        }


        return [
            differenceType,
            convertSecondsToText(difference)
        ];




    }
    function fixNumber(number){

        return (number < 10)? '0'+number:number;
    }
    function hourToSecond(hour){

        var hourArray=hour.split(':');

        return (parseInt(hourArray[0])*60*60)+(parseInt(hourArray[1])*60);
    }


    function secondToHour(second){
//        var date = new Date(null);
//        date.setSeconds(second); // specify value for SECONDS here
//        return date.toISOString().substr(11, 8);


        var  hoursNumber=Math.floor(second/3600);
        var reminderSeconds=second - (hoursNumber*3600);
        var momentsNumber=Math.floor(reminderSeconds/60);
        reminderSeconds=reminderSeconds- (momentsNumber*60);



        return fixNumber(hoursNumber)+':'+fixNumber(momentsNumber);
    }
    /*__________________End_time*/


    /*_______________________________End____helper_functions*/

</script>




<script>


    $('input[type="checkbox"]').prop('checked',true);

    $('input[type="radio"]').eq(0).prop('checked',true);
</script>
<script>
    var map={};
var totalTime=0;
var currentHour="{{ gmdate('H:i') }}";
var currentTime=hourToSecond(currentHour);
//    var waypts = [];
//    // var waypointsDiv = document.getElementById('waypoints');
//    var waypointsIds=[];
//    $('#waypoints input:checkbox:checked').each(function(){
//
//        waypts.push({
//            location:$(this).data('location'),
//            stopover: true
//        });
//waypointsIds.push($(this).attr('value'));
//    });


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



        var infowindow = new google.maps.InfoWindow({
            content: marker.html +''+$(marker.popupHtmlSelector).html()
        });

        marker.addListener('click', function() {
            infowindow.open(marker.get('map'), marker);
        });
//    google.maps.event.addListener(marker, 'click',
//            (function(marker)
//            {
//                return function()
//                {
//                    //Add Your Customized Click Code Here
//
//                    $('#myModal .content').html($(marker.popupHtmlSelector).html());
//                    $('#myModal .content').append(marker.html);
//                    $('#myModal').show();
//                    $('[value="'+marker.order_id+'"]').parent().css('background-color','red');
//                    //End Add Your Customized Click Code Here
//                }
//            })(marker));
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
        finalHtml +='<br>Hour of arrive    :'+secondToHour(parseInt(totalTime) + parseInt(currentTime));
        finalHtml +='<br>deliver hour :'+orderData[waypointId]['deliver_time'];

        var differenceTypeAndDifference=calculateDifferenceTime(secondToHour(totalTime + currentTime),orderData[waypointId]['deliver_time']);
        var differenceType=differenceTypeAndDifference[0];
        var difference=differenceTypeAndDifference[1];


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
            zoom: 6,
            center: {lat: 31.95557172, lng: 35.83669424}
        });
        directionsDisplay.setMap(map);



        document.getElementById('submit').addEventListener('click', function() {
            calculateAndDisplayRoute(directionsService, directionsDisplay);
        });
    }

    function calculateAndDisplayRoute(directionsService, directionsDisplay) {


        var waypts = [];
        var waypointsIds=[];
        $('#waypoints input:checkbox:checked').each(function(){

            waypts.push({
                location:$(this).data('location'),
                stopover: true
            });
            waypointsIds.push($(this).attr('value'));
        });

        directionsService.route({
            origin: $('#DriverList input:checked').data('location'),
            destination: $('#DriverList input:checked').data('location'),
            waypoints: waypts,
            optimizeWaypoints: true,
            travelMode: 'DRIVING'
        }, function(response, status) {

            if (status === 'OK') {

                totalTime=0;

//console.log(response);

                directionsDisplay.setDirections(response);
                var route = response.routes[0];
                var summaryPanel = document.getElementById('directions-panel');

                summaryPanel.innerHTML = '';
                // For each route, display summary information.

                for (var j = 0; j < route.waypoint_order.length; j++) {
                    totalTime+=route.legs[j].duration.value;

                    drowWaypoint(route.waypoint_order[j], waypts,waypointsIds, route.legs[j]);
                }

                for (var i = 0; i < route.legs.length; i++) {

                  //  console.log(waypts[route.waypoint_order[i]]);
                  //  showSteps(route.legs[i]);
                  //  console.log(route.legs[i].steps[0].end_point);
                    var routeSegment = i + 1;
                    summaryPanel.innerHTML += '<b>Route Segment: ' + routeSegment +'</b><br>';
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
<script>
    function showSteps(myRoute) {
        // For each step, place a marker, and add the text to the marker's
        // info window. Also attach the marker to an array so we
        // can keep track of it and remove it when calculating new
        // routes.
        //var myRoute = directionResult.routes[0].legs[0];

        for (var i = 0; i < 1; i++) {
            var icon = "https://chart.googleapis.com/chart?chst=d_map_pin_letter&chld=" + i + "|FF0000|000000";
            if (i == 0) {
                icon = "https://chart.googleapis.com/chart?chst=d_map_xpin_icon&chld=pin_star|car-dealer|00FFFF|FF0000";
            }

            var marker = new google.maps.Marker({
                position: myRoute.steps[i].start_point,
                map: map,
                icon: icon
            });
            attachInstructionText(marker, myRoute.steps[i].instructions);
           // markerArray.push(marker);
        }
        var marker = new google.maps.Marker({
            position: myRoute.steps[i - 1].end_point,
            map: map,
            icon: "https://chart.googleapis.com/chart?chst=d_map_pin_icon&chld=flag|ADDE63"
        });
        //markerArray.push(marker);

        //google.maps.event.trigger(markerArray[0], "click");
    }

    function attachInstructionText(marker, text) {
        google.maps.event.addListener(marker, 'click', function() {
            // Open an info window when the marker is clicked on,
            // containing the text of the step.
            stepDisplay.setContent(text);
            stepDisplay.open(map, marker);
        });
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