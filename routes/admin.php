<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\SupportFAQController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\GiftItemController;
use App\Http\Controllers\Admin\EposTuPricingPlanController;
use App\Http\Controllers\Admin\TrusPanPricingPlanController;

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

    Route::resource('gift-item', GiftItemController::class);
    Route::resource('epostu-pricing-plan', EposTuPricingPlanController::class);
    Route::resource('truspan-pricing-plan', TrusPanPricingPlanController::class);

    Route::get('report/event', [ReportController::class, 'events'])->name('report.event');
    Route::get('report/order', [ReportController::class, 'orders'])->name('report.order');
    Route::get('report/order/show/{id}', [ReportController::class, 'ordersShow'])->name('report.order.show');
    Route::get('report/order/edit/{id}', [ReportController::class, 'ordersEdit'])->name('report.order.edit');
    Route::patch('report/order/update/{id}', [ReportController::class, 'ordersUpdate'])->name('report.order.update');
    Route::delete('report/order/destroy/{id}', [ReportController::class, 'destroyOrderRecord'])->name('report.order.destroy');

    Route::get('report/partner', [ReportController::class, 'partners'])->name('report.partner');
    Route::get('report/partner/show/{id}', [ReportController::class, 'partnersShow'])->name('report.partner.show');
    Route::get('report/partner/edit/{id}', [ReportController::class, 'partnersEdit'])->name('report.partner.edit');
    Route::patch('report/partner/update/{id}', [ReportController::class, 'partnersUpdate'])->name('report.partner.update');
    Route::delete('report/partner/destroy/{id}', [ReportController::class, 'destroyPartnerRecord'])->name('report.partner.destroy');
    Route::get('report/contact-message', [ReportController::class, 'contactMessages'])->name('report.contact-message');
    Route::delete('report/contact-message/destroy/{id}', [ReportController::class, 'destroyContactMessage'])->name('report.contact-message.destroy');
    Route::get('report/subscribers', [ReportController::class, 'subscriber'])->name('report.subscribers');
    Route::delete('report/subscribers/destroy/{id}', [ReportController::class, 'destroySubscriber'])->name('report.subscribers.destroy');
    Route::delete('report/event/destroy/{id}', [ReportController::class, 'destroyEvent'])->name('report.event.destroy');
});