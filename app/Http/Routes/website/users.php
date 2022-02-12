<?php

Route::group(['middleware' => ['website.authorization'],'namespace' => 'website\users'], function () {
//    Route::get('/shop/menuItem', 'Shop@getMenuItem')->name('menuItem');
    Route::get('/my-order', 'Users@myOrder')->name('website.users.order');
    Route::get('/order-step', 'Users@orderStep')->name('website.users.orderStep');
    Route::get('/guest/create', 'Users@createGuestUser')->name('website.users.guestCreate');

   Route::resource('users', 'Users');

    Route::resource('order', 'Order');
});

