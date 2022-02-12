<?php


    Route::group(['middleware' => ['website.authorization'],'namespace' => 'website\blogger'], function () {

    Route::resource('blogger', 'Blogger');


});

