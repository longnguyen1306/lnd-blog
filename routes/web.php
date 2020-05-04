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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'admincheck'], function () {
    Route::group(['prefix'=>'/admin'],function(){
//        Route::get('/comments','CommentController@showComment');
        Route::resource('/', 'AdminController', ['names' => 'adminRoute']);
        Route::resource('/danh-muc', 'DanhMucController', ['names' => 'danmucRoute']);
        //các route khác
    });


});


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
