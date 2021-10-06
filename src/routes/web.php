<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Allos\Contact\Http\Controllers'], function(){

    Route::get('contact','ContactController@index')->name('allos.contact.index');
    Route::post('contact' ,'ContactController@send')->name('allos.contact');

});



?>
