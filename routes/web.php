<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Install\InstallController;
use App\Http\Controllers\Frontend\FrontendController;

// Route::group(['middleware' => ['install']], function () {


// });

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('about-us', [FrontendController::class, 'about'])->name('about');
Route::get('support', [FrontendController::class, 'support'])->name('support');
Route::get('knowledge-base/{slug}', [FrontendController::class, 'knowledge'])->name('knowledge');
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('find-partner', [FrontendController::class, 'findPartner'])->name('find.partner');
Route::get('become-partner', [FrontendController::class, 'becomePartner'])->name('become.partner');
Route::get('product/{slug}', [FrontendController::class, 'products'])->name('product');

Route::get('install', [InstallController::class, 'index'])->name('install');
Route::post('install', [InstallController::class, 'terms'])->name('install.start');
Route::get('install/server', [InstallController::class, 'server'])->name('install.server');
Route::post('install/server', [InstallController::class, 'check_server'])->name('install.check_server');
Route::get('install/database', [InstallController::class, 'database'])->name('install.database');
Route::post('install/database/store', [InstallController::class, 'process_install'])->name('install.database.store');
Route::get('install/user', [InstallController::class, 'create_user'])->name('install.user');
Route::post('install/user/save', [InstallController::class, 'store_user'])->name('install.user.save');
Route::get('install/settings', [InstallController::class, 'system_settings'])->name('install.settings');
Route::post('install/settings/store', [InstallController::class, 'final_touch'])->name('install.settings.store');