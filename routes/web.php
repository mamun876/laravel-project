<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\ReturnController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SalesReturnControler;
use App\Http\Controllers\TransferController;
use Faker\Guesser\Name;
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
    return view('login');
});

Route::get('/register', function () {
    return view('/backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
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

// category route
Route::get('category', [categoryController::class, 'index'])->name('category.list');
Route::get('category/create', [categoryController::class, 'create'])->name('category.create');
Route::post('category/store', [categoryController::class, 'store'])->name('category.store');
Route::get('category/delete/{id}', [categoryController::class, 'delete'])->name('category.delete');
Route::get('category/edit/{id}', [categoryController::class, 'edit'])->name('category.edit');
Route::post('category/update/{id}', [categoryController::class, 'update'])->name('category.update');

// sales Route
Route::get('sales', [SalesController::class, 'index'])->name('sales.list');
Route::get('sales/create', [SalesController::class, 'create'])->name('sales.create');
Route::post('sales/store', [SalesController::class, 'store'])->name('sales.store');
Route::get('sales/delete/{$id}', [SalesController::class, 'delete'])->name('sales.delete');
Route::get('sales/edit/{$id}', [SalesController::class, 'edit'])->name('sales.edit');
Route::post('sales/update/{$id}', [SalesController::class, 'update'])->name('sales.update');

// purchase Route
Route::get('purchase', [PurchaseController::class, 'index'])->name('purchase.list');

// Expenses Route
Route::get('expense',[ExpenseController::class, 'index'])->name('expense.list');

// quototation Route
Route::get('quotation',[QuotationController::class, 'index'])->name('quotation.list');

// Transfer Route
Route::get('transfer',[TransferController::class, 'index'])->name('transfer.list');

// Return Route
Route::get('return', [SalesReturnControler::class, 'index'])->name('return.list');

// People Route
Route::get('people', [PeopleController::class, 'index'])->name('people.list');

// place Route
Route::get('place', [PlaceController::class, 'index'])->name('place.list');
require __DIR__.'/auth.php';
