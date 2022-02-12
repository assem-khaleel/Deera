<?php

    Route::group(['middleware' => ['authenticate.admin'],'prefix' => 'admin', 'namespace' => 'admin\voucher_users'], function () {


    Route::resource('voucher_users', 'VoucherUsers');


});

