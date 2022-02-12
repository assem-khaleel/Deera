@extends('website.layouts.main')
@section('title', Lang::get('dashboard.PageTitle'))
@section('content')

    <section class="main-wrapper">
        <article class="container">


        <!--inner area-->
<section class="inner-wrapper">

   
    <br>

    <div class="inner-content">
        <div class="abut_wrap">
            <div class="cntact_sec">
                <div class="row">
                    <div class="col-md-12">

 <div class="caption-sec">
        <h1 style="padding-top:21px;padding-bottom: 21px "> Thank you Please Show ALL Detailes of The Order: </h1>
    </div>



           @include('common.partials.messages')
                           <div class="panel panel-default" style="clear:both;">
             <div class="panel-heading clearfix" style="background-color:#00c292 !important;">
             
                            <img src="{{isset( $order->restaurant->img)?$order->restaurant->img:''}}" alt="" width="58">
                                  <strong >  {{isset( $order->restaurant->name_en)?$order->restaurant->name_en:'' }}  </strong> 
                                  











                                  <br> 
     <p>{{isset( $order->Address->name)?$order->Address->name:'' }}  {{isset( $order->created_at)?$order->created_at:'' }} </p>
              
                                         
										          
                                                </div>
                                                <div id="collapseOne38" class="panel-collapse collapse in" aria-expanded="true" style="">
                                                    <div class="panel-body">


                               <table width="100%">
                                                            <tbody>
                                                            <tr>



                                                           <td>  <strong >  Item :   </strong ></td>
                                                                <td>
													@foreach($order->cart as $cart)
													   {{$cart->shop->name_en}} ,

													@endforeach

     															</td>
           
                                                            </tr>
                                                            <tr>
                                                                <td>   <strong >  Quantity  :   </strong > </td>
                                                                <td>@foreach($order->cart as $cart)
													   					{{$cart->quantity}} ,  
													   				@endforeach</td>
                                                            </tr>
                                                            <tr>
                                                                <td>   <strong > Description :    </strong ></td>
                                                                 
                                                                <td> {{isset( $cart->description_en)?$cart->description_en:'' }}</td>
                                                            </tr>
                                                       
                                                            <tr>
                                                                <td>   <strong >   Price :    </strong > </td>
                                                                <td>@foreach($order->cart as $cart)
													   					{{$cart->unit_price}}  KD  
													   				@endforeach</td>
                                                            </tr>


															<tr>
                                                                <td>   <strong >   Sub Total :    </strong > </td>
                                                                <td>{{$order-> sub_total}} KD</td>
                                                            </tr>
                                                            

                                                            <tr>
                                                                <td>   <strong >    Total :    </strong > </td>
                                                                <td>{{$order->total}} KD</td>
                                                            </tr>


                                                            </tbody>
                                                        </table>
                                                        <hr>



                                                                                                                    



                                                        <table width="100%">
                                                            <tbody>

                                                            <tr>
  <td> <a href="/cart?order_id={{$order->id}}" class="btn btn-primary" > Show All Details </a> </td>

    <td><a class="btn btn-primary"   onclick="window.open('/cart?order_id={{$order->id}}','Print','width=1024,height=1024,toolbar=0,menubar=0,location=0').print()"> <i class="fa fa-print" aria-hidden="true"></i> Print </a> </td> 



    <td>  <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal123"> <i class="fa fa-envelope" aria-hidden="true"></i>
 Send Email </button> </td>


                                                                
                                                            </tr>

                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>
                                            </div>












</div> <!-- col-md-12 -->

</div> <!--row -->

</div> <!-- cntact_sec -->

</div> <!-- abut_wrap -->

 </div> <!--inner-content-->

                      

</section>
<!--inner area-->



        </article>
    </section>









<!-- Modal -->
  <div class="modal fade" id="myModal123" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Send Email </h4>
        </div>

         <form method="post" action="{{ action('admin\paymentcash\Cashondelivery@cashemail') }}" accept-charset="UTF-8">
        <div class="modal-body">
        
        <input type="hidden" name="id" value="{{$order->id}}">
      <label>Email</label> <input type="email" name="emailto"  class="form-control" placeholder="example@example.com" required>


            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <input type="submit" name="send_email" class=" btn btn-default" value="Send">
        </div>
      </div>
      
    </div>
  </div>
</form>




<!-- sucess cach -->


@endsection
