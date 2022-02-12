<?php
Route::group(['middleware' => ['authenticate.admin'],'prefix' => 'admin', 'namespace' => 'admin\shop_cuisine'], function () {


    Route::resource('shop_cuisine', 'ShopCuisine');


});

