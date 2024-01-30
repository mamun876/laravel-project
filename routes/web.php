<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\PurchaseReturnController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\ReturnController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SalesReturnController;
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

// brand ROute
Route::get('brand', [BrandController::class, 'index'])->name('brand.list');
Route::get('brand/create', [BrandController::class, 'create'])->name('brand.create');
Route::post('brand/store', [BrandController::class, 'store'])->name('brand.store');
Route::get('brand/edit{id}', [BrandController::class, 'edit'])->name('brand.edit');
Route::post('brand/update{id}', [BrandController::class, 'update'])->name('brand.update');
Route::get('brand/delete{id}', [BrandController::class, 'delete'])->name('brand.delete');
// sales Route
Route::get('sales', [SalesController::class, 'index'])->name('sales.list');
Route::get('sales/create', [SalesController::class, 'create'])->name('sales.create');
Route::post('sales/store', [SalesController::class, 'store'])->name('sales.store');
Route::get('sales/delete/{id}', [SalesController::class, 'delete'])->name('sales.delete');
Route::get('sales/edit/{id}', [SalesController::class, 'edit'])->name('sales.edit');
Route::post('sales/update/{id}', [SalesController::class, 'update'])->name('sales.update');

// purchase Route
Route::get('purchase', [PurchaseController::class, 'index'])->name('purchase.list');
Route::get('purchase/create', [PurchaseController::class, 'create'])->name('purchase.create');
Route::post('purchase/store', [PurchaseController::class, 'store'])->name('purchase.store');
Route::get('purchase/edit/{id}', [PurchaseController::class, 'edit'])->name('purchase.edit');
Route::post('purchase/update/{id}', [PurchaseController::class, 'update'])->name('purchase.update');
Route::get('purchase/delete/{id}', [PurchaseController::class, 'delete'])->name('purchase.delete');

// Expenses Route
Route::get('expense',[ExpenseController::class, 'index'])->name('expense.list');
Route::get('expense/create',[ExpenseController::class, 'create'])->name('expense.create');
Route::post('expense/store',[ExpenseController::class, 'store'])->name('expense.store');
Route::get('expense/edit{id}',[ExpenseController::class, 'edit'])->name('expense.edit');
Route::post('expense/update{id}',[ExpenseController::class, 'update'])->name('expense.update');
Route::get('expense/delete',[ExpenseController::class, 'delete'])->name('expense.delete');

// quototation Route
Route::get('quotation',[QuotationController::class, 'index'])->name('quotation.list');
Route::get('quotation/create',[QuotationController::class, 'create'])->name('quotation.create');
Route::get('quotation/store',[QuotationController::class, 'store'])->name('quotation.store');
Route::get('quotation/edit{id}',[QuotationController::class, 'edit'])->name('quotation.edit');
Route::get('quotation/update{id}',[QuotationController::class, 'update'])->name('quotation.update');
Route::get('quotation/delete',[QuotationController::class, 'delete'])->name('quotation.delete');

// Transfer Route
Route::get('transfer',[TransferController::class, 'index'])->name('transfer.list');
Route::get('transfer/create',[TransferController::class, 'create'])->name('transfer.create');
Route::post('transfer/store',[TransferController::class, 'store'])->name('transfer.store');
Route::get('transfer/edit{id}',[TransferController::class, 'edit'])->name('transfer.edit');
Route::post('transfer/update{id}',[TransferController::class, 'update'])->name('transfer.update');
Route::get('transfer/delete',[TransferController::class, 'delete'])->name('transfer.delete');

//Sales Return Route
Route::get('return', [SalesReturnController::class, 'index'])->name('sales_return.list');
Route::get('return/create', [SalesReturnController::class, 'create'])->name('sales_return.create');
Route::get('return/store', [SalesReturnController::class, 'store'])->name('sales_return.store');
Route::get('return/edit{id}', [SalesReturnController::class, 'edit'])->name('sales_return.edit');
Route::get('return/update{id}', [SalesReturnController::class, 'update'])->name('sales_return.update');
Route::get('return/delete', [SalesReturnController::class, 'delete'])->name('sales_return.delete');

// purchasereturn Route
Route::get('purchase_return', [PurchaseReturnController::class, 'index'])->name('purchase_return.list');
Route::get('purchase_return/create', [PurchaseReturnController::class, 'create'])->name('purchase_return.create');
Route::post('purchase_return/store', [PurchaseReturnController::class, 'store'])->name('purchase_return.store');
Route::get('purchase_return/edit{id}', [PurchaseReturnController::class, 'edit'])->name('purchase_return.edit');
Route::post('purchase_return/update{id}', [PurchaseReturnController::class, 'update'])->name('purchase_return.update');
Route::post('purchase_return/delete', [PurchaseReturnController::class, 'delete'])->name('purchase_return.delete');

// People Route
Route::get('people', [PeopleController::class, 'index'])->name('people.list');

// place Route
Route::get('place', [PlaceController::class, 'index'])->name('place.list');
require __DIR__.'/auth.php';
