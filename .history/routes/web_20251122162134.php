<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('profile.materi');
});

Route::get('materi', function () {
    return view('user.materi');
});
