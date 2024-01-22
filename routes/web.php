<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('/backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('products', [ProductController::class, 'index'])->name('product.list');
Route::get('products/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
Route::get('products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('products/store', [ProductController::class, 'store'])->name('product.store');
Route::get('products/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('products/update/{id}', [ProductController::class, 'update'])->name('product.update');

require __DIR__.'/auth.php';
