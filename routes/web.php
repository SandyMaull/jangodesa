<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/','HomeController@index')->name('Home');

Auth::routes([
    'register'=>false,
    'reset' => false
    ]);

Route::get('/administrator', 'AdminController@index')->name('HomeAdmin');
Route::get('/administrator/edit', 'AdminController@editindex');
Route::get('/administrator/edit/{page}', 'AdminController@editpage')->name('HomeEdit');
Route::post('/administrator/editfile/{page}', 'AdminController@posteditpage');
Route::post('/administrator/tambah/{page}', 'AdminController@posttambahpage');
Route::post('/administrator/delete/{page}', 'AdminController@postdeletepage');