<?php
Route::group(['middleware' => ['authenticate.admin'],'prefix' => 'admin', 'namespace' => 'admin\voucher'], function () {



    Route::resource('voucher', 'Voucher');


});

