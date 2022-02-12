<?php

    Route::group(['middleware' => ['website.authorization'],'namespace' => 'website\coffee_rate'], function () {

    Route::resource('coffee_rate', 'CoffeeRate');


});

