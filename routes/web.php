<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/Login', function () {
    return view('login');
});
Route::get('/Register', function () {
    return view('register');
});
Route::get('/Forum', function () {
    return view('forum');
});
Route::get('/CreatePost', function () {
    return view('createpost');
});
