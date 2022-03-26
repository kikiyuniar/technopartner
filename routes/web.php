<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TransaksiController;
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
//     return view('dashboard.kategori');
// });
Route::get('/', [Controller::class, 'index']);
Route::get('tambah_kategori', [CategoryController::class, 'index']);
Route::get('{slug}', [CategoryController::class, 'kategori']);
Route::post('action_kategori', [CategoryController::class, 'create']);
Route::get('tambah_transaksi', [TransaksiController::class, 'index2']);
