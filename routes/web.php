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
    return view('pages.landing');
});

Route::prefix('admin')
    ->middleware(['auth','admin'])
    ->namespace('Admin')
    ->group(function () {
        Route::get('/', 'DashboardController@index')->name('Dashboard');

        Route::resource('penduduk','UserController');
        Route::resource('fam','FamController');
        Route::resource('birth','BirthController');
        Route::resource('dead','DeadController');
        Route::resource('migrasi','MoveController');
        Route::resource('surat','MailController');
        Route::get('/surat/download/{id}','MailController@download')->name('downloadfile');
    });
        Route::get('/profil/{id}','ProfilController@profil');
        Route::resource('suratwarga', 'SuratWargaController');       
        Route::get('penduduk/export','PdfController@export')->name('export');
        Route::get('penduduk/excelpenduduk','PdfController@excel')->name('excel');
        Route::get('fam/pdffam','PdfController@pdffam')->name('pdffam');
        Route::get('fam/excelfam', 'PdfController@excelfam')->name('excelfam');
        Route::get('birth/pdfbirth','PdfController@pdfbirth')->name('pdfbirth');
        Route::get('surat/pdfsurat','PdfController@pdfsurat')->name('pdfsurat');
        Route::get('migrasi/pdfmigrasi','PdfController@pdfmove')->name('pdfmove');
        Route::get('kematian/pdfkematian','PdfController@pdfdead')->name('pdfdead');

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');