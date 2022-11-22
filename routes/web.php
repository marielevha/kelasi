<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


require __DIR__.'/auth.php';
require __DIR__ . '/vzit/admin.php';
require __DIR__ . '/vzit/country.php';
require __DIR__ . '/vzit/post.php';
require __DIR__ . '/vzit/enterprise.php';
require __DIR__ . '/vzit/viewer.php';



Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

Route::get('/dashboard', function () {
    if (Auth::check()) {
        $profile = Auth::user()->profile;
        if ($profile == env('PROFILE_ADMIN') || $profile == env('PROFILE_SUPER_ADMIN')) {
            //return redirect()->route('user.index');
            return view('administrator.dashboard.index');
        }
        elseif ($profile == "PROFILE_ENTERPRISE") {
            return view('storekeeper.dashboard.index');
        }
    }
    else {
        return redirect('login');
    }
})->middleware(['auth'])->name('dashboard');

