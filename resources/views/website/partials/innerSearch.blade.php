


<div class="about_part"> <!--about_part-->
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-md-4 linepart">
                <h2><i><img src="{!! $img !!}" alt="icon1" style="max-width:100px;max-height:70px;" ></i> {!! $title !!}</h2>

            </div>

            {!! Form::model((isset($request))?$request:[],['route'=>'shop.index','method'=>'get']) !!}
            <div class="col-sm-6 col-md-8 linepart1">
                <div class="res_search">
                    <h2> {{trans('website.search')}}<span>{{trans('website.shop')}}</span> </h2>
                    {!! Form::text('name_en',null,['class'=>'search_form','placeholder'=>trans("website.searchShop")]) !!}

                </div>
            </div>
            {!! Form::hidden('area_id',null) !!}
            {!! Form::hidden('cuisine_id',null) !!}
            {!! Form::hidden('shop_id',null) !!}
{!! Form::close() !!}
        </div>
    </div>
</div> <!--about_part end-->


