<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('action-login', [App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');
Route::get('sign-out', [App\Http\Controllers\LoginController::class, 'logout'])->name('sign-out');

Route::prefix('admin')->group(function () {
    Route::resource('dashboard', \App\Http\Controllers\ADMIN\DashboardController::class);
    Route::resource('user', \App\Http\Controllers\ADMIN\UserController::class);
    Route::resource('blog', \App\Http\Controllers\ADMIN\BlogController::class);
});

// Route::get('/', function () {
//     return view('welcome');
// });

// GEt sebuah routes : melihat, membaca

Route::get('belajar', [\App\Http\Controllers\BelajarController::class, 'index']);
Route::get('aritmatika', [\App\Http\Controllers\BelajarController::class, 'create']);
Route::get('aritmatika/tambah', [\App\Http\Controllers\BelajarController::class, 'tambah']);
Route::get('aritmatika/kurang', [\App\Http\Controllers\BelajarController::class, 'kurang']);
Route::get('aritmatika/bagi', [\App\Http\Controllers\BelajarController::class, 'bagi'])->name('aritmatika.bagi');
Route::get('aritmatika/kali', [\App\Http\Controllers\BelajarController::class, 'kali'])->name('aritmatika.kali');

Route::post('tambah-action', [\App\Http\Controllers\BelajarController::class, 'tambahAction'])->name('tambah-action');
Route::post('kurang-action', [\App\Http\Controllers\BelajarController::class, 'kurangAction'])->name('kurang-action');
Route::post('bagi-action', [\App\Http\Controllers\BelajarController::class, 'bagiAction'])->name('bagi-action');
Route::post('kali-action', [\App\Http\Controllers\BelajarController::class, 'kaliAction'])->name('kali-action');
