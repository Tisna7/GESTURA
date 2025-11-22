<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('user.gesture-lab-1');
});

Route::get('materi', function () {
    return view('user.materi');
});
