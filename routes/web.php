<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();



Route::get('aboutus','AboutUsController@index')->name('aboutus');
Route::get('/','HomePageController@index')->name('landing');
Route::get('contact','ContactController@index')->name('contact');
Route::get('donation','DonationController@index')->name('donation');
Route::get('programhighlights','ProgramHighlightsController@index')->name('programhighlights');


Route::get('home','Admin\HomeController@index')->name('admin.index');
