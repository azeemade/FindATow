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

Route::get('/', 'MainController@index');
Route::get('index', 'MainController@index');
Route::get('account', 'MainController@account');
Route::get('show', 'MainController@showEstimator');
Route::post('contact-us/successful', 'MainController@homepageContact');
Route::get('confirmationPageMain', 'MainController@Confirmation');
Route::get('about-us', 'MainController@about_us');
Route::get('careers', 'MainController@careers');
Route::get('IR', 'MainController@investorRelations');
Route::get('TandC', 'MainController@termsCondition');

Auth::routes(['verify' => true]);
Route::get('home', 'HomeController@homeOrderTow')->name('home');
Route::get('orderTow/{id}', 'HomeController@getOrderTow')->name('orderTow');
Route::get('contactDashboard/{id}', 'HomeController@contactDashboard');
Route::get('estimateDashboard/{id}', 'HomeController@estimateDashboard');
Route::get('profile/{id}', 'HomeController@profile')->name('profile');
Route::patch('update/{id}', 'HomeController@update');
Route::get('towOrder/successful', 'HomeController@postOrderTow');
Route::post('contact-db', 'HomeController@postcontact');
Route::get('confirmationPage/{id}', 'HomeController@Confirmation');
Route::get('showPrice', 'HomeController@showPrice');
