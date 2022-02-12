<html>
<head><title> {{trans("website.getAdressmap")}}</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

    {!! HTML::script('/assets/website/js/jquery.min.js') !!}

    {!! HTML::script('https://maps.google.com/maps/api/js?sensor=true&key=AIzaSyDLkoPoZU4wmIOavt0y7yEj8n2k2mBalRI') !!}
    <script type="text/javascript">
        var geocoder = new google.maps.Geocoder();

        /*____________________________________________getLongitude and latitude
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                return "Geolocation is not supported by this browser.";
            }
        }
        function showPosition(position) {alert(position.coords.latitude+','+position.coords.longitude);
            var latLng = new google.maps.LatLng(position.coords.latitude+','+position.coords.longitude);
            updateMarkerPosition(latLng);

//            var latitude=position.coords.latitude;
//            var longitude=position.coords.longitude;
//            longLatToAddress(latitude ,  longitude) ;
//            $('#insertAddressIframe').attr('src','https://www.google.com/maps?q='+latitude+','+longitude+'&output=embed');
//            $('#selectAddressFromGoogleMapOpenButton').attr('onClick',"window.open('./selectAddressFromGoogleMap.php?latitude="+latitude+"&longitude="+longitude+"', 'address map', 'width=780,height=300,status=yes');");
//            $('#hiddenLatitudeInput').attr('value',latitude);
//            $('#hiddenLongitudeInput').attr('value',longitude);

        }


        /*_______________________________________END_____getLongitude and latitude



        function geocodePosition(pos) {
            geocoder.geocode({
                latLng: pos
            }, function(responses) {
                if (responses && responses.length > 0) {
                    updateMarkerAddress(responses[0].formatted_address);
                } else {
                    updateMarkerAddress('Cannot determine address at this location.');
                }
            });
        }

        function updateMarkerStatus(str) {
            document.getElementById('markerStatus').innerHTML = str;
        }

        function updateMarkerPosition(latLng) {
            document.getElementById('info').innerHTML = [
                latLng.lat(),
                latLng.lng()
            ].join(', ');

            if ( window.opener != null){
                window.opener.document.getElementById('hiddenLatitudeInput').setAttribute('value', latLng.lat());
            window.opener.document.getElementById('hiddenLongitudeInput').setAttribute('value', latLng.lng());
                window.opener.document.getElementById('insertAddressIframe').setAttribute('src','/selectAddressFromMap?latitude='+latLng.lat()+'&longitude='+latLng.lng());

            }
        }

        function updateMarkerAddress(str) {
            document.getElementById('address').innerHTML = str;

            if ( window.opener != null) {
                window.opener.document.getElementById('placeInput').value = str;
            }
        }

        function initialize() {
            var latLng = new google.maps.LatLng(29.228891,47.972488);

            if('<?=$_REQUEST['latitude'];?>' =='' || '<?=$_REQUEST['longitude'];?>' =='' ){
              getLocation();
            }else{
                latLng = new google.maps.LatLng('<?=$_REQUEST['latitude'].','.$_REQUEST['longitude'];?>');

            }



            var map = new google.maps.Map(document.getElementById('mapCanvas'), {
                zoom: 15,
                center: latLng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            var marker = new google.maps.Marker({
                position: latLng,
                title: 'Point A',
                map: map,
                draggable: true
            });

            // Update current position info.
          //  updateMarkerPosition(latLng);
            geocodePosition(latLng);

            // Add dragging event listeners.
            google.maps.event.addListener(marker, 'dragstart', function() {
                updateMarkerAddress('Dragging...');
            });

            google.maps.event.addListener(marker, 'drag', function() {
                updateMarkerStatus('Dragging...');
                updateMarkerPosition(marker.getPosition());
            });

            google.maps.event.addListener(marker, 'dragend', function() {
                updateMarkerStatus('Drag ended');
                geocodePosition(marker.getPosition());
            });
        }

        // Onload handler to fire off the app.
        google.maps.event.addDomListener(window, 'load', initialize);
*/
    </script>


    <style>
        #mapCanvas {
            width: 100%;
            height: 100%;
            float: left;
        }
        #infoPanel {
            float: left;
            margin-left: 10px;
        }
        #infoPanel div {
            margin-bottom: 5px;
        }
    </style>
