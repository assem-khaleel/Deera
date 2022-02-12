


<div id="add-addresss" "reveal-modal3" >

<div class="sign_in">
    <h3>{{trans('website.addAddress')}}</h3>

    <div class="address_add" style="overflow: auto;">


        <div class="col-xs-12">

            {!! Form::model($address, [
                'method' => 'PATCH',
                'url' => '/address/'.(isset($address->id)? $address->id:0),
                'class' => '  formWithResponse',
                'id'=>'addEditAddressForm',
                'onsubmit'=>"formWithResponse('#addEditAddressForm');",
                'data-success-function'=>'addWhenSuccess',
                'data-success-place'=>'#addressListDiv',
                'data-wait-place'=>'#formWaitingPlace'

            ]) !!}

            <script>

                window.addWhenSuccess = function (form, targetPlace, data) {
                    $(form.data('wait-place')).hide();
                    var html = 'Success';
                    try {
                        var responseJson = jQuery.parseJSON(data);
                        if (typeof  responseJson.status == "undefined") {

                        } else {

                            var id = responseJson.id;
                            if ($('#oneAddressSelectLabel_' + id).length > 0) {
                                $('#oneAddressSelectLabel_' + id + ' .addressNameSpan').html(responseJson.name);
                            } else {
                                $('#addressListDiv').append(oneAddressLabelHtml(id, responseJson.name));
                            }
                            if (typeof  responseJson.redirect != "undefined") {
                                window.location.href = responseJson.redirect;
                            }
                        }
                    } catch (e) {
                        html = data;
                    }
                    $('#generalPopupModel').modal('hide');
//        $('#generalPopupModel').modal().hide();
//        $('#generalPopupModel').modal({
//            show: 'false'
//        });

                    //$(targetPlace).append(html);
                }

                function oneAddressLabelHtml(id, name) {
                    $('.oneAddressSelectLabel input:checked').prop('checked', false);
                    if ($('#finalAddressIdInput').length > 0) {
                        $('#finalAddressIdInput').val(id);
                    }

                    var html = '<label class="oneAddressSelectLabel" id="oneAddressSelectLabel_' + id + '">' +
                            '<input type="radio" name="selected_address_id" value="' + id + '" onchange="$(\'#selectAddressForm\').submit();" checked  > <span class="addressNameSpan"> ' + name + '</span>' +
                            '<a class="pull-right aWithResponse" href="/address/create?address_id=' + id + '" id="oneAddressSelectA_' + id + '"  data-success-place="#generalPopupModel  .modal-body"  >' +
                            '<i class="fa fa-pencil"></i> </a></label>';

                    return html;
                }

            </script>
            <div class="form-group {{ $errors->has("name") ? "has-error" : ""}}  col-xs-6">
                {{--                    {!! Form::label("name", trans("address.name"), []) !!}<span class="reqrd">*</span>--}}
                <div class="col-xs-12">
                    {!! Form::text("name", null, ["class" => "text_log","placeholder"=> trans("address.name")]) !!}
                    {!! $errors->first("name", "<p class='help-block'>:message</p>") !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has("area_id") ? "has-error" : ""}}  col-xs-6">
                {{--                    {!! Form::label("area_id", trans("website.area"), []) !!}<span class="reqrd">*</span>--}}
                <div class="col-xs-12">
                    {!! Form::select("area_id",[''=>trans('general.area')]+$areaList, null, ["class" => "text_log","placeholder"=> trans("website.area")]) !!}
                    {!! $errors->first("area_id", "<p class='help-block'>:message</p>") !!}
                </div>
            </div>


            <div style="clear:both"></div>

            <div class="form-group col-sm-12 map-cvr">
                <input class="text_log" placeholder=" {{trans('website.locationMap')}} " id="placeInput"
                       type="text">

                <div style="position:relative;"
                     onclick="window.open('/selectAddressFromMap?latitude='+$('#hiddenLatitudeInput').val()+'&longitude='+$('#hiddenLongitudeInput').val()+'', 'address map', 'width=1000,height=1000,status=yes');">
                    <div style="position:absolute;left:0px;top:0px;background-color:rgba(255,255,255,0.1);height: 200px;width:100%;"></div>
                    <iframe onclick="window.location.href='/selectAddressFromMap?latitude='+$('#hiddenLatitudeInput').val()+'&longitude='+$('#hiddenLongitudeInput').val()+''"
                            id="insertAddressIframe" src="" height="200px" width="100%"></iframe>
                </div>
                <div class="map clearfix">
                    {{--<iframe  onclick="window.location.href='/selectAddressFromMap?latitude='+$('#hiddenLatitudeInput').val()+'&longitude='+$('#hiddenLongitudeInput').val()+''" id="insertAddressIframe"src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d187179.63669472354!2d47.53111409935966!3d29.33945907845681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3fc5363fbeea51a1%3A0x74726bcd92d8edd2!2sKuwait!3m2!1d29.31166!2d47.481766!5e0!3m2!1sen!2sin!4v1488429901625" width="100%" height="100" frameborder="0" style="border:0" ></iframe>--}}
                </div>


                {!! Form::hidden('long',null,['id'=>'hiddenLongitudeInput']) !!}
                {!! Form::hidden('lat',null,['id'=>'hiddenLatitudeInput']) !!}
                <script>
                    $(document).ready(function () {
                        $('#insertAddressIframe').attr('src', '/selectAddressFromMap?latitude=' + $('#hiddenLatitudeInput').val() + '&longitude=' + $('#hiddenLongitudeInput').val() + '')
                    });
                </script>
            </div>

            {{--<div class="col-sm-6 radio">--}}
            {{--<div> <label><i class="fa fa-building" aria-hidden="true"></i> &ensp;&ensp;&ensp;&ensp;{!! Form::radio('type',0,null,['checked'=>'checked']) !!}  {{trans('website.appartment')}}</label>--}}
            {{--<label><i class="fa fa-home" aria-hidden="true"></i> &ensp;&ensp;&ensp;&ensp;{!! Form::radio('type',1,null,[]) !!}  {{trans('website.house')}} </label>--}}
            {{--<label><i class="fa fa-briefcase" aria-hidden="true"></i> &ensp;&ensp;&ensp;&ensp;{!! Form::radio('type',2,null,[]) !!}  {{trans('website.office')}}  </label>--}}

            {{--{!! $errors->first("type", "<p class='help-block'>:message</p>") !!}--}}
            {{--</div>--}}
            {{--</div>--}}



            <div class="form-group {{ $errors->has("mobile") ? "has-error" : ""}}  col-xs-6">
                {{--{!! Form::label("mobile", trans("address.mobile"), []) !!}<span class="reqrd">*</span>--}}
                <div class="col-xs-12">
                    {!! Form::text("mobile", null, ["class" => "text_log","placeholder"=> trans("address.mobile")]) !!}
                    {!! $errors->first("mobile", "<p class='help-block'>:message</p>") !!}
                </div>
            </div>


            <div class="form-group {{ $errors->has("phone") ? "has-error" : ""}}  col-xs-6">
                {{--{!! Form::label("phone", trans("address.phone"), []) !!}<span class="reqrd">*</span>--}}
                <div class="col-xs-12">
                    {!! Form::text("phone", null, ["class" => "text_log","placeholder"=> trans("address.phone")]) !!}
                    {!! $errors->first("phone", "<p class='help-block'>:message</p>") !!}
                </div>
            </div>
            <div style="clear:both"></div>


            <div class="form-group {{ $errors->has("block") ? "has-error" : ""}}  col-xs-6">
                {{--                    {!! Form::label("block", trans("address.block"), []) !!}<span class="reqrd">*</span>--}}
                <div class="col-xs-12">
                    {!! Form::text("block", null, ["class" => "text_log","placeholder"=> trans("address.block")]) !!}
                    {!! $errors->first("block", "<p class='help-block'>:message</p>") !!}
                </div>
            </div>


            <div class="form-group {{ $errors->has("street") ? "has-error" : ""}}  col-xs-6">
                {{--                    {!! Form::label("street", trans("address.street"), []) !!}<span class="reqrd">*</span>--}}
                <div class="col-xs-12">
                    {!! Form::text("street", null, ["class" => "text_log","placeholder"=> trans("address.street")]) !!}
                    {!! $errors->first("street", "<p class='help-block'>:message</p>") !!}
                </div>
            </div>

            <div style="clear:both"></div>

            <div class="form-group {{ $errors->has("avenue") ? "has-error" : ""}}  col-xs-6">
                {{--{!! Form::label("avenue", trans("address.avenue"), []) !!}<span class="reqrd">*</span>--}}
                <div class="col-xs-12">
                    {!! Form::text("avenue", null, ["class" => "text_log","placeholder"=> trans("address.avenue")]) !!}
                    {!! $errors->first("avenue", "<p class='help-block'>:message</p>") !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has("building") ? "has-error" : ""}}  col-xs-6">
                {{--                    {!! Form::label("building", trans("address.building"), []) !!}<span class="reqrd">*</span>--}}
                <div class="col-xs-12">
                    {!! Form::text("building", null, ["class" => "text_log","placeholder"=> trans("address.building")]) !!}
                    {!! $errors->first("building", "<p class='help-block'>:message</p>") !!}
                </div>
            </div>


            <div style="clear:both"></div>

            <div class="form-group {{ $errors->has("floor") ? "has-error" : ""}}  col-xs-6">
                {{--                    {!! Form::label("floor", trans("address.floor"), []) !!}<span class="reqrd">*</span>--}}
                <div class="col-xs-12">
                    {!! Form::text("floor", null, ["class" => "text_log","placeholder"=> trans("address.floor")]) !!}
                    {!! $errors->first("floor", "<p class='help-block'>:message</p>") !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has("apartment_number") ? "has-error" : ""}}  col-xs-6">
                {{--                    {!! Form::label("apartment_number", trans("address.apartment_number"), []) !!}<span class="reqrd">*</span>--}}
                <div class="col-xs-12">
                    {!! Form::text("apartment_number", null, ["class" => "text_log","placeholder"=> trans("address.apartment_number")]) !!}
                    {!! $errors->first("apartment_number", "<p class='help-block'>:message</p>") !!}
                </div>
            </div>


            <div style="clear:both"></div>




            <div class="form-group {{ $errors->has("directions") ? "has-error" : ""}}  col-xs-6">
                {{--{!! Form::label("directions", trans("address.phone"), []) !!}<span class="reqrd">*</span>--}}
                <div class="col-xs-12">
                    {!! Form::text("directions", null, ["class" => "text_log","placeholder"=> trans("address.directions")]) !!}
                    {!! $errors->first("directions", "<p class='help-block'>:message</p>") !!}
                </div>
            </div>


            <div class="form-group {{ $errors->has("paci_number") ? "has-error" : ""}}  col-xs-6">
                {{--                    {!! Form::label("paci_number", trans("website.paciNumber"), []) !!}--}}
                <div class="col-xs-12">
                    {!! Form::text("paci_number", null, ["class" => "text_log","placeholder"=> trans("website.paciNumber")]) !!}
                    {!! $errors->first("paci_number", "<p class='help-block'>:message</p>") !!}
                </div>
            </div>


            <div style="clear:both"></div>


            {{--<div class="form-group {{ $errors->has("directions") ? "has-error" : ""}}  col-xs-12">--}}
            {{--{!! Form::label("directions", trans("address.directions"), []) !!} ({{trans('website.optional')}})--}}
            {{--<div class="col-xs-12">--}}
            {{--{!! Form::textarea("directions", null, ["class" => "text_log","style"=>"height:100px;","type"=>"text","placeholder"=> trans("address.directions")]) !!}--}}
            {{--{!! $errors->first("directions", "<p class='help-block'>:message</p>") !!}--}}
            {{--</div>--}}
            {{--</div>--}}

            <div class="clearfix"></div>

            <hr>
            <center>

                <button type="submit" name="add_address" value="1" class="log_btn">{{trans('website.save')}} <span
                            id="formWaitingPlace" style="font-size: 8px;"></span></button>

            </center>

            {!! Form::close() !!}


        </div>


    </div>


</div>

<a class="close-reveal-modal"></a>

</div>
