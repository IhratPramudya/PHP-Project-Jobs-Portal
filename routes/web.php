<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return '<h1>Available Jobs</h1>';
})->name('jobs');

Route::get('/test', function () {
    return response('<h1>Hello World</h1>', 200)->header('Content-Type', 'text/html');
});
