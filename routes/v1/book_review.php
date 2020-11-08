<?php

Route::group(['namespace' => 'BookReview'], function () {
    Route::resource('book_review','BookReviewController')->except(['destroy','edit','update','create']);
});
