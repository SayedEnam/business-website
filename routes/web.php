<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'app')->name('home');
Route::view('/contact', 'app')->name('contact');
Route::view('/recruitment', 'app')->name('recruitment');
Route::view('/{page}', 'app')->where('page', '[A-Za-z0-9-]+');
