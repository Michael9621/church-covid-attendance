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



Route::get('/successfully-registered', 'MemberController@index')->name('registered');
Route::get('/', 'MemberController@create')->name('member-create');


Auth::routes([ 
    'register' => false,
    'verify' => false, // Email Verification Routes...
    ]);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', 'FrontEndController@index')->name('admin');

    Route::get('/service-excel/{id}', 'ServiceController@export')->name('service-excel');


    Route::get('/age-view', 'AgeController@index')->name('age-view');
    Route::get('/age-create', 'AgeController@create')->name('age-create');
    Route::post('/age-store', 'AgeController@store')->name('age-store');
    Route::get('/age-edit/{id}', 'AgeController@edit')->name('age-edit');
    Route::post('/age-update/{id}', 'AgeController@update')->name('age-update');
    Route::get('/age-destroy/{id}', 'AgeController@destroy')->name('age-destroy');

    Route::get('/service-view', 'ServiceController@index')->name('service-view');
    Route::get('/service-create', 'ServiceController@create')->name('service-create');
    Route::post('/service-store', 'ServiceController@store')->name('service-store');
    Route::get('/service-show/{id}', 'ServiceController@show')->name('service-show');
    Route::get('/service-edit/{id}', 'ServiceController@edit')->name('service-edit');
    Route::post('/service-update/{id}', 'ServiceController@update')->name('service-update');
    Route::get('/service-destroy/{id}', 'ServiceController@destroy')->name('service-destroy');


    Route::post('/member-store', 'MemberController@store')->name('member-store');
    Route::get('/member-edit/{id}', 'MemberController@edit')->name('member-edit');
    Route::post('/member-update/{id}', 'MemberController@update')->name('member-update');
    Route::get('/member-destroy/{id}', 'MemberController@destroy')->name('member-destroy');

});








//Route::get('/home', 'HomeController@index')->name('home');
