<?php

    Route::group(['middleware' => ['website.authorization'],'namespace' => 'website\shop_rate'], function () {

    Route::resource('shop_rate', 'ShopRate');


});

