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

Route::get('MataKuliah/create', 'MataKuliahController@create')->name('MataKuliah.create');
Route::get('MataKuliah/{MataKuliah}', 'MataKuliah@show')->name('MataKuliah.show');
