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
});

Route::get('/mainpage', function () {
    return view('mainpage');
});


Route::get('/signup', function () {
    return view('signup');
});

Route::get('/admin', function () {
    return view('admin-login');
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
