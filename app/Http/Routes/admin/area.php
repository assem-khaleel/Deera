<?php
Route::group(['middleware' => ['authenticate.admin'],'prefix' => 'admin', 'namespace' => 'admin\area'], function () {


    Route::resource('area', 'Area');
    Route::controller('area/report', 'Report',[
        'getMain' => 'admin.areaReport.main',
    ]);


});

