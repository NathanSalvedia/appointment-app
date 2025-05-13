<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\RequestFormController;
use App\Http\Controllers\MainpageController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\NewPasswordController;


// Authentication routes
Route::get('/', function () {
    return view('login');
});

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/', [LoginController::class, 'logout'])->name('logout');
Route::resource('register', RegisterController::class);

// CAPTCHA and Security Question routes


// Admin routes
Route::get('/admin-login', [AdminLoginController::class, 'show'])->name('admin-login');
Route::post('/admin-login', [AdminLoginController::class, 'login']);
Route::get('/admin-logout', [AdminLoginController::class, 'adminlogout'])->name('admin-logout');

// Authenticated user routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('requestforms', [RequestFormController::class, 'create']);
    Route::post('requestforms', [RequestFormController::class, 'store'])->name('requestforms.store');
    Route::get('status', [RequestFormController::class, 'index'])->name('status');
    Route::get('view/{id}', [RequestFormController::class, 'show'])->name('view');
    Route::get('settings', [SettingsController::class, 'index'])->name('user.settings');
    Route::get('edit-profile', [SettingsController::class, 'edit'])->name('user.edit-profile');
    Route::post('edit-profile', [SettingsController::class, 'updateProfile'])->name('user.update-profile');
    Route::get('/mainpage', MainpageController::class);
    Route::get('edit/{id}', [RequestFormController::class, 'edit'])->name('user.edit');
    Route::post('edit/{id}', [RequestFormController::class, 'update'])->name('edit.update');
    Route::get('/user/notification', [DashboardController::class, 'showRequests'])->name('user.notification');
    Route::get('notification', [DashboardController::class, 'showRequests'])->name('notification');

});

// Admin specific routes
Route::middleware('admin')->group(function () {
    Route::get('/admin-mainpage', [DashboardController::class, 'displayUser'])->name('admin-mainpage.displayUser');
    Route::get('admin-view/{id}', [DashboardController::class, 'show'])->name('admin-view');
    Route::get('admin-form', [DashboardController::class, 'create'])->name('admin-form');
    Route::post('admin-form', [DashboardController::class, 'store'])->name('form.store');
    Route::get('/admin-mainpage/delete/{id}', [DashboardController::class, 'remove']);
    Route::post('/admin-view/{id}', [DashboardController::class, 'returnn'])->name('admin-view');
});

// Password reset routes
Route::middleware('guest')->group(function () {
    Route::get('forgot-password', [PasswordResetController::class, 'index'])->name('password.request');
    Route::get('reset-password', [NewPasswordController::class, 'show'])->name('password.reset');
});

Route::get('/verify-security', [LoginController::class, 'showSecurityQuestion']);
Route::post('/verify-security', [LoginController::class, 'processSecurityQuestion']);

// Captcha verification routes
Route::get('/verify-captcha', [LoginController::class, 'showCaptcha'])->name('captcha.show'); // Show Captcha form
Route::post('/verify-captcha', [LoginController::class, 'processCaptcha'])->name('captcha.process'); // Process Captcha verification

Route::get('/verify-otp', [LoginController::class, 'showOtpForm'])->name('otp.verify.form');
Route::post('/verify-otp', [LoginController::class, 'verifyOtp'])->name('otp.verify');

Route::get('/verify-otp', [LoginController::class, 'showOtpForm'])->name('otp.form'); // Show OTP form
Route::post('/verify-otp', [LoginController::class, 'verifyOtp'])->name('otp.verify'); // Verify OTP
