<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('portfolio.home');
});

Route::get('admin/login',function() {
    return view('admin.login');
})->name('get-login');

Route::get('admin/dashboard',function() {
    return view('admin.dashboard');
})->name('get-admin-dashboard');

Route::get('add/profile',function() {
    return view('admin.profile.addprofile');
})->name('get-add-profile');

Route::post('/admin-login', [AdminController::class, 'Adminlogin'])->name('post-admin-login');

