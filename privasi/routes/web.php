<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');
Route::post('search', 'HomeController@listLapangan');
Route::get('event', 'HomeController@event');
Route::get('about', 'HomeController@about');
Route::get('blog', 'HomeController@blog');
Route::get('contact', 'HomeController@contact');
Route::get('/detailPage/{id}', 'detailPageController@detail_Page');
Route::get('/check_out', 'detailPageController@detail_Page');
Route::get('/book', 'BookingControoler@book');
Route::resource('hamboo','HomeController');
Route::get('/home', 'HomeController@index');

//detail page list jam
Route::get('/detailPage/{idFutsal}/{idLapangan}/list','detailPageController@listLapangan');

//cek harga
Route::get('/detailPage/cekharga/{idLapangan}','detailPageController@getPrice');

//checkOut
Route::get('/checkOut', 'checkoutController@showData');

//loginController
Route::post('/doLogin','LoginController@getLogin');

Route::get('/login','LoginController@index');


//signup
Route::get('/signup','SignUpController@index');
Route::post('/signup', [
  'as' => 'post-registration', 'uses' =>   'SignUpController@doRegister'
]);

//logout
Route::get('/logout', function (){
	 Auth::logout();
	 return redirect('/');
	});



