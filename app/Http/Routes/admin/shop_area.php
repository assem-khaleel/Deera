<?php
Route::group(['middleware' => ['authenticate.admin'],'prefix' => 'admin', 'namespace' => 'admin\shop_area'], function () {


    Route::resource('shop_area', 'ShopArea');


});

