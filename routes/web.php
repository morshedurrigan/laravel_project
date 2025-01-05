<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hello World ";
});
Route::get('/greeting', function () {
    return view('greeting');
});
Route::get('/users', function () {
    return view('users');
});

