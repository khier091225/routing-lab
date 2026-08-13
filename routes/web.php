<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

///////////////////////// Name a route and generate its URL /////////////////////////
Route::get('/courses', function() {
    return 'Course List';
})->name('courses.index');

Route::get('/course-url', function() {
    return route('courses.index');
});

////////////////////////// Redirect one route to another /////////////////////////
Route::redirect('/old-about', '/about');

Route::get('go-to-courses', function() {
    return to_route('courses.index');
});

////////////////////////// Use GET, POST, PUT, PATCH, and DELETE /////////////////////////
Route::get('/tasks', function() {
    return view('tasks');
});

Route::post('/tasks', function() {
    return "POST: task created.";
});

Route::put('/tasks/{id}', function(string $id) {
    return "PUT: task {$id} replaced.";
});

Route::patch('/tasks/{id}', function(string $id) {
    return "PATCH: task {$id} updated.";
});

Route::delete('/tasks/{id}', function(string $id) {
    return "DELETE: task {$id} removed.";
});


//////////////////////// Create a controller and route to its methods //////////////////////
Route::get('/controller/students', [StudentController::class, 'index']);
Route::get('/controller/students/{id}', [StudentController::class, 'show']);