<?php

Route::group(['middleware' => ['website.authorization'],'namespace' => 'website\gift_card_users'], function () {


    Route::get('send-gift-card','GiftCardUsers@getSendCard')->name('website.gift_card.send');
    Route::post('send-gift-card','GiftCardUsers@postSendCard');


    Route::get('confirm-gift-card-payment','GiftCardUsers@getConfirmCardPayment')->name('website.gift_card.confirmPayment');
    Route::get('callback-gift-card-payment','GiftCardUsers@callbackConfirmCardPayment')->name('website.gift_card.callbackConfirmPayment');


    Route::get('gift-card/checkout','GiftCardUsers@getCheckout')->name('website.gift_card.checkout');

   Route::get('gift-card/add-to-cart','GiftCardUsers@addToCart')->name('website.gift_card.addToCart');

    Route::get('/gift_card_users/delete/{id}','GiftCardUsers@destroy');
    Route::resource('gift_card_users', 'GiftCardUsers');


});

