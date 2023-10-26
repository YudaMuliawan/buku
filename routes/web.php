<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bukuController;
use App\Http\Controllers\pengarangController;


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

Route::get('/welcome', function () {
    return view('welcome');
});


#Route Buku
Route::get('/', [bukuController::class, 'buku']);
Route::get('/buku', [bukuController::class, 'buku']);
Route::post('/tambahbuku', [bukuController::class, 'tambahbuku']);
Route::get('/edit-buku/{id}', [bukuController::class, 'edit']);
Route::put('updatebuku', [bukuController::class, 'update']);
Route::get('/deletebuku/{id}', [bukuController::class, 'deletebuku']);


#Route Kategori
Route::get('/kategori', [\App\Http\Controllers\kategoriController::class, 'kategori']);
Route::post('/tambahkategori', [\App\Http\Controllers\kategoriController::class, 'tambahkategori']);
Route::get('/edit-kategori/{id}', [\App\Http\Controllers\kategoriController::class, 'editkategori']);
Route::put('/updatekategori', [\App\Http\Controllers\kategoriController::class, 'updatekategori']);


#Route Pengarang
Route::get('/pengarang', [pengarangController::class, 'pengarang']);
Route::post('/tambahpengarang', [pengarangController::class, 'tambahpengarang']);
Route::get('/edit-pengarang/{id}', [pengarangController::class, 'editpengarang']);
Route::put('/updatepengarang', [pengarangController::class, 'updatepengarang']);


