<?php
Route::group(['middleware' => ['authenticate.admin'],'prefix' => 'admin', 'namespace' => 'admin\career'], function () {


    Route::resource('career', 'Career');


});

