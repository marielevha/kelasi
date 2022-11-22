<?php

use App\Http\Controllers\Vzit\CountryController;
use App\Http\Controllers\Vzit\CityController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('cities/index', [CityController::class, 'index'])->name('city.index');

    Route::get('reg/index', [CityController::class, 'index'])->name('technician.region.store');

    Route::get('cities/create', [CityController::class, 'create'])->name('city.create');

    Route::post('cities/store', [CityController::class, 'store'])->name('city.store');

    Route::get('cities/edit/{slug}', [CityController::class, 'edit'])->name('city.edit');

    Route::put('cities/edit/{slug}', [CityController::class, 'update'])->name('city.update');

    Route::get('cities/disable/{slug}', [CityController::class, 'disable_with_slug'])->name('city.disable.id');

    Route::get('cities/enable/{slug}', [CityController::class, 'enable_with_slug'])->name('city.enable.id');

    Route::get('cities/download', [CityController::class, 'download_import_member_file_model'])->name('city.download.import.members');

    Route::post('cities/upload/import-members', [CityController::class, 'upload_import_member_file_model'])->name('city.upload.import.members');


    Route::get('countries/index', [CountryController::class, 'index'])->name('country.index');

    Route::get('countries/create', [CountryController::class, 'create'])->name('country.create');

    Route::post('countries/store', [CountryController::class, 'store'])->name('country.store');

    Route::get('countries/edit/{slug}', [CountryController::class, 'edit'])->name('country.edit');

    Route::put('countries/edit/{slug}', [CountryController::class, 'update'])->name('country.update');

    Route::get('countries/disable/{slug}', [CountryController::class, 'disable_with_id'])->name('country.disable.id');

    Route::get('countries/enable/{slug}', [CountryController::class, 'enable_with_id'])->name('country.enable.id');

    Route::get('countries/download', [CountryController::class, 'download_import_member_file_model'])->name('country.download.import.members');

    Route::post('countries/upload/import-members', [CountryController::class, 'upload_import_member_file_model'])->name('country.upload.import.members');
});
