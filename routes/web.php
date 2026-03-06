<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/infrastructure', [PageController::class, 'infrastructure'])->name('infrastructure');
Route::get('/clients', [PageController::class, 'clients'])->name('clients');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::get('/quote', [PageController::class, 'quote'])->name('quote');
Route::post('/quote', [ContactController::class, 'sendQuote'])->name('quote.send');
