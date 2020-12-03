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
// Homepage Route
    Route::get('/','HomeController@index')->name('Home');
    Route::get('/publikasi', 'HomeController@publikasi');
    Route::get('/publikasi/berita','HomeController@berita');
    Route::get('/publikasi/berita/{id}','HomeController@beritadetails');
// Auth Route
    Auth::routes([
        'register'=>false,
        'reset' => false
    ]);
// Dashboard Admin Route
    Route::get('/administrator', 'AdminController@index')->name('HomeAdmin');
// Home Module Route
    Route::get('/administrator/edit/{page}', 'TampilanController@editpage')->name('HomeEdit');
    Route::post('/administrator/editfile/{page}', 'TampilanController@posteditpage');
    Route::post('/administrator/tambah/{page}', 'TampilanController@posttambahpage');
    Route::post('/administrator/delete/{page}', 'TampilanController@postdeletepage');


// Publikasi Module Route
    // Berita
    Route::get('/administrator/publikasi/berita','PublikasiController@berita_index')->name('publikasi');
    Route::get('/administrator/publikasi/berita/add','PublikasiController@berita_add');
    Route::get('/administrator/publikasi/berita/unpub/{id}','PublikasiController@berita_unpublish');
    Route::get('/administrator/publikasi/berita/pub/{id}','PublikasiController@berita_publish');
    Route::get('/administrator/publikasi/berita/edit/{id}','PublikasiController@berita_edit');
    Route::get('/administrator/publikasi/berita/del/{id}','PublikasiController@berita_delete');
    Route::post('/administrator/publikasi/berita/search','PublikasiController@berita_search');
    Route::post('/administrator/publikasi/berita/add_post','PublikasiController@berita_add_post');
    Route::post('/administrator/publikasi/berita/edit_post','PublikasiController@berita_edit_post');
