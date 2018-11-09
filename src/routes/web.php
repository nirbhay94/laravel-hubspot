<?php

Route::group(['namespace' => 'Nirbhay\Hubspot\Http\Controllers'],function () {
    Route::get('contacts', 'ContactController@getContacts');
    Route::post('contact', 'ContactController@postContact');
});