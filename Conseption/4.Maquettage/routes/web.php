<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\TraineesController;
use App\Http\Controllers\SchoolYearsController;

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
Route::get('/', [SchoolYearsController::class, 'index'])->name('SchoolYears');
Route::resource('années_scolaires', SchoolYearsController::class);
Route::resource('classes', ClassesController::class);
Route::resource('apprenants', TraineesController::class);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Auth::routes();