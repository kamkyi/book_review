<?php

Route::group(['namespace' => 'User'], function () {
    Route::resource('user','UserController')->except(['destroy','edit','update','create']);
});
