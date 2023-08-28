<?php

use App\Http\Controllers\FrontEndController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontEndController::class, 'index'])->name('home');
Route::get('/about-us', [FrontEndController::class, 'about'])->name('about');

Route::get('/apartment/{slug}', [FrontEndController::class, 'apartmentInner'])->name('apartment.inner');
Route::get('/completed-apartments', [FrontEndController::class, 'CompletedApartment'])->name('completed.apartment');
Route::get('/ongoing-apartments', [FrontEndController::class, 'OngoingApartment'])->name('ongoing.apartment');

Route::get('/news', [FrontEndController::class, 'news'])->name('news');
Route::get('/news/{slug}', [FrontEndController::class, 'newsInner'])->name('news.inner');

Route::get('/contact-us', [FrontEndController::class, 'contact'])->name('contact');
Route::post('/contact-us', [FrontEndController::class, 'contactMail'])->name('contact.mail');
Route::get('/schedule-a-visit', [FrontEndController::class, 'scheduleVisit'])->name('schedule.vist');
Route::post('/schedule-a-visit', [FrontEndController::class, 'scheduleVisitCreate'])->name('schedule.vist.create');


Route::get('/link', function () {
    Artisan::call('storage:link');
});

Route::get('/cls', function () {
    Artisan::call('optimize:clear');
});
