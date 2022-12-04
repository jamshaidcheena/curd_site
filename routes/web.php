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


Route::get('student','StudentController@index')->name('student');
Route::get('student/create','StudentController@create')->name('create.student');
Route::post('student/create','StudentController@store')->name('store.student');
Route::get('student_edit/{id}','StudentController@edit')->name('student_edit/{id}');
Route::post('student_update/{id}','StudentController@update')->name('student.update');
