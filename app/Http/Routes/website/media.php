<?php

Route::group(['middleware' => ['website.authorization'],'namespace' => 'website\media'], function () {


    Route::resource('media', 'Media');


});

