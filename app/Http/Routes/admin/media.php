<?php
Route::group(['middleware' => ['authenticate.admin'],'prefix' => 'admin', 'namespace' => 'admin\media'], function () {


    Route::resource('media', 'Media');


});

