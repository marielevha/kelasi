<?php

/*use App\Http\Controllers\AgencyController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\CommercialController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TechnicianController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {

    Route::get('commercials/current', [CommercialController::class, 'index_account'])->name('commercial.account.index');

    Route::put('commercials/current/edit', [UserController::class, 'update_account'])->name('commercial.account.update');

    Route::get('commercials/settings/index', [CommercialController::class, 'index_settings'])->name('commercial.settings.index');



    Route::get('shop/index', [CommercialController::class, 'index_shop'])->name('shop.index');

    Route::get('tickets/index', [CommercialController::class, 'index_tickets'])->name('tickets.index');

    Route::get('technicians/index', [CommercialController::class, 'index_technicians'])->name('technicians.index');

    Route::get('agencies/index', [CommercialController::class, 'index_agencies'])->name('agencies.index');

    Route::get('preventive-interventions/index', [CommercialController::class, 'index_preventive_interventions'])->name('preventive.interventions.index');

    Route::get('banks/index', [CommercialController::class, 'index_banks'])->name('banks.index');

    Route::get('tasks/index', [CommercialController::class, 'index_tasks'])->name('tasks.index');




    Route::get('technicians/create/{profile?}', [TechnicianController::class, 'create'])->name('technician.create');

    Route::post('technicians/store', [TechnicianController::class, 'store'])->name('technician.store');

    Route::get('technicians/edit/{profile}/{email}', [TechnicianController::class, 'edit'])->name('technician.edit');

    Route::put('technicians/edit/{profile}/{email}', [TechnicianController::class, 'update'])->name('technician.update');



    Route::get('technicians/enable/{email}', [TechnicianController::class, 'enable_with_email'])->name('technician.enable.email');

    Route::get('technicians/disable/{email}', [TechnicianController::class, 'disable_with_email'])->name('technician.disable.email');



    Route::get('technicians/download', [TechnicianController::class, 'download_import_member_file_model'])->name('technician.download.import.members');

    Route::post('technicians/upload/import-members', [TechnicianController::class, 'upload_import_member_file_model'])->name('technician.upload.import.members');

    Route::post('technicians/regions/store', [RegionController::class, 'store'])->name('technician.region.store');



    Route::get('technicians/reset-password/{email}', [TechnicianController::class, 'send_reset_password_email'])->name('technician.reset.password.email');

    Route::get('technicians/account-activation-link/{email}', [TechnicianController::class, 'resendActivateLinkWithEmail'])->name('technician.resendAccountActivationLink');



    Route::get('agencies/create', [AgencyController::class, 'create'])->name('agency.create');

    Route::post('agencies/store', [AgencyController::class, 'store'])->name('agency.store');

    Route::get('agencies/edit/{id}', [AgencyController::class, 'edit'])->name('agency.edit');

    Route::put('agencies/edit/{id}', [AgencyController::class, 'update'])->name('agency.update');

    Route::get('agencies/disable/{id}/{name}', [AgencyController::class, 'disable_with_id'])->name('agency.disable.id');

    Route::get('agencies/enable/{id}/{name}', [AgencyController::class, 'enable_with_id'])->name('agency.enable.id');



    Route::get('agencies/download', [AgencyController::class, 'download_import_member_file_model'])->name('agency.download.import.members');

    Route::post('agencies/upload/import-members', [AgencyController::class, 'upload_import_member_file_model'])->name('agency.upload.import.members');



    Route::get('banks/create', [BankController::class, 'create'])->name('bank.create');

    Route::post('banks/store', [BankController::class, 'store'])->name('bank.store');

    Route::get('banks/edit/{id}', [BankController::class, 'edit'])->name('bank.edit');

    Route::put('banks/edit/{id}', [BankController::class, 'update'])->name('bank.update');

    Route::get('banks/disable/{id}/{name}', [BankController::class, 'disable_with_id'])->name('bank.disable.id');

    Route::get('banks/enable/{id}/{name}', [BankController::class, 'enable_with_id'])->name('bank.enable.id');

    Route::get('banks/download', [BankController::class, 'download_import_member_file_model'])->name('bank.download.import.members');

    Route::post('banks/upload/import-members', [BankController::class, 'upload_import_member_file_model'])->name('bank.upload.import.members');



    Route::get('tasks/create', [TaskController::class, 'create'])->name('task.create');

    Route::post('tasks/store', [TaskController::class, 'store'])->name('task.store');

    Route::get('tasks/edit/{id}', [TaskController::class, 'edit'])->name('task.edit');

    Route::put('tasks/edit/{id}', [TaskController::class, 'update'])->name('task.update');

    Route::get('tasks/disable/{id}/{name}', [TaskController::class, 'disable_with_id'])->name('task.disable.id');

    Route::get('tasks/enable/{id}/{name}', [TaskController::class, 'enable_with_id'])->name('task.enable.id');

    Route::get('tasks/download', [TaskController::class, 'download_import_member_file_model'])->name('task.download.import.members');

    Route::post('tasks/upload/import-members', [TaskController::class, 'upload_import_member_file_model'])->name('task.upload.import.members');



    Route::get('tickets/create', [TicketController::class, 'create'])->name('ticket.create');

    Route::post('tickets/store', [TicketController::class, 'store'])->name('ticket.store');

    Route::get('tickets/edit/{id}', [TicketController::class, 'edit'])->name('ticket.edit');

    Route::put('tickets/edit/{id}', [TicketController::class, 'update'])->name('ticket.update');

    Route::get('tickets/disable/{id}/{code}', [TicketController::class, 'disable_with_id'])->name('ticket.disable.id');

    Route::get('tickets/enable/{id}/{code}', [TicketController::class, 'enable_with_id'])->name('ticket.enable.id');

    Route::get('tickets/update/status/{id}/{code}/{newStatus}', [TicketController::class, 'edit_status'])->name('ticket.status.update');

});
*/
