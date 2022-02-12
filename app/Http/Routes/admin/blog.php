<?php
Route::group(['middleware' => ['authenticate.admin'],'prefix' => 'admin', 'namespace' => 'admin\blog'], function () {


    Route::resource('blog', 'Blog');


});

