<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


require __DIR__.'/auth.php';
require __DIR__ . '/vzit/admin.php';
require __DIR__ . '/vzit/enterprise.php';
require __DIR__ . '/vzit/viewer.php';



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    if (Auth::check()) {
        if (Auth::user()->rule == env('PROFILE_ADMIN')) {
            return redirect()->route('user.index');
        }
        elseif (Auth::user()->rule == env('PROFILE_SUPER_ADMIN')) {
            return view('commercial.dashboard.index');
        }
        elseif (Auth::user()->rule == "PROFILE_ENTERPRISE") {
            return view('storekeeper.dashboard.index');
        }
    }
    else {
        return redirect('login');
    }
})->middleware(['auth'])->name('dashboard');

