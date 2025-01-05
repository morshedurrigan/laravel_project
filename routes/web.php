<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hello World ";
});
Route::get('/greeting', function () {
    return view('greeting');
});

Route::get('/users', function () {
    // $users = ['john', 'jane', 'doe'];
    $users =User::all();
    return view('users', compact('users'));
    
});




