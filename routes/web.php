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
    return response('Hello World', 200);
});

Route::get('/error', function () {
    return response('Page Not Found', 404);
});

Route::get('/notfound', function () {
    return new Response('Page Not Found', 404);
});
