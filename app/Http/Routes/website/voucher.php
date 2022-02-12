<?php

    Route::group(['middleware' => ['website.authorization'],'namespace' => 'website\voucher'], function () {

    Route::resource('voucher', 'Voucher');


});

