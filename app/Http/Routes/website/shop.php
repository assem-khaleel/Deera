<?php

Route::group(['middleware' => ['website.authorization'],'namespace' => 'website\shop'], function () {
    Route::get('/shop/menuItem', 'Shop@getMenuItem')->name('menuItem');
    Route::resource('shop', 'Shop');
    Route::resource('coffee', 'Coffee');


});

