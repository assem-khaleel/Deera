<?php
Route::group(['middleware' => ['authenticate.admin'],'prefix' => 'admin', 'namespace' => 'admin\gift_card'], function () {


    Route::resource('gift_card', 'GiftCard');


});

