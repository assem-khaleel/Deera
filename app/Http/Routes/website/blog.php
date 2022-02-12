<?php
//Route::group(['middleware' => ['authenticate.website'],'prefix' => 'website', 'namespace' => 'website\blog'], function () {

    Route::group(['middleware' => ['website.authorization'],'namespace' => 'website\blog'], function () {

Route::get('become-blogger','Blog@getBecomeBlogger')->name('website.blog.becomeBlogger');
    Route::resource('blog', 'Blog');


});

