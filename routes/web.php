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
    return response()->json(['name' => 'John Doe'])->cookie('name', 'John Doe');
});


Route::get('/download', function () {
    return response()->download(public_path('favicon.ico'));
});

Route::get('/read-cookie', function (Request $request) {
    $cookieValue = $request->cookie('name');
    return response()->json(['cookie' => $cookieValue]);
});
