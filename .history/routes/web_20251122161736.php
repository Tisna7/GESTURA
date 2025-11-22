<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
});

Route::get('materi', function () {
    return view('user.materi');
});
