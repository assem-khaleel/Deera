



    {!! Form::open( [
'method' => 'post',
'url' => '/recover',
'class' => '  formWithResponse',
'id'=>'recoverForm',
'onsubmit'=>"formWithResponse('#recoverForm');return false;",
'data-success-function'=>'refreshWhenSuccess',
'data-error-function'=>'errorRecoverFunction',
'data-wait-function'=>'ff',
'data-success-place'=>'#addressListDiv',
'data-wait-place'=>'#formWaitingPlace'

]) !!}
    <script>
        window.refreshWhenSuccess=function(form,b,c){//alert(43);
            //window.location.reload();
            console.log(c,b,form);
            $(form.data('wait-place')).hide();
            var html = '<div style="text-align:center;padding:10px;color:#08a208;padding-bottom: 50px;    font-size: 24px;"> {{trans('website.resetThank')}}</div>';
            $('#generalPopupModel  .modal-body').html(html);

        }

        window.errorRecoverFunction=function(form,b,c){
            $('#errorForgetPlace').show();
            $('#errorForgetPlace').text('The email id doesn`t exist.');
        }

        $('#myModal_login').modal('hide');
        $('.close-reveal-modal').click();

        window.ff=function(a,b,c){

        }
    </script>
    <div class="sign_in col-xs-12">
 <span
         id="formWaitingPlace" style="font-size: 12px; clear: both;"></span>
        <h3> {{trans('website.enterEmailToReset')}}</h3>

        <div class="alert alert-danger alert-dark" id="errorForgetPlace" style="clear:both;display: none;">

        </div>

        <div class="log_fill">

            <input type="text" class="form-control" id="uLogin" placeholder="{{trans('website.email')}}" name="email" required>
            <input type="hidden" name="web" value="1">
        </div>
        <div class="log_fill">

          </div>
        <input type="submit" class="log_btn" value="{{trans('website.submit')}}">

    </div>

    {!! Form::close() !!}