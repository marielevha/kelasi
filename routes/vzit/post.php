<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vzit\PostController;


Route::middleware('auth')->group(function () {
    Route::get('posts/index', [PostController::class, 'index'])->name('post.index');

    Route::get('posts/create', [PostController::class, 'create'])->name('post.create');

    Route::post('posts/store', [PostController::class, 'store'])->name('post.store');

    Route::get('posts/edit/{id}', [PostController::class, 'edit'])->name('post.edit');

    Route::put('posts/edit/{id}', [PostController::class, 'update'])->name('post.update');

    Route::get('posts/disable/{id}/{code}', [PostController::class, 'disable_with_id'])->name('post.disable.id');

    Route::get('posts/enable/{id}/{code}', [PostController::class, 'enable_with_id'])->name('post.enable.id');

    Route::get('posts/update/status/{id}/{code}/{newStatus}', [PostController::class, 'edit_status'])->name('post.status.update');

});
