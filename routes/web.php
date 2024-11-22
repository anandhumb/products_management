<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\products\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('products/')->name('products.')->group(function(){
    Route::get('/',[ProductController::class,'index'])->name('index');
    Route::get('/create',[ProductController::class,'create'])->name('create');
    Route::post('/',[ProductController::class,'store'])->name('store');   
    Route::get('edit/{product}',[ProductController::class,'edit']);
    Route::post('/{product}',[ProductController::class,'update'])->name('update'); 
    Route::delete('/{product}',[ProductController::class,'destroy'])->name('destroy');
});
// Route::resource('products', ProductController::class)->only([]);