<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProgramHighlightsController;
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

// Route::get('/aboutus', function () {
//     return view('aboutus');
// });
Route::get('aboutus', [AboutUsController::class, 'index'])->name('aboutus');
Route::get('home', [HomePageController::class, 'index'])->name('home');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::get('donation', [DonationController::class, 'index'])->name('donation');
Route::get('programhighlights', [ProgramHighlightsController::class, 'index'])->name('programhighlights');
