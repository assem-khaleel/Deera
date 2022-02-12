<?php
Route::group(['middleware' => ['authenticate.admin'],'prefix' => 'admin', 'namespace' => 'admin\product_option'], function () {


    Route::resource('product_option', 'ProductOption');


});

