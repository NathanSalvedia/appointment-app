<?php

use App\Http\Controllers\MainpageController;
use App\Http\Controllers\RequestController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/mainpage', [MainpageController::class, 'index'])->name('mainpage');



Route::get('/signup', function () {
    return view('signup');
});

Route::get('/user/settings', function (){
       return view('user.settings');
})->name('user.settings');

Route::get('/user/edit-profile', function (){
    return view('user.edit-profile');
})->name('user.edit-profile');

Route::get('/user/request', function (){
    return view('user.request');
})->name('user.request');


Route::get('/user/status', function (){
    return view('user.status');
})->name('user.status');


Route::get('/user/logout', function (){
    return view('user.logout');
})->name('user.logout');


Route::get('/user/forgot', function (){
    return view('user.forgot');
})->name('user.forgot');


Route::get('/user/view', function (){
    return view('user.view');
})->name('user.view');


Route::get('/user/create', function () {
    return view('user.create');
})->name('user.create');


Route::get('/user/profile', function () {
    return view('user.profile');
})->name('user.profile');

Route::get('/user/view', function () {
    return view('user.view');
})->name('user.view');

Route::get('/user/verify-email', function () {
    return view('user.verify-email');
})->name('user.verify-email');

Route::get('/admin/admin-login', function () {
    return view('admin.admin-login');
})->name('admin.admin-login');


Route::get('/admin/admin-mainpage', function () {
    return view('admin.admin-mainpage');
})->name('admin.admin-mainpage');


Route::get('/admin/admin-form', function () {
    return view('admin.admin-form');
})->name('admin.admin-form');


Route::get('/admin/admin-logout', function () {
    return view('admin.admin-logout');
})->name('admin.admin-logout');

Route::get('/admin/admin-request', function () {
    return view('admin.admin-request');
})->name('admin.admin-request');


