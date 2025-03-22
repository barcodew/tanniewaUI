<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/auth/login', function () {
    return view('auth.sign-in');
});
Route::get('/sign-up', function () {
    return view('auth.sign-up');
});
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
});
