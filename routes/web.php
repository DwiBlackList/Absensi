<?php

use App\Http\Controllers\DosenController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
Route::get('/dosen/create', [DosenController::class, 'create'])->name('dosen.create');
Route::post('/dosen/store', [DosenController::class, 'store'])->name('dosen.store');
Route::get('/dosen/edit/{kode}', [DosenController::class, 'edit'])->name('dosen.edit');
Route::post('/dosen/update/{kode}', [DosenController::class, 'update'])->name('dosen.update');
Route::post('/dosen/destroy/{kode}', [DosenController::class, 'destroy'])->name('dosen.destroy');

require __DIR__.'/auth.php';
