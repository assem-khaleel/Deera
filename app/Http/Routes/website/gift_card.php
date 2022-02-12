<?php

    Route::group(['middleware' => ['website.authorization'],'namespace' => 'website\gift_card'], function () {


    Route::resource('gift_card', 'GiftCard');


});

