<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecentPostsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserDataController;

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

Route::get('/form', [UserDataController::class, 'showForm'])->name('form');
Route::post('/form', [UserDataController::class, 'submitForm']);

Route::get('/age', [UserDataController::class, 'showAgeForm'])->name('age');
Route::post('/age', [UserDataController::class, 'submitAge']);

Route::get('/result', [UserDataController::class, 'showResult'])->name('result');


