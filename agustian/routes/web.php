<?php

use App\Http\Controllers\CrudSiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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


route::get('/login', [LoginController::class, 'index'])->name('login');
route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'ceklevel:admin,petugas']], function(){
    route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    route::get('/crud-siswa', [CrudSiswaController::class, 'index'])->name('crud-siswa');
    route::get('/crud-siswa/search', [CrudSiswaController::class, 'search'])->name('crud-siswa-search');
    route::get('/create-siswa', [CrudSiswaController::class, 'create'])->name('create-siswa');
    route::post('/simpan-siswa', [CrudSiswaController::class, 'store'])->name('simpan-siswa');
    route::get('/edit-siswa/{id}', [CrudSiswaController::class, 'edit'])->name('edit-siswa');
    route::post('/update-siswa/{id}', [CrudSiswaController::class, 'update'])->name('update-siswa');
    route::get('/destroy-siswa/{id}', [CrudSiswaController::class, 'destroy'])->name('destroy-siswa');
});
