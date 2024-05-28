<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;




Route::get('/' , [HomePageController::class, 'index'])->name('index');
Route::get('about' , [AboutController::class, 'about'])->name('about');
Route::get('blog' , [BlogController::class, 'blog'])->name('blog');
Route::get('shop' , [ShopController::class, 'shop'])->name('shop');