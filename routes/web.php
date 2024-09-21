<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// // route resource for product
// Route::get('/', [ProductController::class, 'index'])->name('products.index');
// // route resource for show
// Route::post('/products/{id}', [ProductController::class, 'show'])->name('products.show');
// // View create 
// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// // logic store(insert)
// Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// // view edit
// Route::get('/products/{id}', [ProductController::class, 'edit'])->name('products.edit');
// // logic edit(update)
// Route::put('/products/{id}', [ProductController::class, 'store'])->name('products.update');
// // Logic delete
// Route::delete('products/hapus/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::resource('/products', ProductController::class);