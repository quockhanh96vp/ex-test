<?php

use App\Http\Controllers\ItemSaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('items.index');
});

Route::get('/items', [ItemSaleController::class, 'index'])->name('items.index');
Route::get('/items/create', [ItemSaleController::class, 'create'])->name('items.create');
Route::post('/items', [ItemSaleController::class, 'store'])->name('items.store');
Route::get('/items/{item}', [ItemSaleController::class, 'show'])->name('items.show');
Route::get('/items/{item}/edit', [ItemSaleController::class, 'edit'])->name('items.edit');
Route::put('/items/{item}', [ItemSaleController::class, 'update'])->name('items.update');
Route::delete('/items/{item}', [ItemSaleController::class, 'destroy'])->name('items.destroy');
