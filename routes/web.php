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
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware'=> ['can:isAdmin']],function(){
	Route::get('/home', 'HomeController@index');
	Route::get('kategori', 'CategoryController@index')->name('daftarkategori');

});
//Route::get('/home', 'HomeController@index')->middleware('can:isAdmin')->name('home');


//Route::get('/home', 'HomeController@index')->middleware('can:isUser')->name('home');

