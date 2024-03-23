<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\EmailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/Quote', function () {
    return view('Quote');
});
Route::get('/form', function () {
    return view('form');
});



Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe');
Route::post('/quote', [QuoteController::class, 'store'])->name('quote.store');
Route::post('/submit-form', [ContactFormController::class, 'submitForm'])->name('submit.form');



Route::get('/email', [EmailController::class, 'showForm'])->name('email.form');
Route::post('/email/send', [EmailController::class, 'sendEmails'])->name('email.send');
Route::post('/send-emails', [EmailController::class, 'sendEmails'])->name('send-emails');
