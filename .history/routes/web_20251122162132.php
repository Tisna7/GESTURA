<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pro.materi');
});

Route::get('materi', function () {
    return view('user.materi');
});
