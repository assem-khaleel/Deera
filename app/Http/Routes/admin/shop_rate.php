<?php
Route::group(['middleware' => ['authenticate.admin'],'prefix' => 'admin', 'namespace' => 'admin\shop_rate'], function () {


    Route::resource('shop_rate', 'ShopRate');


});

