<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('user.profile');
});

Route::get('materi', function () {
    return view('user.materi');
});
