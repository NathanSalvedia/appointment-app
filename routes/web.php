<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SettingsController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\AdminRegisterController;
use App\Http\Controllers\RequestFormController;

use App\Http\Controllers\MainpageController;
use App\Http\Controllers\DashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/login', function () {
    //return view('login');
//});

//Route::get('/signup', function () {
    //return view('signup');
//});


//Route::get('/status', function () {
    //return view('user.status');
//});


//Route::get('/user/settings', function () {
    //return view('user.settings');
//});

//Route::get('/user/edit-profile', function () {
    //return view('user.edit-profile');
//});

Route::get('/user/profile', function () {
    return view('user.profile');
});

Route::get('/admin/admin-register', function () {
    return view('admin.admin-register');
});

//Route::get('/user/view', function () {
    //return view('user.view');
//});

Route::get('/user/create', function () {
    return view('user.create');
});

//Route::get('/admin/admin-login', function () {
    //return view('admin.admin-login');
//});

Route::get('/admin/admin-form', function () {
    return view('admin.admin-form');
});

//Route::get('/admin/admin-mainpage', function () {
    //return view('admin.admin-mainpage');
//});

Route::get('/admin/admin-request', function () {
    return view('admin.admin-request');
});






Route::middleware('auth')->group(function (){
    Route::get('requestforms', function () {
        return view('user.requestforms');
    })->name('requestforms');

    Route::get('/mainpage', MainpageController::class);
    Route::get('status', [RequestFormController::class, 'index'])->name('status');
    Route::post('requestforms', [RequestFormController::class,'store'])->name('requestforms.store');
    Route::get('view', [RequestFormController::class, 'show'])->name('view');

});

// Authentication
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/passwordreset', [PasswordResetController::class,'show'])->name('passwordreset');
Route::resource('register', RegisterController::class);
Route::resource('settings', SettingsController::class);

//Admin

Route::get('/admin-login', [AdminLoginController::class, 'show'])->name('admin-login');
Route::post('/admin-login', [AdminLoginController::class, 'login'])->name('admin-login');
Route::resource('admin-register', AdminRegisterController::class);
Route::get('/admin-mainpage', [DashboardController::class, 'index'])->name('admin-mainpage')->middleware('auth');








