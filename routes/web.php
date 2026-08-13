<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

////////////////// Create basic GET Routes //////////////////////
Route::get('/hello', function() {
    return "Hello, Laravel Routing";
});

Route::get('/school', function() {
    return "Welcome to our laravel class.";
});

/////////////////// Return a Blade view ///////////////////////
Route::get('/about', function() {
    return view('about');
});
// Route::view('/about', 'about'); for shorter syntax

