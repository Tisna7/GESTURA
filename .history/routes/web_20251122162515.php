<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('user.ger');
});

Route::get('materi', function () {
    return view('user.materi');
});
