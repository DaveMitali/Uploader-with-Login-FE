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
Route::get('/', 'FileUploadController@uploadForm');
Route::post('/response',array('uses'=>'FileUploadController@uploadSubmit'));
Route::post('/view_files', 'FileUploadController@view_table');
Route::get('/download/{file_param}', 'FileUploadController@downloader');
Route::get('/lr', 'FileUploadController@lr');
Route::get('login', array('uses' => 'FileUploadController@showLogin'));
Route::get('register', array('uses' => 'FileUploadController@showRegister'));
Route::post('login', array('uses' => 'FileUploadController@doLogin'));
Route::post('register', array('uses' => 'FileUploadController@doLogin'));
Auth::routes();
Route::post('/home','FileUploadController@showHome');
Route::get('/home', 'HomeController@index')->name('home');
