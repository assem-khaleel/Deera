<?php

    Route::group(['middleware' => ['authenticate.admin'],'prefix' => 'admin', 'namespace' => 'admin\blogger'], function () {



        Route::resource('blogger', 'Blogger');


});

