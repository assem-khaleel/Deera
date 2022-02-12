<?php

    Route::group(['middleware' => ['website.authorization'],'namespace' => 'website\payment_way'], function () {


   // Route::resource('payment_way', 'PaymentWay');


});

