<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;








Route::get('/', function () {
    return view('home');
});


Route::get('/dashboard', function () {
    return view('admin.dashboard');
});


