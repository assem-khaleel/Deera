<?php
Route::group(['middleware' => ['authenticate.admin'],'prefix' => 'admin', 'namespace' => 'admin\gift_card_order'], function () {


    Route::resource('gift_card_order', 'GiftCardOrder');


});

