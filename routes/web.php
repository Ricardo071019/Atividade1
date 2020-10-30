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


Route::get('mestre','App\Http\Controllers\FormController@mostrarForm')->name('mostrar.form');
Route::get('viagens','App\Http\Controllers\FormController@viagens')->name('viagens');
Route::get('contacto','App\Http\Controllers\FormController@contacto')->name('contacto');
Route::get('Agências','App\Http\Controllers\FormController@agências')->name('Agências');




