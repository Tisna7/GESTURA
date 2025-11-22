<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('user.gesture-lab-practice');
});
Route::get('/profile', function () {
    return view('user.profile');
});
