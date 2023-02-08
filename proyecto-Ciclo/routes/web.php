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

// Students
Route::get('/students', 'StudentController@index') -> name('students');

Route::get('editStudent/{dni}', 'StudentController@edit') -> name('editStudent');

Route::get('updateStudent/{dni}', 'StudentController@update') -> name('updateStudent');

Route::post('deleteStudent', 'StudentController@deleteStudent')->name('deleteStudent');

Route::get('/viewStudent/{dni}', 'StudentController@viewStudent') -> name('viewStudent');

Route::get('createStudent', 'StudentController@create') -> name('createStudent');

Route::get('makeStudent', 'StudentController@make') -> name('makeStudent');


// Modules
Route::get('/modules', 'ModuleController@index') -> name('modules');

Route::get('updateModule/{id}', 'ModuleController@update') -> name('updateModule');

Route::get('editModule/{id}', 'ModuleController@edit') -> name('editModule');

Route::get('/viewMoudule/{dni}', 'ModuleController@viewModule') -> name('viewModule');

Route::post('deleteModule', 'ModuleController@deleteModule')->name('deleteModule');

Route::get('createModule', 'ModuleController@create') -> name('createModule');

Route::post('makeModule', 'ModuleController@make') -> name('makeModule');

