<?php
Route::group(['middleware' => ['authenticate.admin'],'prefix' => 'admin', 'namespace' => 'admin\order'], function () {

//    Route::get('/deliver-map', ['uses'=>'Order@deliverMap','as'=>'admin.order.deliverMap']);
//    Route::post('/assign-order', ['uses'=>'Order@assignOrder','as'=>'admin.order.assignOrder']);

    Route::get('/bill', ['uses'=>'Order@getBill','as'=>'admin.order.bill']);
    Route::get('/order-chart', ['uses'=>'Order@orderChart','as'=>'admin.order.chart']);

    Route::get('/emailorder', ['uses'=>'Order@sendemail','as'=>'admin.order.emailorder']);
    Route::post('/emailorder', ['uses'=>'Order@postsendemail']);



    Route::resource('order', 'Order');


});

