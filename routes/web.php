<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MoreController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class , 'index']);
Route::get('/more' , [MoreController::class , 'index'])->name('more');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin' ,[AdminController::class , 'index'])->middleware('auth');
Route::post('/admin/new' , [AdminController::class, 'store'])->name('add_new_post');
Route::post('/admin/create_admin', [AdminController::class , 'create_admin'])->name('create_admin');
