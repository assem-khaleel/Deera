<div id="add-addresss" >

    <div class="sign_in">
        <h3> {{ trans('website.pleaseEnteruserEmail') }} </h3>

        <div class="blog_add" >
            <div id="formWaitingPlace" style="padding:10px;clear:both;"></div>

            <div class="col-xs-12">
                {!! Form::model($request, [
                    'route'=>'website.gift_card.send',
                    'class' => '  formWithResponse',
                    'id'=>'sendCardForm',
                    'files'=>true,
                   'onsubmit'=>"formWithResponse('#sendCardForm');",
                    'data-success-function'=>'refreshWithSuccess',
                    'data-success-place'=>'#formWaitingPlace',
                    'data-wait-place'=>'#formWaitingPlace'

                ]) !!}

                <script>

                    window.refreshWithSuccess = function (form, targetPlace, data) {
                        $(form.data('wait-place')).hide();
                        window.location.reload();

                    }


                </script>
                <div class="log_fill  col-xs-12"><div class="col-xs-12"><input type="text" class="text_log" placeholder="Full Name"></div></div>

                <div class="form-group {{ $errors->has("email") ? "has-error" : ""}}  col-xs-12">
                    {{--                    {!! Form::label("name", trans("address.name"), []) !!}<span class="reqrd">*</span>--}}
                    <div class="col-xs-12">
                        {!! Form::text("email", null, ["class" => "text_log","placeholder"=> trans("website.email")]) !!}
                        {!! $errors->first("email", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>

                <div class="log_fill  col-xs-12"><div class="col-xs-12"><input type="text" class="text_log" placeholder="Message"></div></div>






                <div class="clearfix"></div>

                <hr>
                <center>
                    <input type="hidden" name="users_gift_card_id">
                    {!! Form::hidden('users_gift_card_id',null) !!}

                    <button type="submit" name="add_address" value="1" class="log_btn">{{trans('website.send')}} <span
                                id="formWaitingPlace" style="font-size: 8px;"></span></button>

                </center>

                {!! Form::close() !!}





            </div>


        </div>


    </div>

    <a class="close-reveal-modal"></a>

</div>
