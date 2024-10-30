<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\SupportFAQController;
use App\Http\Controllers\Admin\BlogController;

Route::get('/', function () {
    return redirect()->route('admin.login');
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login/post', [LoginController::class, 'login'])->name('login.post');

Route::middleware(['isAdmin', 'web'])->group(function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('dashboard', [LoginController::class, 'dashboard'])->name('dashboard');

    Route::get('settings', [SettingsController::class, 'index'])->name('settings');
    Route::post('update-settings', [SettingsController::class, 'update'])->name('settings.update');

    Route::resource('support-faq', SupportFAQController::class);
    Route::get('/check-slug', [BlogController::class, 'checkSlug'])->name('check.slug');
    Route::resource('knowledge-base', BlogController::class);

    Route::get('report/partner', [ReportController::class, 'partners'])->name('report.partner');
    Route::delete('report/partner/destroy/{id}', [ReportController::class, 'destroyPartnerRecord'])->name('report.partner.destroy');
    Route::get('report/contact-message', [ReportController::class, 'contactMessages'])->name('report.contact-message');
    Route::delete('report/contact-message/destroy/{id}', [ReportController::class, 'destroyContactMessage'])->name('report.contact-message.destroy');
    Route::get('report/subscribers', [ReportController::class, 'subscriber'])->name('report.subscribers');
    Route::delete('report/subscribers/destroy/{id}', [ReportController::class, 'destroySubscriber'])->name('report.subscribers.destroy');
});