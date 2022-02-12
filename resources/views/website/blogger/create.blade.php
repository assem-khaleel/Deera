<div id="add-addresss" >
    <div class="sign_in">
        <h3> {{ trans('website.becomeBlogger') }}</h3>

        <div class="blog_add" >
            <div id="formWaitingPlace" style="padding:10px;clear:both;display:none;"></div>
            <div id="xxx_formErrorPlace" ></div>

            <div class="col-xs-12">
                {!! Form::model($request, [
                    'url' => '/blogger',
                    'class' => '  formWithResponse',
                    'id'=>'becomeBloggerForm',
                    'files'=>true,
                   'onsubmit'=>"formWithResponse('#becomeBloggerForm');",
                    'data-success-function'=>'becomeBloggerSuccess',
                    'data-success-place'=>'#xxx_addressListDiv',
                    'data-wait-place'=>'#formWaitingPlace',
                    'data-error-place'=>'#xxx_formErrorPlace'

                ]) !!}

                <script>

                    window.becomeBloggerSuccess = function (form, targetPlace, data) {
                        $(form.data('wait-place')).hide();
                     //   window.location.reload();
//$('#generalPopupModel').modal('hide');
//                        var html = '<div style="text-align:center;padding:10px;color:#08a208;padding-bottom: 50px;    font-size: 24px;"> Thank you, We will contact you soon.</div>';
//                        $('#generalPopupModel  .modal-body').html(html);


                        $('.alert-success').html(" Thank you, We will contact you soon.");
                        $('.alert-success').show();
                    }


                </script>



                <div style="clear:both"></div>
                <div class="alert alert-success" style="clear:both; display:none;">


                </div>
                <div style="clear:both"></div>


{{--*/
$name='';
$phone='';
$email='';
$facebook_account='';
$linkedin_account='';
$twitter_account='';
if(isset(current_user()->getUser()->id) && current_user()->getUser()->type==config('array.users_type_registered_index')){


$name=current_user()->getUser()->first_name.' '.current_user()->getUser()->last_name;
$phone=current_user()->getUser()->phone;
$email=current_user()->getUser()->email;
}

/*--}}

                <div class="form-group {{ $errors->has("name") ? "has-error" : ""}}  col-xs-6">
                    {{--                    {!! Form::label("name", trans("address.name"), []) !!}<span class="reqrd">*</span>--}}
                    <div class="col-xs-12">
                        {!! Form::text("name",($name!='')? $name:null, ["class" => "text_log","placeholder"=> trans("website.name")]) !!}
                        {!! $errors->first("name", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has("phone") ? "has-error" : ""}}  col-xs-6">
                    {{--                    {!! Form::label("name", trans("address.name"), []) !!}<span class="reqrd">*</span>--}}
                    <div class="col-xs-12">
                        {!! Form::text("phone", ($phone!='')? $phone:null, ["class" => "text_log","placeholder"=> trans("users.mobile")]) !!}
                        {!! $errors->first("phone", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has("email") ? "has-error" : ""}}  col-xs-6">
                    {{--                    {!! Form::label("name", trans("address.name"), []) !!}<span class="reqrd">*</span>--}}
                    <div class="col-xs-12">
                        {!! Form::text("email", ($email!='')? $email:null, ["class" => "text_log","placeholder"=> trans("website.email")]) !!}
                        {!! $errors->first("email", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>


 <div class="form-group {{ $errors->has("facebook_account") ? "has-error" : ""}}  col-xs-6">
                    {{--                    {!! Form::label("name", trans("website.facebook_account"), []) !!}<span class="reqrd">*</span>--}}
                    <div class="col-xs-12">
                        {!! Form::text("facebook_account", ($facebook_account!='')? $facebook_account:null, ["class" => "text_log","placeholder"=> trans("website.facebook_account")]) !!}
                        {!! $errors->first("facebook_account", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>

 <div class="form-group {{ $errors->has("twitter_account") ? "has-error" : ""}}  col-xs-6">
                    {{--                    {!! Form::label("name", trans("website.twitter_account"), []) !!}<span class="reqrd">*</span>--}}
                    <div class="col-xs-12">
                        {!! Form::text("twitter_account", ($twitter_account!='')? $twitter_account:null, ["class" => "text_log","placeholder"=> trans("website.twitter_account")]) !!}
                        {!! $errors->first("twitter_account", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>

 <div class="form-group {{ $errors->has("linkedin_account") ? "has-error" : ""}}  col-xs-6">
                    {{--                    {!! Form::label("name", trans("website.linkedin_account"), []) !!}<span class="reqrd">*</span>--}}
                    <div class="col-xs-12">
                        {!! Form::text("linkedin_account", ($linkedin_account!='')? $linkedin_account:null, ["class" => "text_log","placeholder"=> trans("website.linkedin_account")]) !!}
                        {!! $errors->first("linkedin_account", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>










                <div class="clearfix"></div>

                <hr>
                <center>

                    <button type="submit" name="add_address" value="1" class="log_btn">{{ trans('website.send')}} <span
                                id="formWaitingPlace" style="font-size: 8px;"></span></button>

                </center>

                {!! Form::close() !!}





            </div>


        </div>


    </div>

    <a class="close-reveal-modal"></a>

</div>
