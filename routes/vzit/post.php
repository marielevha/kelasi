<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vzit\TagController;
use App\Http\Controllers\Vzit\PostController;
use App\Http\Controllers\Vzit\CategoryController;


Route::middleware('auth')->group(function () {
    Route::get('posts/index', [PostController::class, 'index'])->name('post.index');

    Route::get('posts/create', [PostController::class, 'create'])->name('post.create');

    Route::post('posts/store', [PostController::class, 'store'])->name('post.store');

    Route::get('posts/edit/{id}', [PostController::class, 'edit'])->name('post.edit');

    Route::put('posts/edit/{id}', [PostController::class, 'update'])->name('post.update');

    Route::get('posts/disable/{id}/{code}', [PostController::class, 'disable_with_id'])->name('post.disable.id');

    Route::get('posts/enable/{id}/{code}', [PostController::class, 'enable_with_id'])->name('post.enable.id');

    Route::get('posts/update/status/{id}/{code}/{newStatus}', [PostController::class, 'edit_status'])->name('post.status.update');


    Route::get('categories/index', [CategoryController::class, 'index'])->name('category.index');

    Route::get('categories/create', [CategoryController::class, 'create'])->name('category.create');

    Route::post('categories/store', [CategoryController::class, 'store'])->name('category.store');

    Route::get('categories/edit/{slug}', [CategoryController::class, 'edit'])->name('category.edit');

    Route::put('categories/edit/{slug}', [CategoryController::class, 'update'])->name('category.update');

    Route::get('categories/disable/{slug}', [CategoryController::class, 'disable_with_slug'])->name('category.disable.id');

    Route::get('categories/enable/{slug}', [CategoryController::class, 'enable_with_slug'])->name('category.enable.id');

    Route::get('categories/download', [CategoryController::class, 'download_import_member_file_model'])->name('category.download.import.members');

    Route::post('categories/upload/import-members', [CategoryController::class, 'upload_import_member_file_model'])->name('category.upload.import.members');


    Route::get('tags/index', [TagController::class, 'index'])->name('tag.index');

    Route::get('tags/create', [TagController::class, 'create'])->name('tag.create');

    Route::post('tags/store', [TagController::class, 'store'])->name('tag.store');

    Route::get('tags/edit/{slug}', [TagController::class, 'edit'])->name('tag.edit');

    Route::put('tags/edit/{slug}', [TagController::class, 'update'])->name('tag.update');

    Route::get('tags/disable/{slug}', [TagController::class, 'disable_with_slug'])->name('tag.disable.id');

    Route::get('tags/enable/{slug}', [TagController::class, 'enable_with_slug'])->name('tag.enable.id');

    Route::get('tags/download', [TagController::class, 'download_import_member_file_model'])->name('tag.download.import.members');

    Route::post('tags/upload/import-members', [TagController::class, 'upload_import_member_file_model'])->name('tag.upload.import.members');

});
