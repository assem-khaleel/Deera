@extends('common.layouts.main')

@section('title', trans('general.coffee'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.coffee') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.coffee') }}</a></li>
                        <li class="active">{{ trans('coffee.editcoffee') }}</li>
                    </ol>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <form role="search" class="app-search hidden-xs pull-right">
                        <input type="text" placeholder=" {{ trans('general.search') }} ..." class="form-control">
                        <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
                    </form>
                </div>
            </div>



            <div class="row">


                <div class="col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">{{ trans('coffee.coffee') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('coffee.editcoffee') }}</p>
                        <!-- Nav tabs -->

                        @include ('common/partials/messages')
                        <ul class="nav nav-tabs" role="tablist">


                            <li role="presentation" class="active">
                                <a href="#idetail" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-home"></i>{{trans('general.basic')}}</span></a>
                            </li>



                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">


                            <div role="tabpanel" class="tab-pane active" id="idetail">


                                {!! Form::model($coffee, [
                                    'method' => 'PATCH',
                                    'url' => ['/admin/coffee', $coffee->id],
                                    'class' => 'form-horizontal'
                                ]) !!}







                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">{{ trans('coffee.addcoffee') }}</span>
                                    </div>

                                    <div class="panel-body">





                                        <div class="form-group {{ $errors->has("name_en") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("name_en", trans("coffee.name_en"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::text("name_en", null, ["class" => "form-control","placeholder"=> trans("coffee.name_en")]) !!}
                                                {!! $errors->first("name_en", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>



                                        <div class="form-group {{ $errors->has("name_ar") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("name_ar", trans("coffee.name_ar"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::text("name_ar", null, ["class" => "form-control","placeholder"=> trans("coffee.name_ar")]) !!}
                                                {!! $errors->first("name_ar", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>



                                        <div class="form-group {{ $errors->has("shop_id") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("shop_id", trans("general.shop"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("shop_id",$shopList, null, ["class" => "form-control mainSelect","data-target"=>"select[name=menu_section_id]","placeholder"=> trans("coffee.shop_id")]) !!}
                                                {!! $errors->first("shop_id", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>





                                        <div class="form-group {{ $errors->has("cuisine_id") ? "has-error" : ""}}  col-xs-6" style="display:none;">
                                            {!! Form::label("cuisine_id", trans("general.cuisine"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("cuisine_id",$cuisineList, (!isset($request->cuisine_id)? 0:null) , ["class" => "form-control","placeholder"=> trans("coffee.cuisine_id")]) !!}
                                                {!! $errors->first("cuisine_id", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>



                                        <div class="form-group {{ $errors->has("menu_section_id") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("menu_section_id", trans("general.menu_section"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("menu_section_id",$menuSectionList, null, ["class" => "form-control","placeholder"=> trans("coffee.menu_section_id")]) !!}
                                                {!! $errors->first("menu_section_id", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>




                                        <div class="form-group {{ $errors->has("category_id") ? "has-error" : ""}}  col-xs-6" style="display:none">
                                            {!! Form::label("category_id", trans("general.category"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("category_id",$categoryList, (!isset($request->category_id)? 0:null) , ["class" => "form-control","placeholder"=> trans("coffee.category_id")]) !!}
                                                {!! $errors->first("category_id", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>



                                        <div class="form-group {{ $errors->has("delivery_menu_id") ? "has-error" : ""}}  col-xs-6" style="display:none">
                                            {!! Form::label("delivery_menu_id", trans("general.delivery_menu"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("delivery_menu_id",$deliveryMenuList, (!isset($request->delivery_menu_id)? 0:null) , ["class" => "form-control","placeholder"=> trans("coffee.delivery_menu_id")]) !!}
                                                {!! $errors->first("delivery_menu_id", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>


                                        <div class="form-group {{ $errors->has("parent_id") ? "has-error" : ""}}  col-xs-6" style="display:none">
                                            {!! Form::label("parent_id", trans("general.parent"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::text("parent_id",  (!isset($request->parent_id)? 0:null) , ["class" => "form-control","placeholder"=> trans("coffee.parent_id")]) !!}
                                                {!! $errors->first("parent_id", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>

                                        <div class="form-group {{ $errors->has("price") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("price", trans("coffee.price"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::text("price", null, ["class" => "form-control","placeholder"=> trans("coffee.price")]) !!}
                                                {!! $errors->first("price", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>



                                        <div class="form-group {{ $errors->has("quantity") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("quantity", trans("coffee.quantity"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::text("quantity", null, ["class" => "form-control","placeholder"=> trans("coffee.quantity")]) !!}
                                                {!! $errors->first("quantity", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>



                                        <div class="form-group {{ $errors->has("img") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("img", trans("coffee.img"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::text("img", null, ["class" => "form-control uploadFile","placeholder"=> trans("coffee.img")]) !!}
                                                {!! $errors->first("img", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>



                                        <div class="form-group {{ $errors->has("discount") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("discount", trans("coffee.discount"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::text("discount", null, ["class" => "form-control","placeholder"=> trans("coffee.discount")]) !!}
                                                {!! $errors->first("discount", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>



                                        <div class="form-group {{ $errors->has("available_from") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("available_from", trans("coffee.available_from"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::text("available_from", null, ["class" => "form-control mydatepicker","placeholder"=> trans("coffee.available_from")]) !!}
                                                {!! $errors->first("available_from", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>



                                        <div class="form-group {{ $errors->has("available_to") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("available_to", trans("coffee.available_to"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::text("available_to", null, ["class" => "form-control mydatepicker","placeholder"=> trans("coffee.available_to")]) !!}
                                                {!! $errors->first("available_to", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>



                                        <div class="form-group {{ $errors->has("description_en") ? "has-error" : ""}}  col-xs-12">
                                            {!! Form::label("description_en", trans("coffee.description_en"), ["class" => "col-sm-12"]) !!}
                                            <div class="col-sm-12">
                                                {!! Form::textarea("description_en", null, ["class" => "form-control","placeholder"=> trans("coffee.description_en")]) !!}
                                                {!! $errors->first("description_en", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>



                                        <div class="form-group {{ $errors->has("description_ar") ? "has-error" : ""}}  col-xs-12">
                                            {!! Form::label("description_ar", trans("coffee.description_ar"), ["class" => "col-sm-12"]) !!}
                                            <div class="col-sm-12">
                                                {!! Form::textarea("description_ar", null, ["class" => "form-control","placeholder"=> trans("coffee.description_ar")]) !!}
                                                {!! $errors->first("description_ar", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>



                                        <div class="form-group {{ $errors->has("status") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("status", trans("coffee.status"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("status",config('array.coffee_status'), null, ["class" => "form-control","placeholder"=> trans("coffee.status")]) !!}
                                                {!! $errors->first("status", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>







                                        <div class="form-group">
                                            <div class="col-sm-offset-9 col-sm-3">
                                                {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                {!! Form::close() !!}


                            </div>

                        </div>
                    </div>
                </div>

            </div>





        </div>
    </div>
@endsection


@section('script')
    @parent

    {!! HTML::script('/assets/website/lib/js/dropdown.js') !!}
<script>
    $(document).ready(function(){
$('select[name=menu_section_id] option[value={{$coffee->menu_section_id}}]').prop('selected',true);
    });
    </script>
@endsection