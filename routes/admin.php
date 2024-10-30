<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;

Route::get('/', function () {
    return redirect()->route('admin.login');
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login/post', [LoginController::class, 'login'])->name('login.post');

Route::middleware(['isAdmin', 'web'])->group(function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
});