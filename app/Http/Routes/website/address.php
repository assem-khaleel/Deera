<?php

Route::group(['middleware' => ['website.authorization'],'namespace' => 'website\address'], function () {


    Route::get('selectAddressFromMap', 'Address@selectAddressFromMap');
    Route::resource('address', 'Address');
});

