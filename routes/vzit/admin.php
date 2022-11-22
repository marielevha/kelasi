<?php

use App\Http\Controllers\TrailController;
use App\Http\Controllers\Vzit\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {

    /**
     * Access to Audit Page
     */
    Route::get('audit-trails/index', [TrailController::class, 'index'])->name('audit.index');

    /**
     * Access to List of Users Page
     */
    Route::get('users/index', [UserController::class, 'index'])->name('user.index');

    /**
     * Access to Add User Page
     *
     * TAF
     * - Il faudra générer un mot de password initial puis l'envoyer à la vue
     */
    Route::get('users/create/{profile?}', [UserController::class, 'create'])->name('user.create');

    /**
     * Create a new User
     */
    Route::post('users/store', [UserController::class, 'store'])->name('user.store');

    /**
     * Edit specific User
     */
    Route::get('users/edit/{profile}/{email}', [UserController::class, 'edit'])->name('user.edit');

    Route::put('users/edit/{profile}/{email}', [UserController::class, 'update'])->name('user.update');

    /**
     * Access to Current User Page
     */
    Route::get('users/current', [UserController::class, 'index_account'])->name('account.index');

    /**
     * Edit Current User
     */
    Route::put('users/current/edit', [UserController::class, 'update_account'])->name('account.update');


    Route::get('users/account-activation-link/{email}', [UserController::class, 'resendActivateLinkWithEmail'])->name('users.resendAccountActivationLink');

    /**
     * Enable Specific User
     */
    Route::get('users/enable/{email}', [UserController::class, 'enable_with_email'])->name('users.enable.email');

    /**
     * Disable Specific User
     */
    Route::get('users/disable/{email}', [UserController::class, 'disable_with_email'])->name('users.disable.email');

    /**
     * Send Reset Password Email
     */
    Route::get('users/reset-password/{email}', [UserController::class, 'send_reset_password_email'])->name('users.reset.password.email');

    Route::get('users/download', [UserController::class, 'download_import_member_file_model'])->name('users.download.import.members');

    Route::post('users/upload/import-members', [UserController::class, 'upload_import_member_file_model'])->name('users.upload.import.members');

    /**
     * Download Audit File
     */
    Route::post('audits/download', [TrailController::class, 'download_file'])->name('users.download.audit.file');

});
