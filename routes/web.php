<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\RequestFormController;
use App\Http\Controllers\MainpageController;

// Authentication
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
Route::resource('register', RegisterController::class);

// Admin
Route::get('/admin-login', [AdminLoginController::class, 'show'])->name('admin-login');
Route::post('/admin-login', [AdminLoginController::class, 'login']);
Route::get('/admin-logout', [AdminLoginController::class, 'adminlogout'])->name('admin-logout');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('requestforms', [RequestFormController::class, 'create']);
    Route::post('requestforms', [RequestFormController::class, 'store'])->name('requestforms.store');
    Route::get('status', [RequestFormController::class, 'index'])->name('status');
    Route::get('view/{id}', [RequestFormController::class, 'show'])->name('view');
    Route::get('settings', [SettingsController::class, 'index'])->name('user.settings');
    Route::get('edit-profile', [SettingsController::class, 'edit'])->name('user.edit-profile');
    Route::post('edit-profile', [SettingsController::class, 'updateProfile'])->name('edit-profile.updateProfile');
    Route::get('/mainpage', MainpageController::class);
    Route::get('edit/{id}', [RequestFormController::class, 'edit'])->name('user.edit');
    Route::post('edit/{id}', [RequestFormController::class, 'update'])->name('edit.update');
});


Route::get('/admin-mainpage', [RequestFormController::class, 'displayUser'])->name('admin-mainpage.displayUser')->middleware('admin');
