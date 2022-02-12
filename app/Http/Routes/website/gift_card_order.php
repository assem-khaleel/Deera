<?php
Route::group(['middleware' => ['website.authorization'],'namespace' => 'website\gift_card_order'], function () {


    Route::resource('gift_card_order', 'GiftCardOrder');


});

