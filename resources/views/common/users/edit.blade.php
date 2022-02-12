@extends('common.layouts.main')

@section('title', trans('general.users'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('users.users') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('users.users') }}</a></li>
                        <li class="active">{{ trans('users.editusers') }}</li>
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
                <div class="col-lg-12">
                    <div class="white-box">


    {!! Form::model($users, [
        'method' => 'PATCH',
        'url' => ['/common/users', $users->id],
        'class' => 'form-horizontal'
    ]) !!}







        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('users.editusers') }}</span>
            </div>

            <div class="panel-body">





                <div class="form-group {{ $errors->has("email") ? "has-error" : ""}}  col-xs-6">
                    {!! Form::label("email", trans("users.email"), ["class" => "col-sm-4 control-label"]) !!}
                    <div class="col-sm-8">
                        {!! Form::text("email", null, ["class" => "form-control","placeholder"=> trans("users.email")]) !!}
                        {!! $errors->first("email", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>



                <div class="row" style="clear:both">

                    <div class="form-group {{ $errors->has("password") ? "has-error" : ""}}  col-xs-6">
                        {!! Form::label("password", trans("users.password"), ["class" => "col-sm-4 control-label"]) !!}
                        <div class="col-sm-8">
                            {!! Form::password("password", null, ["class" => "form-control","placeholder"=> trans("users.password")]) !!}
                            {!! $errors->first("password", "<p class='help-block'>:message</p>") !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has("password_confirmation") ? "has-error" : ""}}  col-xs-6">
                        {!! Form::label("password_confirmation",  ' Confirmation', ["class" => "col-sm-4 control-label"]) !!}
                        <div class="col-sm-8">
                            {!! Form::password("password_confirmation", null, ["class" => "form-control","placeholder"=> 'Password Confirmation']) !!}
                            {!! $errors->first("password_confirmation", "<p class='help-block'>:message</p>") !!}
                        </div>
                    </div>

                </div>



                <div class="form-group col-sm-12 map-cvr">
                    <input class="form-control" placeholder="Name" id="placeInput" type="text">
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
                <script>

                    document.getElementById('insertAddressIframe').setAttribute('src','/selectAddressFromMap?latitude='+document.getElementById('hiddenLatitudeInput').value+'&longitude='+document.getElementById('hiddenLongitudeInput').value+'')

                    //        getLocation();
                </script>





                <div class="form-group {{ $errors->has("first_name") ? "has-error" : ""}}  col-xs-6">
                    {!! Form::label("first_name", trans("users.first_name"), ["class" => "col-sm-4 control-label"]) !!}
                    <div class="col-sm-8">
                        {!! Form::text("first_name", null, ["class" => "form-control","placeholder"=> trans("users.first_name")]) !!}
                        {!! $errors->first("first_name", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>



                <div class="form-group {{ $errors->has("last_name") ? "has-error" : ""}}  col-xs-6">
                    {!! Form::label("last_name", trans("users.last_name"), ["class" => "col-sm-4 control-label"]) !!}
                    <div class="col-sm-8">
                        {!! Form::text("last_name", null, ["class" => "form-control","placeholder"=> trans("users.last_name")]) !!}
                        {!! $errors->first("last_name", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>




                <div class="form-group {{ $errors->has("mobile") ? "has-error" : ""}}  col-xs-6">
                    {!! Form::label("mobile", trans("users.mobile"), ["class" => "col-sm-4 control-label"]) !!}
                    <div class="col-sm-8">
                        {!! Form::text("mobile", null, ["class" => "form-control","placeholder"=> trans("users.mobile")]) !!}
                        {!! $errors->first("mobile", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>

                <div class="form-group {{ $errors->has("phone") ? "has-error" : ""}}  col-xs-6">
                    {!! Form::label("phone", trans("users.phone"), ["class" => "col-sm-4 control-label"]) !!}
                    <div class="col-sm-8">
                        {!! Form::text("phone", null, ["class" => "form-control","placeholder"=> trans("users.phone")]) !!}
                        {!! $errors->first("phone", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has("gender") ? "has-error" : ""}}  col-xs-6">
                    {!! Form::label("gender", trans("users.gender"), ["class" => "col-sm-4 control-label"]) !!}
                    <div class="col-sm-8">
                        {!! Form::select("gender",config('array.users_gender'), null, ["class" => "form-control","placeholder"=> trans("users.gender")]) !!}
                        {!! $errors->first("gender", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>


                <div class="form-group {{ $errors->has("occupation") ? "has-error" : ""}}  col-xs-6">
                    {!! Form::label("occupation", trans("users.occupation"), ["class" => "col-sm-4 control-label"]) !!}
                    <div class="col-sm-8">
                        {!! Form::select("occupation",config('array.users_occupation'), null, ["class" => "form-control","placeholder"=> trans("users.occupation")]) !!}
                        {!! $errors->first("occupation", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>


                <div class="form-group {{ $errors->has("type") ? "has-error" : ""}}  col-xs-6">
                    {!! Form::label("type", 'type', ["class" => "col-sm-4 control-label"]) !!}
                    <div class="col-sm-8">
                        {!! Form::select("type",config('array.users_type'), null, ["class" => "form-control","placeholder"=> 'type']) !!}
                        {!! $errors->first("type", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>

                <div class="form-group {{ $errors->has("blogger") ? "has-error" : ""}}  col-xs-6">
                    {!! Form::label("blogger",'blogger', ["class" => "col-sm-4 control-label"]) !!}
                    <div class="col-sm-8">
                        {!! Form::select("blogger",config('array.users_blogger'), null, ["class" => "form-control","placeholder"=> 'blogger']) !!}
                        {!! $errors->first("blogger", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>


                <div class="clearfix"></div>
                @foreach($rolesList as $role_id=>$role_name)
                    <div class="form-group {{ $errors->has("roles") ? "has-error" : ""}}  col-xs-6">

                        <div class="col-sm-4">
                            {!! Form::checkbox("roles[".$role_id."]", $role_id,(in_array($role_id,$userRolesList))? true:false, ["class" => "form-control",'id'=>"roles[".$role_id."]"]) !!}
                        </div>
                        <div class="col-sm-8">
                            {!! Form::label("roles[".$role_id."]", $role_name, ["class" => " control-label"]) !!}
                            {!! $errors->first("roles", "<p class='help-block'>:message</p>") !!}
                        </div>
                    </div>
                @endforeach




        <div class="form-group">
        <div class="col-sm-offset-9 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>

            </div>
        </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection