<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\WebhookController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Trianeedetails;

Route::view('/', 'pages.index')->name('home');
Route::view('/cleaning', 'pages.cleaningservices')->name('cleaning');
Route::view('/ogtv', 'pages.tv')->name('tv');
Route::view('/houseandland', 'pages.houseandland')->name('houseandland');
Route::view('/hotel', 'pages.hotel')->name('hotel');
Route::view('/animation', 'pages.animation')->name('animation');
Route::view('/web', 'pages.web')->name('web');
Route::view('/caregiving', 'pages.caregiving')->name('caregiving');
Route::view('/nanny', 'pages.nanny')->name('nanny');
Route::view('/building', 'pages.building')->name('building');
Route::get('verify/{trainee}',[CertificateController::class, 'show'])->name('verify');
Route::get('/verify/{trainee}/certificate',[CertificateController::class, 'index'])->name('certificate');

// livewire route

Route::get('/trianeedetails', Trianeedetails::class);

// whatsapp
Route::get('/webhooks', [WebhookController::class, 'verify']);
Route::post('/webhooks', [WebhookController::class, 'handleWebhook']);

Route::post('/whatsapp-webhooks', [WebhookController::class, 'handle']);


Route::resource('training', TrainingController::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');




require __DIR__.'/auth.php';
