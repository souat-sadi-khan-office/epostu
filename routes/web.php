<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('about-us', [FrontendController::class, 'about'])->name('about');
Route::get('support', [FrontendController::class, 'support'])->name('support');
Route::get('knowledge-base/{slug}', [FrontendController::class, 'knowledge'])->name('knowledge');
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('find-partner', [FrontendController::class, 'findPartner'])->name('find.partner');
Route::get('become-partner', [FrontendController::class, 'becomePartner'])->name('become.partner');
Route::get('product/{slug}', [FrontendController::class, 'products'])->name('product');