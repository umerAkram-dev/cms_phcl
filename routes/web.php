<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/home','Admin\HomeController@index')->name('admin.index');
Route::get('/contact_us','Admin\HomeController@contact_us')->name('admin.contact_us');
Route::get('/admin/donation','Admin\HomeController@donation')->name('admin.donation');
Route::get('/admin/programhighlights','Admin\HomeController@programhighlights')->name('admin.programhighlights');
Route::post('update_content','Admin\ContentController@update')->name('admin.update_content');
