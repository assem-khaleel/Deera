<?php

Route::group(['middleware' => ['website.authorization'],'namespace' => 'website\cart'], function () {
Route::get('/cart/delete/{id}','Cart@destroy');
Route::get('/receipt/receipt_pdf','Cart@receipt_pdf');
    Route::resource('cart', 'Cart');
});
