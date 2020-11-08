<?php

Route::group(['namespace' => 'Auth','middleware' => ['cors']], function () {
    Route::post('/login', 'AuthController@login')->name('login');
    Route::post('/logout', 'AuthController@logout')->name('logout');
});
