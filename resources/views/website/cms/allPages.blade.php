@extends('website.layouts.main')
@section('title', Lang::get('dashboard.PageTitle'))
@section('content')


    <section class="main-wrapper">
        <section class="container" >
        <div class="inner-wrapper"> 
       <div >
       <div class="inner-content"> 
       <div class="about _wrap">
{!! $oCms->{'content_'.config('app.locale')} !!}
</div> </div> </div> </div>
</section>
        </section>


@stop

@section('script')
    @parent
    <script>



    </script>
    @stop