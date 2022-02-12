<?php

    Route::group(['middleware' => ['authenticate.admin'],'prefix' => 'admin', 'namespace' => 'admin\faq'], function () {


    Route::resource('faq', 'Faq');


});

