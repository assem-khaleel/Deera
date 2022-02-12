<?php
//Route::group(['middleware' => ['authenticate.website'],'prefix' => 'website', 'namespace' => 'website\catering'], function () {
    Route::group(['middleware' => ['website.authorization'],'namespace' => 'website\catering'], function () {


    Route::resource('catering', 'Catering');


});

