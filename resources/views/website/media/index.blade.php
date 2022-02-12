@extends('website.layouts.main')
@section('title', trans('general.media').'  '.trans('website.pages_title'))

@section('content')





    <section class="main-wrapper">
        <article class="container">


        <!--inner area-->
<section class="inner-wrapper">

    <div class="caption-sec">
        <h1>Media</h1>
    </div>

    <div class="inner-content">
        <div class="offers full-width">
            <div class="row">

                @if(count($oResults))

                    @foreach($oResults as $oResult)


                        <div class="col-md-4 col-sm-6">
                            <div class="media-box">
                                <a href="/media/{{$oResult->id}}"><img width="370" height="290" src="{{ explode(',',$oResult->img )[0] }}" alt="" /></a>
                            </div>
                        </div>
                    @endforeach
                @endif



            </div><!-- /.row -->
        </div><!-- /.offers -->
    </div>


</section>


</article>
    </section>
@stop
