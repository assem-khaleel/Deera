<?php
Route::group(['middleware' => ['authenticate.admin'],'prefix' => 'admin', 'namespace' => 'admin\shop'], function () {


    Route::resource('shop', 'Shop');


});

