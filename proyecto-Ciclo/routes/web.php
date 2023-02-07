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

Route::get('/students', 'StudentController@index') -> name('students');

Route::get('editStudent/{dni}', 'StudentController@edit') -> name('editStudent');

Route::get('updateStudent/{dni}', 'StudentController@update') -> name('updateStudent');

Route::get('/modules', 'ModuleController@index') -> name('modules');
