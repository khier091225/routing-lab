<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function() {
    return "Hello, Laravel Routing";
});

Route::get('/school', function() {
    return "Welcome to our laravel class.";
});