<!-- email : {{$request->email}}<br>
name : {{$request->name}}<br>
phone : {{$request->phone}}<br>
People Number : {{$request->people_number}}<br>
Book Date : {{$request->book_date}}<br>
Book Time : {{$request->book_time}}<br>
request : {{$request['request']}}<br>



 -->

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />

    <style>
        td {
    border: 1px solid #5692CE;
    font-size: 15px;
    padding: 9px;
}   
    </style>
</head>
<body style="font-family: Arial; font-size: 12px;   margin:0px 0px 0px 1%;padding:0px; ">

    <div class="">
        <div class="logo" style="margin: 3% 0px 4% 0px; ">
            <img src="https://cofedistrict.com/assets/website/images/logologo.PNG" />
        </div>
        <div class="content">
            <p class="name" style="font-size: 15px;">
                Dear {{$request->name}},<br />
                We have received the below Catering request from you.
            </p>
      
           <table class="table1">
               <tr>
                   <td>Name</td>
                   <td>{{$request->name}}</td>
               </tr>
               <tr>
                   <td>Email</td>
                   <td> {{$request->email}}</td>
               </tr>
               <tr>
                   <td>Phone no.</td>
                   <td>{{$request->phone}}</td>
               </tr>

                <tr>
                   <td>Coffee Shop Name</td>
                   <td>
{{--*/ $oShop=\App\Models\Shop::find($request->shop_id); if($oShop){echo $oShop->name_en;} /*--}}
                  </td>
               </tr>  
               <tr>
                   <td>Date of Booking</td>
                   <td>{{$request->book_date}}</td>
               </tr>
               <tr>
                   <td>Time</td>
                   <td>{{$request->book_time}}</td>
               </tr>

               <tr>
                   <td>No. of guests</td>
                   <td>{{$request->people_number}}</td>
               </tr>
               <tr>
                   <td>Location</td>
                   <td>{{--*/ $oArea=\App\Models\Area::find($request->location); if($oArea){echo $oArea->name_en;} /*--}}
</td>
               </tr>
               <tr>
                   <td>Additional Information</td>
                   <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br />Praesent diam libero, posuere at vehicula nec, <br />vehicula et est. Suspendisse porta.</td>
               </tr>
           </table>

     <p class="footer" style="font-size: 15px;">
         Best Regards<br />
         Cofe District Team

     </p>
        </div>




    </div>


</body>
</html>
