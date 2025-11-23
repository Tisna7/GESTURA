<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('landingpage');
});

Route::get('/auth', [AuthController::class, 'showPage'])->name('auth.page');

// Route::post('/register', [AuthController::class, 'register'])->name('register');

// Route::post('/login', [AuthController::class, 'login'])->name('login');
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// REGISTER
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');

// LOGIN
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

// LOGIN GUEST
Route::get('/login/guest', [AuthController::class, 'loginGuest'])->name('auth.guest');

// LOGOUT
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');


Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');


Route::get('/profile', function () {
    return view('user.profile');
});
Route::get('/materi', function () {
    return view('user.materi');
});
Route::get('/gesturelab', function () {
    return view('user.gesture-lab-practice');
});
Route::get('/gesture-lab-translate', function () {
    return view('user.gesture-lab-translate');
});
Route::get('/materi-isi', function () {
    return view('user.materi-isi');
});
Route::get('/latihan', function () {           
    return view('user.quiz');
});
Route::get('/Challenge', function () {
    return view('user.challenge');
});
Route::get('/Challenge-isi', function () {
    return view('user.challenge-isi');
}); 


