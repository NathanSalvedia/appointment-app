<?php

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

Route::get('/mainpage', function () {
    return view('mainpage');
})->name('mainpage');


Route::get('/signup', function () {
    return view('signup');
});

Route::get('/user/settings', function (){
       return view('user.settings');
})->name('user.settings');


Route::get('/user/username', function (){
    return view('user.username');
})->name('user.username');


Route::get('/user/password', function (){
    return view('user.password');
})->name('user.password');


Route::get('/user/email', function (){
    return view('user.email');
})->name('user.email');


Route::get('/user/contact', function (){
    return view('user.contact');
})->name('user.contact');


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


Route::get('/admin', function () {
    return view('admin-login');
});


Route::get('/admin/admin-mainpage', function () {
    return view('admin.admin-mainpage');
})->name('admin.admin-mainpage');


Route::get('/admin/admin-form', function () {
    return view('admin.admin-form');
})->name('admin.admin-form');


Route::get('/admin/admin-logout', function () {
    return view('admin.admin-logout');
})->name('admin.admin-logout');

