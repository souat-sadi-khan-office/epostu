<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;

Route::middleware(['maintenance'])->group(function () {
    Route::get('/', [FrontendController::class, 'index'])->name('home');
    Route::get('about-us', [FrontendController::class, 'about'])->name('about');
    Route::get('support', [FrontendController::class, 'support'])->name('support');
    Route::get('knowledge-base/{slug}', [FrontendController::class, 'knowledge'])->name('knowledge');
    Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
    Route::get('find-partner', [FrontendController::class, 'findPartner'])->name('find.partner');
    Route::get('become-partner', [FrontendController::class, 'becomePartner'])->name('become.partner');
    Route::get('product/{slug}', [FrontendController::class, 'products'])->name('product');

    Route::get('event-registration', [FrontendController::class, 'eventRegistration'])->name('event.registration');
    Route::get('event-registration/success/{id}', [FrontendController::class, 'eventRegistrationSuccess'])->name('event.registration.success');

    Route::get('checkout/{product}/{model}', [FrontendController::class, 'checkoutProduct'])->name('checkout');
    Route::post('proceed-to-checkout', [FrontendController::class, 'proceedCheckout'])->name('proceed.checkout');

    Route::post('submit/contact-form', [FrontendController::class, 'submitContactForm'])->name('submit.contact.form');
    Route::post('submit/newsletter-form', [FrontendController::class, 'submitNewsletterForm'])->name('submit.newsletter.form');
    Route::post('submit/partner-form', [FrontendController::class, 'submitPartnerForm'])->name('submit.partner.form');
    Route::post('submit/event-registration-form', [FrontendController::class, 'submitEventRegistrationForm'])->name('submit.event.registration.form');

});
