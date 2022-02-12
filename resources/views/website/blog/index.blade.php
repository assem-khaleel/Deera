@extends('website.layouts.main')
@section('title', trans('general.blog')  .' - '.trans('website.pages_title'))

@section('content')

    <section class="main-wrapper">
        <article class="container">
            <!--inner area-->
            <section class="inner-wrapper">
                <div class="caption-sec bottomlow">
                    <h1>  {{trans('website.cofeBlog')}} </h1>
                </div>
                @include('common.partials.messages')

                <section class="search-blog">
                    {!! Form::model($request,['method'=>'get','id'=>'searchBlogForm']) !!}
                    <div class="row">

                        <div class="CustomFLoating1">
                            <div class="CustomFLoatingWithBorder">
                                {!! Form::select('users_id',[''=>trans('website.blogger')]+$bloggerList,null,["xxonchange"=>"$('#searchBlogForm').submit();",'class'=>'selectyze3 text_box']) !!}
                            </div>
                        </div>
                        <div class="CustomFLoating2">
                            {{--*/$currentYear=gmdate('Y');/*--}}
                            {!! Form::select('month',[''=>trans('website.blogger_m')]+[

                            $currentYear.'-01'=>$currentYear.'-January',
                            $currentYear.'-02'=>$currentYear.'-February',
                            $currentYear.'-03'=>$currentYear.'-March',
                            $currentYear.'-04'=>$currentYear.'-April',
                            $currentYear.'-05'=>$currentYear.'-May',
                            $currentYear.'-06'=>$currentYear.'-June',
                            $currentYear.'-07'=>$currentYear.'-July',
                            $currentYear.'-08'=>$currentYear.'-August',
                            $currentYear.'-09'=>$currentYear.'-September',
                            $currentYear.'-10'=>$currentYear.'-October',
                            $currentYear.'-11'=>$currentYear.'-November',
                            $currentYear.'-12'=>$currentYear.'-December',
                            ],null,["xxonchange"=>"$('#searchBlogForm').submit();",'class'=>'selectyze3 text_box']) !!}
                        </div>


                        {{--@if( isset(current_user()->getUser()->id))--}}

                            {{--@if(current_user()->getUser()->blogger==config('array.users_blogger_request_index'))--}}
                                {{--<div class="col-md-4 col-sm-4">--}}
                                    {{--<a href="#" class="blog_btn " style="text-align:center;color:#fff;"> {{trans('website.thanksStudyrequest')}}</a>--}}
                                {{--</div>--}}
                            {{--@elseif(current_user()->getUser()->blogger==config('array.users_blogger_completed_index'))--}}
                                {{--<div class="col-md-4 col-sm-4">--}}
                                    {{--<a href="{{route('blog.create')}}"--}}
                                       {{--id="become_blogger_a" data-success-place="#generalPopupModel  .modal-body"--}}
                                       {{--class="blog_btn aWithResponse"  style="text-align:center;color:#fff;">--}}
                                        {{--{{trans('website.postArticle')}}</a>--}}
                                {{--</div>--}}
                            {{--@else--}}
                                {{--<div class="col-md-4 col-sm-4">--}}
                                    {{--<a href="{{route('website.blog.becomeBlogger')}}"--}}
                                       {{--id="become_blogger_a" data-success-place="#generalPopupModel  .modal-body"--}}
                                       {{--class="blog_btn aWithResponse"  style="text-align:center;color:#fff;"> {{trans('website.becomeBlogger')}} </a>--}}
                                {{--</div>--}}
                            {{--@endif--}}

                        {{--@else--}}
                            <div class="SearchButton">
                                <button type="submit" class="blog_btn" value="" style="width:100%; border:none;"><img src="/assets/website/images/02new-search.png" alt=""></button></div>
                                <div class="OtherButton">                                <a href="{{route('blogger.create')}}"
                                   id="become_blogger_a" data-success-place="#generalPopupModel  .modal-body"
                                   class="blog_btn aWithResponse"  style="text-align:center;color:#fff;">{{trans('website.becomeBlogger')}}</a></div>

                            </div>
                        {{--@endif--}}


                    </div>
                    {!! Form::close() !!}
                </section>


                <div class="search-result">

                    <div class="row">


                        @if(count($oResults))

                            @foreach($oResults as $oResult)


                                <aside class="col-md-4 col-sm-6" style="cursor:pointer;" >
                                    <div class="dt-box">
                                        <img src="{{$oResult->img }}" width="370" height="260" alt="" onclick="window.location.href='/blog/{{$oResult->id }}';">
                                        <h2 onclick="window.location.href='/blog/{{$oResult->id }}';">{{$oResult->title }}</h2>
                                        <h4 onclick="window.location.href='?users_id={{$oResult->users_id }}';"> {{trans('website.postedBy')}} {{isset($oResult->blogger->name)?$oResult->blogger->name:''}} 

                

                                        <span>{{ \Carbon\Carbon::parse($oResult->created_at)->format('d M  Y') }}</span></h4>
                                        <a href="/blog/{{$oResult->id }}"> {{trans('website.readMore')}}  </a>

                                    </div>
                                </aside>
                            @endforeach
                        @endif

                    </div>










                </div>


            </section>
            <!--inner area-->

        </article>
    </section>
@stop
