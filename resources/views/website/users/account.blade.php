@extends('website.layouts.main')
@section('title', trans('website.myProfile').'  '.trans('website.pages_title'))
@section('content')




    <section class="main-wrapper">
        <article class="container">


        <section class="inner-wrapper">

        <div class="caption-sec">
            <h1> {{trans('website.myProfile')}} </h1>
        </div>

          <div class="abut_wrap">
              @if (Session('message'))
                  <div class="alert alert-success">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('message') }}
                  </div>
              @endif

          </div>


        <div class="inner-content">
            <div class="abut_wrap">
                <div class="cntact_sec">
                    <div class="row">
                        <div class="col-md-12">

                            <section class="form_sec">


                                {!! Form::model($oUsers, [
                                    'method' => 'PATCH',
                                    'url' => ['/users', $oUsers->id],
                                    'id'=>'updateUserInfoForm',
                                    'class' => 'form-horizontal ',/*formWithResponse',
                                    'data-wait-place'=>'#waitPlace',
                                    'data-wait-function'=>'waitUpdateFunction',
                                    'data-success-pace'=>'#waitPlace',
                                    'data-success-function'=>'successUpdateFunction',*/
                                ]) !!}
                                <script>
                                    /*
                                    window.waitUpdateFunction=function(form,selector,data){}
                                    window.successUpdateFunction=function(form,selector,data){}
                                    */
                                </script>


                                @if (Session::get('flash_success'))
                                    <div class="alert alert-success">
                                        @if(is_array(json_decode(Session::get('flash_success'),true)))
                                            {!! implode('', Session::get('flash_success')->all(':message<br/>')) !!}
                                        @else
                                            {!! Session::get('flash_success') !!}
                                        @endif
                                    </div>
                                @endif

                                <div id="waitPlace"></div>
                                <div class="row">
                                    <aside class="col-md-6  {{ $errors->has("first_name") ? "has-error" : ""}}">
                                        <h5> {{trans('website.firstName')}}</h5>{!! Form::text('first_name',null, ['class'=>'text_box']) !!}
                                        {!! $errors->first("first_name", "<p class='help-block'>:message</p>") !!}

                                    </aside>
                                    <aside class="col-md-6  {{ $errors->has("last_name") ? "has-error" : ""}}">
                                        <h5> {{trans('website.lastName')}} </h5>
                                        {!! Form::text('last_name',null, ['class'=>'text_box']) !!}
                                        {!! $errors->first("last_name", "<p class='help-block'>:message</p>") !!}

                                    </aside>
                                </div>
                                <div class="row">
                                    <aside class="col-md-6  {{ $errors->has("email") ? "has-error" : ""}}">
                                        <h5>{{trans('website.emailAddress')}} </h5>{!! Form::text('email',null, ['class'=>'text_box']) !!}
                                        {!! $errors->first("email", "<p class='help-block'>:message</p>") !!}

                                    </aside>
                                    <aside class="col-md-6  {{ $errors->has("phone") ? "has-error" : ""}}">
                                        <h5> {{trans('website.Phone')}}</h5>{!! Form::text('phone',null, ['class'=>'text_box']) !!}
                                        {!! $errors->first("phone", "<p class='help-block'>:message</p>") !!}

                                    </aside>
                                </div>
                                <div class="row">
                                    <aside class="col-md-6  {{ $errors->has("gender") ? "has-error" : ""}}" style="z-index:99;">
                                        <h5> {{trans('website.gender')}}</h5>
                                        {!! Form::select('gender',config('array.users_gender'),null, ['class'=>'text_box']) !!}
                                        {!! $errors->first("gender", "<p class='help-block'>:message</p>") !!}


                                    </aside>




                                    <aside class="col-md-6  {{ $errors->has("birth_day") ? "has-error" : ""}}">
                                        <h5> {{trans('website.dateOfBrith')}}</h5>
                                        <div class="input-group date form_date col-md-12 clnrd" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                            <input type="text" class="text_box" value="{{$oUsers->birth_day}}" readonly>
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                        </div>

                                        <input type="hidden" name="birth_day" id="dtp_input2"  value="{{$oUsers->birth_day}}" />
                                        {!! $errors->first("birth_day", "<p class='help-block'>:message</p>") !!}



                                    </aside>


                                </div>

                                <div class="row">
                                      <aside class="col-md-6 {{ $errors->has("country") ? "has-error" : ""}} ">
                                <h5> {{trans('website.country')}} </h5>
                                 {!! Form::text('Country',null, ['class'=>'text_box']) !!}
                                {!! $errors->first("Country", "<p class='help-block'>:message</p>") !!}
                            </aside>
                                    <aside class="col-md-6  {{ $errors->has("area_id") ? "has-error" : ""}}">
                                        <h5>{{trans('website.city')}}</h5>  {!! Form::select('area_id',$areaList,null, ['class'=>'text_box']) !!}
                                        {!! $errors->first("area_id", "<p class='help-block'>:message</p>") !!}
                                    </aside>
                                </div>

                                <div class="row">
                                    <aside class="col-md-6 {{ $errors->has("password") ? "has-error" : ""}}">
                                        <h5> {{trans('website.password')}}</h5><input name="password" type="password" class="text_box" value="">
                                        {!! $errors->first("password", "<p class='help-block'>:message</p>") !!}
                                    </aside>
                                    <aside class="col-md-6 {{ $errors->has("password_confirmation") ? "has-error" : ""}}">
                                        <h5>{{trans('website.confirmPassword')}} </h5><input name="password_confirmation" type="password" class="text_box" value="" >
                                        {!! $errors->first("password_confirmation", "<p class='help-block'>:message</p>") !!}
                                    </aside>
                                </div>











                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="logwrapp" style="">
                                            <div class="sign_in">
                                                <h3>{{trans('website.deliveryAddress')}}<a href="/address/create" data-reveal-id="add-addresss" data-animation="fade"
                                                                        class="aWithResponse add_location" id="addAddressLink" data-success-place="#generalPopupModel  .modal-body">+</a></h3>
                                                <div class="clearfix"></div>


                                                <div id="addressListDiv">





