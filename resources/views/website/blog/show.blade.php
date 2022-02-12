
@extends('website.layouts.main')
@section('title', trans('general.blog') .' '.trans('website.pages_title'))
@section('meta')

    <meta property="og:image" content="https://cofedistrict.com/{{$blog->img}}" />

    @stop
@section('content')
<!-- twitter--> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





    <section class="main-wrapper">
        <article class="container">

            <!--inner area-->
            <section class="inner-wrapper">

                <div class="caption-sec bottomlow" style="margin-bottom: 0;">
                    <h1>{{$blog->title}}</h1>
                </div>
                <div class="blog-artcle">
                    
                    <div class="row">




<style>
.dropbtn1 {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}


.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa {
 
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  
}


.dropbtn1:hover, .dropbtn1:focus {
    background-color: #3e8e41;
}

.dropdown1 {
    position: relative;
    display: inline-block;
}

.dropdown-content1 {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    /*min-width: 160px;*/
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content1 a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown1 a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>
     <div class="pull-right">
                        <div class="socaill">

<div class="dropdown">
<button onclick="myFunction()" class="dropbtn"><img src="/assets/website/images/sharethis.png" width="25"></button>
  <div id="myDropdown" class="dropdown-content1">

  
     <center><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.cofedistrict.com%2Fblog%2F{{$blog->id}}&amp;src=sdkpreparse" data-href="windo" title="facebook"><img src="/assets/website/images/social-icon1.png" alt="" ></a> </center>
<center><a href="https://twitter.com/intent/tweet?text=www.cofedistrict.com%2Fblog%2F{{$blog->id}}
                                " id="btnTweet" title="twitter"><img src="/assets/website/images/social-icon2.png" alt="" >  </a> </center>



       <!-- <center> <a href="#"> <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
<script type="IN/Share" data-url="https://www.linkedin.com/shareArticle?mini=true&url=https://cofedistrict.com/blog/{{$blog->id}}"></script> </a> </center> -->



    <center> <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://cofedistrict.com/blog/{{$blog->id}}"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a>   </center> 





<a> <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5971cdbeb69de6001198a051&product=inline-share-buttons"></script>

<div class="sharethis-inline-share-buttons"></div>
</a>

  </div>
</div>
</div></div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>















<!-- 
                        <div class="pull-right">
                        <div class="socaill">
                            <ul>

                   
    
<div class="dropdown">
  <button class="dropbtn">
    <img src="/assets/website/images/sharethis.png" width="25" >

  </button>
  <div class="dropdown-content">
     <center><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.cofe.fintolog.com%2Fblog%2F{{$blog->id}}&amp;src=sdkpreparse" data-href="windo" title="facebook"><img src="/assets/website/images/social-icon1.png" alt="" ></a> </center>
     <center><a href="https://twitter.com/intent/tweet?text=www.cofe.fintolog.com%2Fblog%2F{{$blog->id}}
                                " id="btnTweet" title="twitter"><img src="/assets/website/images/social-icon2.png" alt="" >  </a> </center>
   <center> <a href="#"> <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
<script type="IN/Share" data-url="www.cofe.fintolog.com%252Fblog%252F%7B%7B$blog-%3Eid%7D%7D"></script> </a> </center>



<a> <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5971cdbeb69de6001198a051&product=inline-share-buttons"></script>

<div class="sharethis-inline-share-buttons"></div>
</a>


  </div>
</div>

                            
                            </ul>
                        </div>
                    </div>

 -->




                        <div class="col-md-9">
                            <span style="font-weight: bold; line-height: 41px;"> {{ \Carbon\Carbon::parse($blog->created_at)->format(' d M Y') }}</span>
                        </div>
                        <div class="col-md-3">
                            
                        </div>
                    </div>

                    <div class="blog_dt">
                        <div style="width:100%; max-height: 250px;overflow: hidden;">
                        <img src="{{$blog->img}}" alt="">
                        </div>
                        <p>{!!$blog->description!!} </p>
                 <hr style="border-color: #000000;"/>
                    </div>
             



             <h4> {{trans('website.postedBy')}}  {{$blog->blogger->name }} </h4>


            <div class="socaill-body">
                <ul >
                    <li><a  href="mailto:{{$blog->blogger->email }}" title="facebook"><img src="/assets/website/images/mail-icon.png" alt="" style="width:70%;"></a></li>
                    <li><a href="{{isset($blog->blogger->facebook_account)?$blog->blogger->facebook_account:''}} " title="facebook"><img src="/assets/website/images/social-icon1.png" alt="" style="width:70%;"></a></li>
                    <li><a href="{{isset($blog->blogger->twitter_account)?$blog->blogger->twitter_account:''}}" title="twitter"><img src="/assets/website/images/social-icon2.png" alt="" style="width:70%;"></a></li>
                    <li><a href="{{isset($blog->blogger->linkedin_account)?$blog->blogger->linkedin_account:''}} " title="linked In"><img src="/assets/website/images/social-icon3.png" alt="" style="width:70%;"></a></li>
                </ul>
            </div>

        </div>






            </section>
            <!--inner area-->




        </article>
    </section>


@stop
