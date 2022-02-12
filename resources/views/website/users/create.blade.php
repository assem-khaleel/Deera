@extends('website.layouts.main')
@section('title', trans('website.createAnAccount').'  '.trans('website.pages_title'))
@section('content')

<style> 
aside{
    overflow: hidden;

}

</style>


    <section class="main-wrapper">
        <article class="container">



            <section class="inner-wrapper">

                <div class="caption-sec">
                    <h1> {{trans('website.createAnAccount')}}</h1>
                </div>

                <div class="inner-content">
                    <section class="form-wrap">



                        {!! Form::model($request,['route'=>'users.index','class'=>'xxx_ajaxForm'])  !!}


               <!--          @if (Session::get('flash_success'))
                            <div class="alert alert-success">
                                @if(is_array(json_decode(Session::get('flash_success'),true)))
                                    {!! implode('', Session::get('flash_success')->all(':message<br/>')) !!}
                                @else
                                    {!! Session::get('flash_success') !!}
                                @endif
                            </div>
                        @endif -->


                        <div class="row">
                            <aside class="col-md-6  {{ $errors->has("first_name") ? "has-error" : ""}} ">
                                <h5>{{trans('website.firstName')}}</h5>
                                {!! Form::text('first_name',null, ['class'=>'text_box']) !!}
                                {!! $errors->first("first_name", "<p class='help-block'>:message</p>") !!}
                            </aside>
                            <aside class="col-md-6 {{ $errors->has("last_name") ? "has-error" : ""}} ">
                                <h5> {{trans('website.lastName')}}</h5>
                                {!! Form::text('last_name',null, ['class'=>'text_box']) !!}
                                {!! $errors->first("last_name", "<p class='help-block'>:message</p>") !!}
                            </aside>
                        </div>
                        <div class="row">
                            <aside class="col-md-6 {{ $errors->has("email") ? "has-error" : ""}} ">
                                <h5>{{trans('website.emailAddress')}}   </h5>
                                {!! Form::text('email',null, ['class'=>'text_box']) !!}
                                {!! $errors->first("email", "<p class='help-block'>:message</p>") !!}
                            </aside>
                            <aside class="col-md-6 {{ $errors->has("phone") ? "has-error" : ""}} "><h5>   {{trans('website.Phone')}} </h5>
                                {!! Form::text('phone',null, ['class'=>'text_box']) !!}
                                {!! $errors->first("phone", "<p class='help-block'>:message</p>") !!}
                            </aside>
                        </div>
                        <div class="row">
                            <aside class="col-md-6 {{ $errors->has("gender") ? "has-error" : ""}} ">
                                <h5> {{trans('website.gender')}}</h5>
                                {!! Form::select('gender',config('array.users_gender'),null, ['class'=>'text_box']) !!}
                                {!! $errors->first("gender", "<p class='help-block'>:message</p>") !!}

                            </aside>
                            <aside class="col-md-6  {{ $errors->has("birth_day") ? "has-error" : ""}}">
                                <h5> {{trans('website.dateOfBrith')}}</h5>
                                <div class="input-group date form_date col-md-12 clnrd" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                    <input type="text" class="text_box" value="1985-01-01" readonly>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                </div>
                                <input type="hidden" name="birth_day" id="dtp_input2"  value="1985-01-01" />
                                {!! $errors->first("birth_day", "<p class='help-block'>:message</p>") !!}



                            </aside>
                        </div>




   





                        <div class="row">
                            <aside class="col-md-6 {{ $errors->has("country") ? "has-error" : ""}} ">
                                <h5> {{trans('website.country')}} </h5>
                                 {!! Form::text('Country',null, ['class'=>'text_box']) !!}
                                {!! $errors->first("Country", "<p class='help-block'>:message</p>") !!}
                            </aside>
                            <aside class="col-md-6 {{ $errors->has("area_id") ? "has-error" : ""}} "><h5>{{trans('website.city')}}</h5>
                                {!! Form::select('area_id',$areaList,null, ['class'=>'text_box']) !!}
                                {!! $errors->first("area_id", "<p class='help-block'>:message</p>") !!}
                            </aside>
                        </div>

                        <div class="row">
                            <aside class="col-md-6 {{ $errors->has("password") ? "has-error" : ""}} ">
                                <h5> {{trans('website.password')}} </h5>
                                <input name="password" type="password" class="text_box" value="">

                                {!! $errors->first("password", "<p class='help-block'>:message</p>") !!}
                            </aside>
                            <aside class="col-md-6 {{ $errors->has("password_confirmation") ? "has-error" : ""}} "><h5>
                                    {{trans('website.confirmPassword')}}</h5>
                                <input name="password_confirmation" type="password" class="text_box" value="" >

                                {!! $errors->first("password_confirmation", "<p class='help-block'>:message</p>") !!}
                            </aside>
                        </div>


                        <div class="row">
                            <div class="col-md-12">

                                <div class="chkwrap">
                                    <div class="custom-checkbox">
                                        <input id="cb2" name="agreement" type="checkbox">

                                   <label for="cb2">
                                       {{trans('website.byCreatingAnAccount')}} <strong>  {{trans('website.agree')}}</strong>  {{trans('website.toThe')}} <a href="/privacy">  {{trans('website.privacyPolicy')}} </a>  {{trans('website.and')}} <a href="/terms">  {{trans('website.termsOfUs')}}</a></label>
                                   </label>

                                        <div style="clear:both; ">

                                            {!! $errors->first("agreement", "<p style='color:#a94442' class='help-block'>:message</p>") !!}
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                @if(isset($request->order_id))
                                {!! Form::hidden('order_id',$request->order_id) !!}
                                @endif
                                <input type="submit" value="{{trans('website.signUp')}}" class="sub_btn">

                            </div>
                        </div>

