<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;
use App\Models\Karyawan;

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

Route::get('/', function () {
    return view('dashboard', [
        "title" => "Dashboard",
    ]);
});

// Route::get('/karyawan', [KaryawanController::class, 'index']);
//route resource
Route::resource('/karyawan', \App\Http\Controllers\KaryawanController::class);

Route::resource('/tunjangan', \App\Http\Controllers\TunjanganController::class);
