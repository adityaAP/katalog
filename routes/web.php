<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\LoginController;

require 'admin/admin.php';

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login.proses');
Route::post('/reload-captcha', [LoginController::class, 'refreshCaptcha'])->name('login.refresh_captcha');

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/student', [SchoolController::class, 'student'])->name('student');
Route::get('/school', [SchoolController::class, 'school'])->name('school');
Route::get('/school-list', [SchoolController::class, 'school_list'])->name('school-list');

