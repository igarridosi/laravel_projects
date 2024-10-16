<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('learnBlade.index');
});

Route::get('/news', function () {
    return view('learnBlade.news');
});

Route::get('/events', function () {
    return view('learnBlade.events');
});
