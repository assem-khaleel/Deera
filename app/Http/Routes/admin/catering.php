<?php
Route::group(['middleware' => ['authenticate.admin'],'prefix' => 'admin', 'namespace' => 'admin\catering'], function () {


    Route::resource('catering', 'Catering');


});

