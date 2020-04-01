<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/', 'RootController@index');

Auth::routes();

Route::get('/message_root','MessageController@create');
Route::post('/message_root','MessageController@store')->name('personal_message_to_admin');

Route::get('/admin','AdminController@add_admin');

Route::post('/admin','RegisterAdminController@create')->name('admin_register');

Route::get('/messages', 'MessageController@index');

Route::get('/profile','ProfileController@index');

Route::post('/profile','ProfileController@update', Auth::id())->name('update_profile');

Route::get('/send','AdminController@send_message');

Route::post('/send', 'AdminController@send')->name('send_message');

Route::get('/add', 'AdminController@create');

Route::post('/add', 'AdminController@store')->name('add_student_phone_number');


Route::get('/root', 'RootController@index')->name('root');

Route::get('/lecturer', 'LecturerController@index')->name('lecturer');

Route::get('/course_rep', 'Course_Rep_Controller@index')->name('course_rep');