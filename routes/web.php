<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterbypopupController;
use App\Http\Controllers\TourAddOnsController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

// Login
Auth::routes();
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::post('register-popup', [RegisterbypopupController::class, 'registerpopup'])->name('register.popup');
Route::group([
    'middleware' => 'auth'
], function(){
    Route::post('/checkout', [App\Http\Controllers\OrderController::class, 'checkout'])->name('order.checkout');
    Route::get('/invoice/{id}', [OrderController::class, 'invoice']);
    Route::resource('tour/addons', TourAddOnsController::class);
    Route::get('tour/dashboard', [App\Http\Controllers\TourController::class, 'TourDashboard'])->name('tour.dashboard');
    Route::resource('dashboard', DashboardController::class);
});

Route::get('admin/order-tour', [OrderController::class, 'ordertour'])->name('order.listtour');

Route::resource('/', HomeController::class);

Route::resource('tour', TourController::class);

Route::resource('rental', RentalController::class);

Route::resource('partner', PartnerController::class);

Route::resource('about', AboutController::class);
