<?php
Route::group(['middleware' => ['website.authorization'],'namespace' => 'website\career'], function () {


    Route::resource('career', 'Career');


});

