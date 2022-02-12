

                        {!! Form::model($request,
                        [
      'method' => 'POST',
      'url' => '/shop',
      'class' => 'formWithResponse',
      'id'=>'addClientShopForm',
      'onsubmit'=>"formWithResponse('#addClientShopForm');return false;",
      'data-success-function'=>'showAddShopSuccessMessage',
      'data-success-place'=>'#addShopWatingPlace',
      'data-wait-place'=>'#addShopWatingPlace'

  ]) !!}

                        <script>

                            window.showAddShopSuccessMessage = function (form, targetPlace, data) {

                                $(form.data('wait-place')).hide();
                                {{--var html = '<div style="text-align:center;padding:10px;color:#08a208;padding-bottom: 50px;    font-size: 24px;"> {{trans('website.addShopThanks')}}</div>';--}}
                               {{--$('#generalPopupModel  .modal-body').html(html);--}}

                                    $('.alert-success').html("{{trans('website.addShopThanks')}}");
                                    $('.alert-success').show();

                            }
                        </script>

<div id="addShopWatingPlace" style="text-align: center;"></div>

                        <div class="sign_in">
                            <h3> {{trans('website.addCoffeShop')}}  </h3>


                            <div style="clear:both"></div>
                            <div class="alert alert-success" style="clear:both; display:none;">


                            </div>
                            <div style="clear:both"></div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="log_fill">
                                        <input type="text" name="name_en" class="text_log" placeholder="{{trans('website.coffeShopname')}} ">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="log_fill">
                                        <input type="text" name="Owner_first_name" class="text_log" placeholder="{{trans('website.representativeName')}} ">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="log_fill"><input type="text" name="telephone" class="text_log" placeholder="{{trans('website.phone')}}"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="log_fill"><input type="text" name="email" class="text_log" placeholder="{{trans('website.email')}}"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="log_fill"><input type="text" name="url" class="text_log" placeholder="{{trans('website.website')}}"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="log_fill"><input type="text" name="instagram" class="text_log" placeholder="{{trans('website.instagramAccount')}}"></div>
                                </div>
                            </div>

                            <div class="log_fill">
                                <h6> {{trans('website.inquiresContact')}} <span>{{trans('website.deeraEmailText')}}</span> {{trans('website.calluss')}} <span>{{trans('website.cofeDistrictPhone')}}</span>
                                </h6>

                            </div>



                            <input type="submit" class="log_btn" value="{{trans('website.submit')}}">


                        </div>
                        {!! Form::close() !!}

<style type="text/css">
    #defaultErrorMessagesDiv{display: none !important;}
</style>