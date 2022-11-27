<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FarmController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('dashboard');
// })->middleware('auth');
Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard')->middleware('auth');
// Route::get('/', [HomeController::class, 'view']);
Route::get('/add-record', [HomeController::class, 'add'])->name('add');
Route::get('/view-record', [HomeController::class, 'view'])->name('view');

Route::post('/add-record', [FarmController::class, 'addRecord'])->name('addRecord');

// Route::post('edit/{id}', [FarmController::class, 'edit'])->name('edit');

// Route::post('/save-record', [FarmController::class, 'saveRecord'])->name('saveRecord');
Route::get('delete/{id}', [FarmController::class,'destroy']);
Route::get('edit/{id}', [FarmController::class,'edit']);
Route::post('/edit', [FarmController::class, 'updateRecord'])->name('updateRecord');

Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'registerUser'])->name('registerUser');
Route::post('/login', [UserController::class, 'loginUser'])->name('loginUser');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

// Route::get('/signUp', [HomeController::class, 'signUp'])->name('signUp');