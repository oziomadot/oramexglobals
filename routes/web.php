<?php

use App\Http\Controllers\AcademyController;
use App\Http\Controllers\AndroidController;
use App\Http\Controllers\AnimationController;
use App\Http\Controllers\AppserviceController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\HcserviceController;
use App\Http\Controllers\IctskillsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\VpeditingController;
use App\Http\Controllers\WebhookController;
use App\Http\Controllers\WebsiteController;
use App\Livewire\AddCourses;
use App\Livewire\Lesson\AddLesson;
use App\Livewire\StudentCourses\Android;
use App\Livewire\StudentCourses\Animation;
use App\Livewire\StudentCourses\Video;
use App\Livewire\StudentCourses\Webiste;
use App\Livewire\StudentCourses\Website;
use Illuminate\Support\Facades\Route;
use App\Livewire\Trianeedetails;
use App\Livewire\Contactus;

Route::view('/home', 'home');
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
Route::get('verify/{training}',[CertificateController::class, 'show'])->name('verify');
Route::get('/verify/{training}/certificate',[CertificateController::class, 'index'])->name('certificate');
Route::get('/subscription/{training}', [IndexController::class, 'show'])->name('subscription');
Route::get('/message/email', [MessageController::class, 'email']);
Route::post('/sendemail', [MessageController::class, 'sendemail']);
Route::get('/traininglist', [PdfController::class, 'traininglist']);
Route::get('/registration', [IndexController::class, 'registration'])->name('registration');
Route::get('/estate', [IndexController::class, 'estate'])->name('estate.index');



// NEW URL

Route::get('/aboutus', [IndexController::class, 'aboutus'])->name('aboutus');
Route::get('/loginhc', [IndexController::class, 'aboutus'])->name('loginhc');

//Livewire Url

Route::get('/contactus', Contactus::class)->name('contactus');




// whatsapp
Route::get('/webhooks', [WebhookController::class, 'verify']);
Route::post('/webhooks', [WebhookController::class, 'handleWebhook']);

Route::post('/whatsapp-webhooks', [WebhookController::class, 'handle']);


Route::resource('training', TrainingController::class);
Route::resource('website', WebsiteController::class);
Route::resource('academy', AcademyController::class);
Route::resource('certificate', CertificateController::class);
Route::resource('animation', AnimationController::class);
Route::resource('android', AndroidController::class);
Route::resource('vpediting', VpeditingController::class);
Route::resource('ictskills', IctskillsController::class);
Route::resource('appservice', AppserviceController::class);
Route::resource('hcservice', HcserviceController::class);

// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


        // Shared Routes (Accessible by both Staff )
Route::middleware([ 'role:staff'])->group(function () {
    // livewire route

Route::get('/trianeedetails', Trianeedetails::class);


});

    // Shared Routes (Accessible by both Staff & instructors)
Route::middleware([ 'role:staff,instructor'])->group(function () {

    // livewire routes
    Route::get('/addLesson', AddLesson::class)->name('addLesson');

    // laravel routes


});

// Shared Routes (Accessible by both Staff & Students)
Route::middleware(['role:student,instructor,staff'])->group(function () {
    Route::get('/profile', function () {
        return 'User Profile Page';
    })->name('user.profile');

// livewire routes
    Route::get('/addCourses', AddCourses::class)->name('addCourses');
    Route::get('/StudentCourses/website', Website::class)->name('website.student');
    Route::get('/StudentCourses/android', Android::class)->name('android.student');
    Route::get('/StudentCourses/animation', Animation::class)->name('animation.student');
    Route::get('/StudentCourses/video', Video::class)->name('video.student');

});
Route::middleware(['group-name'])->group(function () {
    // ...
});


require __DIR__.'/auth.php';
