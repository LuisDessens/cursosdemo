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

Route::get('/', function () {
    return view('welcome.welcome');
});

Route::get('/course-detail', function () {
    return view('welcome.course-details');
})->name('course-details');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('shopping-detail', function () {
        return view('welcome.shopping-detail');
    })->name('shopping-detail'); 
});

Route::get('/home', 'HomeController@index')->name('home');
