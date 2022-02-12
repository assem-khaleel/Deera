











<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Deera" />
    <meta name="keywords" content="Deera" />


    <link rel="icon" type="image/png" sizes="16x16" href="/favicon.png">
    <meta name="_token" content="{{ csrf_token() }}" />
    <title>@yield('title') - {{ app_name() }}</title>


    <!-- Bootstrap -->
    @if(config('app.locale')=='ar')

    {!! HTML::style('/assets/website/css/ar/bootstrap.css') !!}
    {!! HTML::style('/assets/website/css/ar/custom.css') !!}
    @else
    {!! HTML::style('/assets/website/css/bootstrap.css') !!}
    {!! HTML::style('/assets/website/css/custom.css') !!}
    @endif

    {!! HTML::style('/assets/website/css/font-awesome.min.css') !!}


    {!! HTML::style('/assets/website/css/additional.css') !!}
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    {!! HTML::script('/assets/website/js/html5shiv.min.js') !!}

    {!! HTML::script('/assets/website/js/respond.min.js') !!}

    <![endif]-->

</head>

<body>

<div class="wraper">



    <section class="top_area">
    @include('website.partials.header')


    <div class="banner innr">
        <img src="/assets/website/images/innerbanner.jpg" alt="banner">
    </div>
    </section>






    @yield('content')








</div>


@include('website.partials.footer')




@section('script')
        <!-- jQuery -->
{!! HTML::script('/assets/website/js/jquery.min.js') !!}
{!! HTML::script('/assets/website/js/bootstrap.js') !!}
{!! HTML::script('/assets/website/js/jquery.bxslider.js') !!}
{!! HTML::script('/assets/website/js/modernizr-1.7.min.js') !!}
{!! HTML::script('/assets/website/js/classie.js') !!}
{!! HTML::script('/assets/website/js/uisearch.js') !!}
{!! HTML::script('/assets/website/js/star.js') !!}


<script>
    $(document).ready(function(){
        $('.bxslider').bxSlider({
            controls: false,
            pause:2000,
            speed: 1000,
            mode:'fade',
            caption:false,
            auto: true
        });
    });
</script>

<script>
   // new UISearch( document.getElementById( 'sb-search' ) );
</script>

<script>
//    $('header').load('header.html');
</script>

<script>

    function showSuccess(form,data){

        var defaultSuccessMessagesDiv='<div style="background-color:lightgreen;padding:5px 10px;" id="defaultSuccessMessagesDiv"></div>';


        var successHtml="Success";

        var successMessagesDiv=$('.successMessagesDiv,.success,.successMessages');
        if(successMessagesDiv.length ==0){
            $(defaultSuccessMessagesDiv).insertBefore(form);
            successMessagesDiv=$('#defaultSuccessMessagesDiv');
        }

        successMessagesDiv.html(successHtml)
    }

    function showErrors(form,xhr){

        var defaultErrorMessagesDiv='<div style="background-color:indianred;padding:5px 10px;" id="defaultErrorMessagesDiv"></div>';



        var errorsHtml="";
        if(xhr.status ==422){
            var responseJson= jQuery.parseJSON( xhr.responseText);

            for(var key in responseJson){
                var inputNode=form.find('[name="'+key+'"]');
                inputNode.parent().parent().addClass('has-error');
                $('<p class="help-block">'+responseJson[key]+'</p>').insertAfter(inputNode);
                errorsHtml+=responseJson[key]+"<br>";
            }
        }

        var errorMessagesDiv=$('.errorMessagesDiv,.errors,.errorsMessages');
        if(errorMessagesDiv.length ==0){
            $(defaultErrorMessagesDiv).insertBefore(form);
            errorMessagesDiv=$('#defaultErrorMessagesDiv');
        }

        errorsHtml=(errorsHtml =="")? "Error,Please try again later.":errorsHtml;
        errorMessagesDiv.html(errorsHtml);
    }
    function removeCurrentMessages(form){

        $('#defaultSuccessMessagesDiv,#defaultErrorMessagesDiv').remove();
        form.find('.help-block,.errors,.success').remove();
        form.find('.has-error').removeClass('has-error');

    }
    function submitForm(formJsForm){

        var form=$(formJsForm);

        if(form.attr('startSubmit') =="true"){return false;}
        removeCurrentMessages(form);
        form.attr('startSubmit','true');

        var url=form.attr('action');
        var method=form.attr('method');

        var loadingNode=$('.loading');
        loadingNode=( loadingNode.length ==0)? form.find("[type='submit']"):loadingNode;



        var loadingNodeOrigin=loadingNode.html();


        var loadingHtml=loadingNode.data('loading');

        loadingHtml=( typeof loadingHtml === "undefined")? "loading ...":loadingHtml;


        loadingNode.html(loadingHtml);

//        var errorMessageNode=$(".")

        $.ajax({
            dataType:'text',// 'json',
            url: url,
            type:method,
            data: form.find(' input[type=\'text\'],input[type=\'password\'],  input[type=\'hidden\'],  input[type=\'radio\']:checked,  input[type=\'checkbox\']:checked,  select,  textarea'),
            success: function(data){


                try{
                    var responseJson= jQuery.parseJSON( data);
                }catch(e){
                    showErrors(form,data);
                    return false;
                }
                if(typeof  responseJson.status =="undefined"){

                }else{

                    showSuccess(form,data);

                    if(typeof  responseJson.redirect != "undefined"){
                        if(responseJson.redirect =='back'){
                            window.location.reload();
                        }else{

                            window.location.href=responseJson.redirect ;
                        }
                    }
                }

            },
            error:function(xhr){console.log(xhr.responseText);
                showErrors(form,xhr);

            },
            complete:function(){

                loadingNode.html(loadingNodeOrigin);
                form.attr('startSubmit','false');
            }
        });

    }

    $('.ajaxForm').submit(function(){
        submitForm(this);

        event.preventDefault();
        event.stopPropagation();
    });
</script>

{!! HTML::script('/assets/website/js/getAddress.js') !!}
@show


</body>
</html>
