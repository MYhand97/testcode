<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    if(auth()->check()){
        return view('admin.admin_dashboard', ['title' => 'Dashboard']);
    }
    else{
        return redirect('/login');
    }
});
Route::get('/login', [AuthController::class, 'loginPage'])->name('loginPage');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'registerPage'])->name('registerPage');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/users', [AdminController::class, 'dataUsers'])->name('dataUsers');
Route::post('/users/add', [AdminController::class, 'tambahDataUsers'])->name('tambahDataUser');
Route::post('/users/update', [AdminController::class, 'ubahDataUsers'])->name('ubahDataUser');
Route::post('/users/delete', [AdminController::class, 'hapusDataUsers'])->name('hapusDataUser');

Route::get('/data-murid', [AdminController::class, 'dataMurid'])->name('dataMurid');
Route::get('/data-cabang', [AdminController::class, 'dataCabang'])->name('dataCabang');
Route::post('/data-cabang/add', [AdminController::class, 'tambahDataCabang'])->name('tambahDataCabang');
Route::get('/reports', [AdminController::class, 'reports'])->name('reports');