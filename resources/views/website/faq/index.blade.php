@extends('website.layouts.main')
@section('title', trans('general.faq').'  '.trans('website.pages_title'))
@section('content')


    <section class="main-wrapper">
        <article class="container">







                          <!--inner area-->
                    <section class="inner-wrapper">

                        <div class="caption-sec">
                            <h1> {{ trans('website.frequentlyAsked') }}</h1>
                        </div>

                        <div class="inner-content">
                            <div class="accordian_example full-width">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">





                                    @if(count($oResults))
                                        {{--*/$i=0;/*--}}
                                        @foreach($oResults as $oResult)


                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne_{{$i}}" aria-expanded="true" aria-controls="collapseOne">
                                                           {{$oResult->title}}
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne_{{$i}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">

                                                    {{--*/$i++;/*--}}
                                                    <div class="panel-body">


{!! $oResult->body !!}



                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach
                                    @endif





                                </div>
                            </div><!-- /.accordian_example -->
                        </div>


                    </section>
                    <!--inner area-->















        </article>
    </section>


@stop

