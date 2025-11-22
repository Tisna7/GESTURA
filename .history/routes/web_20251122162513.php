<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('user.');
});

Route::get('materi', function () {
    return view('user.materi');
});
