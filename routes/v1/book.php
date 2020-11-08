<?php

Route::group(['namespace' => 'Book'], function () {
    Route::resource('book','BookController')->except(['destroy','edit','update','create']);
});
