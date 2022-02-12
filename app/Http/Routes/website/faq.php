<?php

Route::group(['middleware' => ['website.authorization'],'namespace' => 'website\faq'], function () {
Route::get('faq','Faq@index');
  //  Route::resource('faq', 'Faq');


});

