<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPassword;
use App\Http\Controllers\Auth\ChangePassword;

// Admin
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ConsultationServiceController;
use App\Http\Controllers\ConsultationServiceFeatureController;
use App\Http\Controllers\Admin\DashboardController;

// frontend
use App\Http\Controllers\Website\HomeController;

Route::get('/', function () { 
    return redirect('/admin-dashboard');
})->middleware('auth');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    //    return redirect()->back()->with('success','Cache clear successfully.');
    return redirect()->back();

})->name('all-clear-cache');

Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');

Route::get('/register', [RegisterController::class, 'show'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'register'])->middleware('guest')->name('register.perform');

Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');

Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');

Route::group(['middleware' => 'auth'], function () {

    Route::controller(DashboardController::class)->group(function() {
        Route::get('/admin-dashboard', 'index')->name('dashboards');
    });

    Route::controller(ProfileController::class)->group(function() {
        Route::get('/user-profile', 'show')->name('user-profile');
        Route::post('/user-profile', 'update')->name('user-profile.perform');
        Route::get('/website-setting', 'website_show')->name('website-setting');
        Route::post('/website-setting', 'website_update')->name('website-setting-update');
    });

    Route::controller(ServiceController::class)->group(function() {
        Route::get('/services-management', 'index')->name('services-management');
        Route::get('/services-management/new', 'create')->name('services-new');
        Route::post('/services-management/new', 'store')->name('services-new.store');
        Route::get('/services-management/edit/{id}', 'edit')->name('services-edit');
        Route::post('/services-management/edit/{id}', 'update')->name('services-edit.update');
        Route::post('/services-delete/{id}', 'destroy')->name('services-destroy');
    });

    Route::controller(ProductsController::class)->group(function() {
        Route::get('/products-management', 'index')->name('products-management');
        Route::get('/products-management/new', 'create')->name('products-new');
        Route::post('/products-management/new', 'store')->name('products-new.store');
        Route::get('/products-management/edit/{id}', 'edit')->name('products-edit');
        Route::post('/products-management/edit/{id}', 'update')->name('products-edit.update');
        Route::post('/products-delete/{id}', 'destroy')->name('products-destroy');
    });

    Route::controller(SliderController::class)->group(function() {
        Route::get('/slider-management', 'index')->name('slider-management');
        Route::get('/slider-management/new', 'create')->name('slider-new');
        Route::post('/slider-management/new', 'store')->name('slider-new.store');
        Route::get('/slider-management/edit/{id}', 'edit')->name('slider-edit');
        Route::post('/slider-management/edit/{id}', 'update')->name('slider-edit.update');
        Route::post('/slider-delete/{id}', 'destroy')->name('slider-destroy');
    });

     Route::controller(ConsultationServiceController::class)->group(function() {
        Route::get('/consultation-services', 'index')->name('consultation-services.index');
        Route::get('/consultation-services/new', 'create')->name('consultation-services-new');
        Route::post('/consultation-services/new', 'store')->name('consultation-services.store');
        Route::get('/consultation-services/edit/{id}', 'edit')->name('consultation-services-edit');
        Route::post('/consultation-services/edit/{id}', 'update')->name('consultation-services-edit.update');
        Route::post('/consultation-services-delete/{id}', 'destroy')->name('consultation-services-destroy');
    });

    Route::controller(ConsultationServiceFeatureController::class)->group(function() {
        Route::get('/consultation-services-feature', 'index')->name('consultation-services-feature.index');
        Route::get('/consultation-services-feature/new', 'create')->name('consultation-services-feature-new');
        Route::post('/consultation-services-feature/new', 'store')->name('consultation-services-feature.store');
        Route::get('/consultation-services-feature/edit/{id}', 'edit')->name('consultation-services-feature-edit');
        Route::post('/consultation-services-feature/edit/{id}', 'update')->name('consultation-services-feature-edit.update');
        Route::post('/consultation-services-feature-delete/{id}', 'destroy')->name('consultation-services-feature-destroy');
    });
    
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

// Website url define 

Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'index')->name('w-home');
    Route::get('/about-us', 'aboutUs')->name('w-aboutUs');
    Route::get('/services', 'services')->name('w-services');
    Route::get('/contact-us', 'contactUs')->name('w-contactUs');
    Route::post('/contact-us', 'contactStore')->name('contact.store.store');
    Route::get('/products', 'products')->name('w-products');
    Route::get('/products/detail/{id}', 'product_details')->name('w-product-details');
    Route::post('/consultation-store', 'ConsultationStore')->name('consultation.store.store');

    Route::get('/services/proceed-to-payment', 'proceeToPayment')->name('proceed-to-payment');

    // Form POST handler
    Route::post('/services/book-your-consultation/init','initBooking')->name('services.book.your.consultation.init');
    Route::get('/services/book-your-consultation', 'bookYourConsultation')->name('services.book.your.consultation');

});

Route::get('investors', function () {
    return view('website.investors');
})->name('w-investors');

Route::get('industries', function () {
    return view('website.industries');
})->name('w-industries');

Route::get('technology', function () {
    return view('website.technology');
})->name('w-technology');

Route::get('/services/cloud-consulting', function () {
    return view('website.cloud-consulting');
})->name('w-cloud');

Route::get('/services/cloud-consulting/purchase-cloud-consultation', function () {
    return view('website.purchase-cloud-consultation');
})->name('w-purchase-cloud-consultation');

Route::get('/services/ai-consulting', function () {
    return view('website.ai-consulting');
})->name('w-ai');

Route::get('/services/robotic-consulting', function () {
    return view('website.robotic-consulting');
})->name('w-robotic');



Route::get('purchas/ai/consultation', function () {
    return view('website.purchase-ai-consultation');
})->name('purchase.ai.consultation');

Route::get('purchas/robotic/consultation', function () {
    return view('website.purchase-robotic-consultation');
})->name('purchase.robotic.consultation');
