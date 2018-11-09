<?php

Route::group(['namespace' => 'Nirbhay\Hubspot\Http\Controllers'],function () {
    Route::get('contacts', 'ContactController@contacts');
    Route::post('contact', 'ContactController@createContact');
});