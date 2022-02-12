<?php
Route::group(['middleware' => ['website.authorization'],'namespace' => 'website\product_option'], function () {



    Route::resource('product_option', 'ProductOption');


});