</head>

<body>

<div id="mapCanvas"></div>

<script>
var map={};
var marker={};
/*____________________________________________getLongitude and latitude*/
 function getLocation() {
 if (navigator.geolocation) {
 navigator.geolocation.getCurrentPosition(function (position) {

         var latLng = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);

         updatePosition(latLng);


     });
 } else {
 return "Geolocation is not supported by this browser.";
 }
 }



 /*_______________________________________END_____getLongitude and latitude*/


function updateMarkerAddress(responses) {

   var str =responses[0].formatted_address;


    document.getElementById('address').innerHTML = str;

    if ( window.opener != null) {
        window.opener.document.getElementById('placeInput').value = str;
        window.opener.document.getElementById('direction_textarea').value = str;
        window.opener.document.getElementById('address_block').value = responses[0].address_components[0].long_name;
        window.opener.document.getElementById('address_street').value = responses[0].address_components[1].long_name;
    }else{
        window.parent.document.getElementById('placeInput').value = str;
        window.parent.document.getElementById('direction_textarea').value = str;
        window.parent.document.getElementById('address_block').value = responses[0].address_components[0].long_name;
        window.parent.document.getElementById('address_street').value = responses[0].address_components[1].long_name;

    }
}

function geocodePosition(pos) {
    geocoder.geocode({
        latLng: pos
    }, function(responses) {
        if (responses && responses.length > 0) {
            updateMarkerAddress(responses);
        } else {
            updateMarkerAddress('Cannot determine address at this location.');
        }
    });
}

function updatePosition(latLng){
    marker.setPosition(latLng);
    map.setCenter(latLng);
    geocodePosition(marker.getPosition());

    if ( window.opener != null){
        window.opener.document.getElementById('hiddenLatitudeInput').setAttribute('value', latLng.lat());
        window.opener.document.getElementById('hiddenLongitudeInput').setAttribute('value', latLng.lng());
        window.opener.document.getElementById('insertAddressIframe').setAttribute('src','/selectAddressFromMap?latitude='+latLng.lat()+'&longitude='+latLng.lng());

    }else{

        window.parent.document.getElementById('hiddenLatitudeInput').setAttribute('value', latLng.lat());
        window.parent.document.getElementById('hiddenLongitudeInput').setAttribute('value', latLng.lng());
        //window.parent.document.getElementById('insertAddressIframe').setAttribute('src','/selectAddressFromMap?latitude='+latLng.lat()+'&longitude='+latLng.lng());

    }

}


function addMoveableMarker(latLng){

    marker = new google.maps.Marker({
        position: latLng,
        title: 'Point A',
        draggable: true,
        map: map,
    });

    google.maps.event.addListener(marker, 'dragend', function() {

        updatePosition(marker.getPosition());

    });
    google.maps.event.addListener(map, 'click', function(event) {
        updatePosition(event.latLng);
    });

}

    function startMap(){

        var latLng = new google.maps.LatLng(29.228891,47.972488);

        if('<?=$_REQUEST['latitude'];?>' =='' || '<?=$_REQUEST['longitude'];?>' =='' ){
           getLocation();
        }else{
            latLng = new google.maps.LatLng('<?=$_REQUEST['latitude'];?>','<?=$_REQUEST['longitude'];?>');

        }

        map = new google.maps.Map(document.getElementById('mapCanvas'), {
            zoom: 15,
            center: latLng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        addMoveableMarker(latLng);



        if('<?=$_REQUEST['latitude'];?>' =='' || '<?=$_REQUEST['longitude'];?>' =='' ){
            getLocation();

        }



    }


    startMap();
</script>

























<div id="infoPanel" style="display:none">
    <b> {{trans('website.markerStatus')}} </b>
    <div id="markerStatus"><i> {{trans('website.clickMarker')}} </i></div>
    <b>{{trans('website.currentPosition')}}</b>
    <div id="info"></div>
    <b>{{trans('website.closestAddress')}}</b>
    <div id="address"></div>
</div>


</body>
</html>

