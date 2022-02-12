<?php
Route::group(['middleware' => ['authenticate.admin'],'prefix' => 'admin', 'namespace' => 'admin\coffee'], function () {


    Route::resource('coffee', 'Coffee');


});

