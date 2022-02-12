<?php
Route::group(['middleware' => ['authenticate.admin'],'prefix' => 'admin', 'namespace' => 'admin\coffee_rate'], function () {


    Route::resource('coffee_rate', 'CoffeeRate');


});

