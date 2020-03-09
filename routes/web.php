<?php

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

Route::get('/grid/{category}', 'GalleryController@grid');

Route::resource('/', 'HomeController');
Route::get('schedule', 'HomeController@schedule')->name('schedule');
Route::post('schedule', 'HomeController@schedule')->name('schedule');


Route::get('/adminschedule', 'BookingController@schedule')->name('adminschedule');
Route::post('/adminschedule', 'BookingController@schedule')->name('adminschedule');
Route::post('/allbookings', 'BookingController@allBookings')->name('bookings.allbookings');

Route::get('/gallery', 'GalleryController@gallery')->name('gallery');
Route::resource('/admin_gallery', 'GalleryController');
Route::resource('admingallery', 'GalleryController');

Route::resource('/services', 'ServicesController');
Route::resource('/trainers', 'TrainersController');
Route::get('/outdoor_services', 'ServicesController@outdoor');

//Route::resource('/admin', 'AdminController');
Route::post('/bulletbooking', 'BookingController@bulletbooking');
Route::resource('/coupons', 'CouponController');
Route::resource('/accounts', 'AccountController');

Route::post('/couponCheck', 'CouponController@couponCheck')->name('couponCheck');
Route::get('/events', 'EventsController@index');
Route::get('/teambuilding', 'EventsController@teambuilding');
Route::get('/blog', 'EventsController@blog');
Route::get('/dec-2019-coachs-corner-tipwatipwa', 'EventsController@dec');
Route::get('/jan-2020-coachs-corner-tipwatipwa', 'EventsController@jan');
Route::get('/feb-2020-coachs-corner-tipwatipwa', 'EventsController@feb');

Route::resource('/schedule_editor', 'ClassEventsController');





//mpesa <>whatsap send receive

Route::resource('/send', 'SendController');
Route::post('/respond', 'RespondController@index');
Route::get('/respond', 'RespondController@index');

//Route::get('/respond', 'RespondController@index');

Route::post('/zlDprOsOdrlDkaVSdd2ipGZcpuDH8a', 'MpesaController@index');
Route::get('/zlDprOsOdrlDkaVSdd2ipGZcpuDH8a', 'MpesaController@index');
//Route::get('/5df1imvhke', 'MpesaCallbackController@mpes');
//Route::post('/5df1imvhke', 'MpesaCallbackController@mpesa');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

	Route::resource('schedule_editor', 'ClassEventsController');
	Route::get('classbookings/{id}', 'BookingController@classBookings');
	//Route::resource('bookings', 'BookingController');
});
