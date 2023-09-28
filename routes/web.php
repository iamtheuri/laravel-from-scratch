<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ContactController;


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
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
});
Route::get('/photography', function () {
    return view('photography');
});
// Route::get('/contact', function () {
//     return view('contact');
// });
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/light-theme', function () {
    return view('light-theme.home');
});
Route::get('/light-theme/about', function () {
    return view('light-theme.about');
});
Route::get('/light-theme/contact', function () {
    return view('light-theme.contact');
});
Route::get('/light-theme/photography', function () {
    return view('light-theme.photography');
});
