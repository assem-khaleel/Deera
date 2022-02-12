<div id="add-addresss" >

<div class="sign_in">
    <h3> {{ trans('website.addPost') }}</h3>

    <div class="blog_add" >
<div id="formWaitingPlace" style="padding:10px;clear:both;"></div>

        <div class="col-xs-12">
{!! Form::model($request, [
    'url' => '/blog',
    'class' => '  formWithResponse',
    'id'=>'postArticleForm',
    'files'=>true,
   //'onsubmit'=>"formWithResponse('#postArticleForm');",
    'data-success-function'=>'addWhenSuccess',
    'data-success-place'=>'#addressListDiv',
    'data-wait-place'=>'#formWaitingPlace'

]) !!}

<script>

    window.refreshWithSuccess = function (form, targetPlace, data) {
        $(form.data('wait-place')).hide();
     window.location.reload();

    }


</script>
<div class="form-group {{ $errors->has("title") ? "has-error" : ""}}  col-xs-6">
    {{--                    {!! Form::label("name", trans("address.name"), []) !!}<span class="reqrd">*</span>--}}
    <div class="col-xs-12">
        {!! Form::text("title", null, ["class" => "text_log","placeholder"=> trans("website.title")]) !!}
        {!! $errors->first("title", "<p class='help-block'>:message</p>") !!}
    </div>
</div>



                <aside class="col-md-6">
                    <div style="position:relative;">
                        <a class='text_box uplod' href='javascript:;'>
                             {{ trans("website.uploadImage") }}
                            <input type="file" style='position:absolute;z-index:2;top:0;width:100%;height:100%;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="img"  size="40"  onchange='$("#upload-file-info").html($(this).val());'>
                        </a>
                        &nbsp;
                        <span class='label label-info' id="upload-file-info"></span>
                        <h6><span>Format (.gif,.jpg,.jpeg,.jfif,.bmp or .png)</span></h6>
                    </div>
                </aside>



<div class="form-group {{ $errors->has("description") ? "has-error" : ""}}  col-xs-12">
    {{--                    {!! Form::label("name", trans("address.name"), []) !!}<span class="reqrd">*</span>--}}
    <div class="col-xs-12">
        {!! Form::textarea("description", null, ["class" => "text_log","placeholder"=> trans("website.description")]) !!}
        {!! $errors->first("description", "<p class='help-block'>:message</p>") !!}
    </div>
</div>



<div class="clearfix"></div>

<hr>
<center>

    <button type="submit" name="add_address" value="1" class="log_btn">{{ trans('website.save')}} <span
                id="formWaitingPlace" style="font-size: 8px;"></span></button>

</center>

{!! Form::close() !!}





        </div>


    </div>


</div>

    <a class="close-reveal-modal"></a>

</div>