{!! Form::close() !!}






                    </section>
                </div>


            </section>



</article>
        </section>


@stop

@section('script')
    @parent


    <script>


       // getLocation();

    </script>
    @stop















@section('hidden')


                <section class="inner_content_area">
                    <div class="container">
                        {!! Form::model($request,['route'=>'users.index','class'=>'ajaxForm'])  !!}

                        <div class="row">
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-12 order-conform clearfix">
                                        <section class="clearfix">
                                            <div class="heading">{{trans('website.accountInformation')}}</div>

                                            <div class="row">

                                                <div class="form-group {{ $errors->has("email") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("email", trans("users.email"), []) !!}<span class="reqrd">*</span>
                                                    <div class="">
                                                        {!! Form::text("email", null, ["class" => "form-control","placeholder"=> trans("users.email")]) !!}
                                                        {!! $errors->first("email", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>


                                                <div class="form-group {{ $errors->has("password") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("password", trans("users.password"), []) !!}<span class="reqrd">*</span>
                                                    <div class="">
                                                        {!! Form::input("password","password", null, ["class" => "form-control","placeholder"=> trans("users.password")]) !!}
                                                        {!! $errors->first("password", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>

                                                <div style="clear:both"></div>
                                                <div class="form-group {{ $errors->has("password_confirmation") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("password_confirmation", trans("users.password_confirmation"), []) !!}<span class="reqrd">*</span>
                                                    <div class="">
                                                        {!! Form::input("password","password_confirmation", null, ["class" => "form-control","placeholder"=> trans("users.password_confirmation")]) !!}
                                                        {!! $errors->first("password_confirmation", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>



                                                <div class="form-group {{ $errors->has("first_name") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("first_name", trans("users.first_name"), []) !!}<span class="reqrd">*</span>
                                                    <div class="">
                                                        {!! Form::text("first_name", null, ["class" => "form-control","placeholder"=> trans("users.first_name")]) !!}
                                                        {!! $errors->first("first_name", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>


                                                <div style="clear:both"></div>


                                                <div class="form-group {{ $errors->has("last_name") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("last_name", trans("users.last_name"), []) !!}<span class="reqrd">*</span>
                                                    <div class="">
                                                        {!! Form::text("last_name", null, ["class" => "form-control","placeholder"=> trans("users.last_name")]) !!}
                                                        {!! $errors->first("last_name", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>


                                                <div class="form-group {{ $errors->has("mobile_company") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("mobile_company", trans("users.mobile_company"), []) !!}<span class="reqrd">*</span>
                                                    <div class="">
                                                        {!! Form::select("mobile_company",[''=>trans('general.selectOne')]+config('array.users_mobile_company'), null, ["class" => "form-control","placeholder"=> trans("users.mobile_company")]) !!}
                                                        {!! $errors->first("mobile_company", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>


                                                <div style="clear:both"></div>

                                                <div class="form-group {{ $errors->has("mobile") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("mobile", trans("users.mobile"), []) !!}<span class="reqrd">*</span>
                                                    <div class="">
                                                        {!! Form::text("mobile", null, ["class" => "form-control","placeholder"=> trans("users.mobile")]) !!}
                                                        {!! $errors->first("mobile", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>



                                                <div class="form-group {{ $errors->has("phone") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("phone", trans("users.phone"), []) !!}<span class="reqrd">*</span>
                                                    <div class="">
                                                        {!! Form::text("phone", null, ["class" => "form-control","placeholder"=> trans("users.phone")]) !!}
                                                        {!! $errors->first("phone", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>



                                            </div>
                                        </section>
                                        <section class="clearfix">
                                            <div class="heading">{{trans('website.deliveryInformation')}}</div>


                                            <div class="row">


                                                <div class="form-group {{ $errors->has("name") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("name", trans("address.name"), []) !!}<span class="reqrd">*</span>
                                                    <div class="">
                                                        {!! Form::text("name", null, ["class" => "form-control","placeholder"=> trans("address.name")]) !!}
                                                        {!! $errors->first("name", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>

                                                <div class="form-group {{ $errors->has("area_id") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("area_id", trans("website.area"), []) !!}<span class="reqrd">*</span>
                                                    <div class="">
                                                        {!! Form::select("area_id",[''=>trans('general.selectOne')]+$areaList, null, ["class" => "form-control","placeholder"=> trans("website.area")]) !!}
                                                        {!! $errors->first("area_id", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>


                                                <div style="clear:both"></div>

                                                <div class="form-group col-sm-12 map-cvr">
                                                    <input class="form-control" placeholder="{{trans('website.address')}}" id="placeInput" type="text">
                                                    <div  style="position:relative;" onclick="window.open('/selectAddressFromMap?latitude='+$('#hiddenLatitudeInput').val()+'&longitude='+$('#hiddenLongitudeInput').val()+'', 'address map', 'width=1000,height=1000,status=yes');">
                                                        <div style="position:absolute;left:0px;top:0px;background-color:rgba(255,255,255,0.1);height: 200px;width:100%;">  </div>
                                                        <iframe  onclick="window.location.href='/selectAddressFromMap?latitude='+$('#hiddenLatitudeInput').val()+'&longitude='+$('#hiddenLongitudeInput').val()+''" id="insertAddressIframe"src="" height="200px" width="100%"></iframe>
                                                    </div>
                                                    <div class="map clearfix">
                                                        {{--<iframe  onclick="window.location.href='/selectAddressFromMap?latitude='+$('#hiddenLatitudeInput').val()+'&longitude='+$('#hiddenLongitudeInput').val()+''" id="insertAddressIframe"src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d187179.63669472354!2d47.53111409935966!3d29.33945907845681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3fc5363fbeea51a1%3A0x74726bcd92d8edd2!2sKuwait!3m2!1d29.31166!2d47.481766!5e0!3m2!1sen!2sin!4v1488429901625" width="100%" height="100" frameborder="0" style="border:0" ></iframe>--}}
                                                    </div>


                                                    {!! Form::hidden('long',null,['id'=>'hiddenLongitudeInput']) !!}
                                                    {!! Form::hidden('lat',null,['id'=>'hiddenLatitudeInput']) !!}

                                                </div>

                                                <div class="col-sm-6 radio">
                                                    <div>

                                                        <label><i class="fa fa-building" aria-hidden="true"></i>{!! Form::radio('type',0,null,[]) !!}  {{trans('website.appartment')}}</label>
                                                        <label><i class="fa fa-home" aria-hidden="true"></i> {!! Form::radio('type',1,null,[]) !!}  {{trans('website.house')}}</label>
                                                        <label><i class="fa fa-briefcase" aria-hidden="true"></i> {!! Form::radio('type',2,null,[]) !!}  {{trans('website.office')}}</label>
                                                        {!! $errors->first("type", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>



                                                <div class="form-group {{ $errors->has("paci_number") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("paci_number", trans("website.paciNumber"), []) !!}
                                                    <div class="">
                                                        {!! Form::text("paci_number", null, ["class" => "form-control","placeholder"=> trans("website.paciNumber")]) !!}
                                                        {!! $errors->first("paci_number", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>

                                                <div style="clear:both"></div>


                                                <div class="form-group {{ $errors->has("block") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("block", trans("address.block"), []) !!}<span class="reqrd">*</span>
                                                    <div class="">
                                                        {!! Form::text("block", null, ["class" => "form-control","placeholder"=> trans("address.block")]) !!}
                                                        {!! $errors->first("block", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>


                                                <div class="form-group {{ $errors->has("street") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("street", trans("address.street"), []) !!}<span class="reqrd">*</span>
                                                    <div class="">
                                                        {!! Form::text("street", null, ["class" => "form-control","placeholder"=> trans("address.street")]) !!}
                                                        {!! $errors->first("street", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>

                                                <div style="clear:both"></div>

                                                <div class="form-group {{ $errors->has("avenue") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("avenue", trans("address.avenue"), []) !!}<span class="reqrd">*</span>
                                                    <div class="">
                                                        {!! Form::text("avenue", null, ["class" => "form-control","placeholder"=> trans("address.avenue")]) !!}
                                                        {!! $errors->first("avenue", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>
                                                <div class="form-group {{ $errors->has("building") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("building", trans("address.building"), []) !!}<span class="reqrd">*</span>
                                                    <div class="">
                                                        {!! Form::text("building", null, ["class" => "form-control","placeholder"=> trans("address.building")]) !!}
                                                        {!! $errors->first("building", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>


                                                <div style="clear:both"></div>

                                                <div class="form-group {{ $errors->has("floor") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("floor", trans("address.floor"), []) !!}<span class="reqrd">*</span>
                                                    <div class="">
                                                        {!! Form::text("floor", null, ["class" => "form-control","placeholder"=> trans("address.floor")]) !!}
                                                        {!! $errors->first("floor", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>

                                                <div class="form-group {{ $errors->has("apartment_number") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("apartment_number", trans("address.apartment_number"), []) !!}<span class="reqrd">*</span>
                                                    <div class="">
                                                        {!! Form::text("apartment_number", null, ["class" => "form-control","placeholder"=> trans("address.apartment_number")]) !!}
                                                        {!! $errors->first("apartment_number", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>



                                                <div style="clear:both"></div>

                                                <div class="form-group {{ $errors->has("address_mobile") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("address_mobile", trans("address.mobile"), []) !!}<span class="reqrd">*</span>
                                                    <div class="">
                                                        {!! Form::text("address_mobile", null, ["class" => "form-control","placeholder"=> trans("address.mobile")]) !!}
                                                        {!! $errors->first("address_mobile", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>


                                                <div class="form-group {{ $errors->has("address_phone") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("address_phone", trans("address.phone"), []) !!}<span class="reqrd">*</span>
                                                    <div class="">
                                                        {!! Form::text("address_phone", null, ["class" => "form-control","placeholder"=> trans("address.phone")]) !!}
                                                        {!! $errors->first("address_phone", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>



                                                <div style="clear:both"></div>




                                                <div class="form-group {{ $errors->has("directions") ? "has-error" : ""}}  col-xs-12">
                                                    {!! Form::label("directions", trans("address.directions"), []) !!} ({{trans('website.optional')}})
                                                    <div class="">
                                                        {!! Form::textarea("directions", null, ["class" => "form-control","style"=>"height:100px;","type"=>"text","placeholder"=> trans("address.directions")]) !!}
                                                        {!! $errors->first("directions", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>

                                            </div>
                                        </section>
                                        <section class="clearfix">
                                            <div class="heading">{{trans('website.personalInformation')}}</div>

                                            <div class="row">


                                                <div class="form-group {{ $errors->has("gender") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("gender", trans("users.gender"), []) !!}<span class="reqrd">*</span>
                                                    <div class="">
                                                        {!! Form::select("gender",[''=>trans('general.selectOne')]+config('array.users_gender'), null, ["class" => "form-control","placeholder"=> trans("users.gender")]) !!}
                                                        {!! $errors->first("gender", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>


                                                <div class="form-group {{ $errors->has("occupation") ? "has-error" : ""}}  col-xs-6">
                                                    {!! Form::label("occupation", trans("users.occupation"), []) !!}<span class="reqrd">*</span>
                                                    <div class="">
                                                        {!! Form::select("occupation",[''=>trans('general.selectOne')]+config('array.users_occupation'), null, ["class" => "form-control","placeholder"=> trans("users.occupation")]) !!}
                                                        {!! $errors->first("occupation", "<p class='help-block'>:message</p>") !!}
                                                    </div>
                                                </div>

                                                <div style="clear:both"></div>


                                                <div class="form-group  {{ $errors->has("terms") ? "has-error" : ""}}   col-sm-12">

                                                    <label class="chk-block"><input type="checkbox" name="terms" value="1">{{trans('website.agreementText')}} </label>
                                                    {!! $errors->first("terms", "<p class='help-block'>:message</p>") !!}

                                                </div>
                                                <hr>
                                                <center><button type="submit" class="btn btn-info btn-lg">{{trans('website.submit')}}</button> </center>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>

                            @include('website.partials.asideMenu')
                        </div>
                        {!! Form::close() !!}
                    </div>

 




                </section>




                <link href="/assets/website/css/bootstrap-datetimepicker.css" rel="stylesheet" media="screen">


@endsection

@section('script')

    @parent

    <script type="text/javascript" src="/assets/website/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript">
        $('.form_datetime').datetimepicker({
            //language:  'fr',
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            forceParse: 0,
            showMeridian: 1
        });
        $('.form_date').datetimepicker({
            language:  'en',
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        });
        $('.form_time').datetimepicker({
            language:  'en',
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 1,
            minView: 0,
            maxView: 1,
            forceParse: 0
        });
    </script>
    @if (Session::get('flash_success'))
            
                 <script>

                            function successAlert() {
                                var html = '<div style="text-align:center;padding:10px;color:#08a208;padding-bottom: 50px;    font-size: 24px;"> {!! Session::get('flash_success') !!}</div>';
                               $('#generalPopupModel  .modal-body').html(html);
                                $('#generalPopupModel').modal('show');

                                setTimeout('window.location.href="/"',2000);
                            }
                            setTimeout('successAlert()',1000);
                        </script>
@endif


    @stop


