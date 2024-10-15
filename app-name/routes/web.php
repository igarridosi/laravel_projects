<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecentPostsController;
use App\Http\Controllers\PostController;

// Route Group
Route::group([], function () {
    Route::get('/', function () {
        return view('home.index');
    });

    Route::get('/contact', function () {
        return view('home.contact');
    });

    Route::get('/recent-posts/{days_ago}', [RecentPostsController::class, 'index'])
        ->where('days_ago', '[0-9]+')// Validate that days_ago is a number
        ->name('posts.recents.index');

    Route::get('/posts/{id}', [PostController::class, 'show'])
        ->where('id', '.{1}')
        ->name('posts.show'); // Validate that id is a single character
});
