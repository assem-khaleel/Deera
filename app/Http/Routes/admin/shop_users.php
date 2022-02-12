<?php
Route::group(['middleware' => ['authenticate.admin'],'prefix' => 'admin', 'namespace' => 'admin\shop_users'], function () {


    Route::resource('shop_users', 'ShopUsers');


});

