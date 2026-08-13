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

/////////////////////// Required Route Parameter /////////////////////////
Route::get('/student/{id}', function(string $id) {
    return "Student ID: {$id}";
})->name('students.show');

//////////////////////// Optional Route Parameter /////////////////////////
Route::get('/Welcome/{name?}', function(?string $name = "Student") {
    return "Welcome, {$name}";
});