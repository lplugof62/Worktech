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

Route::view('/', 'index')->name('home');
Route::view('editprofiledev', 'editprofiledev')->name('prueba');
Route::view('editprofilerec', 'editprofilerec')->name('pruebados');
Route::view('myprofiledev', 'myprofiledev')->name('pruebados');
Route::view('myprofilerec', 'myprofilerec')->name('pruebados');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