{{--                                                    {!! Form::model($request,['method'=>'get','id'=>'xxx_selectAddressForm','class'=>'']) !!}--}}
                                                    @foreach($oAddressResults as $address)

                                                        <label class="oneAddressSelectLabel" id="oneAddressSelectLabel_{{$address->id}}">
{{--                                                            {!! Form::radio('selected_address_id',$address->id,null,['onchange'=>'$("#selectAddressForm").submit();']) !!} --}}
                                                            <span class="addressNameSpan">{{$address->name}}</span>
                                                            <span id="messagesAddress_{{$address->id}}"></span>
                                                            <a class="pull-right aWithResponse" href="/address/create?address_id={{$address->id}}" id="oneAddressSelectA_{{$address->id}}"  data-success-place="#generalPopupModel  .modal-body"  ><i class="fa fa-pencil"></i> </a>
                                                            <a style="margin:0px 10px;" class="pull-right aWithResponse" href="/address/{{$address->id}}"  data-wait-function="dumyFunction" data-success-place="#messagesAddress_{{$address->id}}" id="oneAddressDelete_{{$address->id}}"  data-success-delete="#oneAddressSelectLabel_{{$address->id}}" data-success-function="deleteHtml"  >
                                                                {{--<input type="hidden" name="_method" value="{{trans('website.delete')}}" >--}}
                                                                <i class="fa fa-trash"></i> </a>
                                                        </label>
                                                    @endforeach
                                                    {{--{!! Form::hidden('order_id',null) !!}--}}
                                                    {{--{!! Form::close() !!}--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <input value=" {{trans('website.update')}}" onclick="$('#updateUserInfoForm').submit();" class="sub_btn" type="submit">
                                    </div>
                                </div>
                                {!! Form::close() !!}




                                <script>window.dumyFunction=function(dumy,dumyd,dumy3){}</script>


















                            </section>





                        </div>
                    </div>
                </div>
            </div>

        </div>


    </section>




                    </article>
               </section>


@stop

@section('script')
@parent
    <script>
        var hash = location.hash.substr(1);
        if(hash.length > 0){


            $('a[href="#'+hash+'"]').click();
        }
    </script>

    <script>

        $('#insertAddressIframe').attr('src','/selectAddressFromMap?latitude='+$('#hiddenLatitudeInput').val()+'&longitude='+$('#hiddenLongitudeInput').val()+'')

//        getLocation();
    </script>
 <script type="text/javascript" src="/assets/website/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript">

                $('.form_date').datetimepicker({
                    language: 'en',
                    weekStart: 1,
                    todayBtn: 1,
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 2,
                    minView: 2,
                    forceParse: 0
                });

        </script>
    @stop






















