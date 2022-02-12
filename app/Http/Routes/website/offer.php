<?php

Route::group(['middleware' => ['website.authorization'],'namespace' => 'website\offer'], function () {
    Route::resource('offer', 'Offer');


});

