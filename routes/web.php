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
Route::resource('kamera','KameraController');
Route::resource('pembayaran','PembayaranController');
Route::resource('penyewa','PenyewaController');

Route::get('/penyewa','PenyewaController@index');
Route::post('/upfoto','PenyewaController@store')->name('upfoto');

Route::get('/pembayaran','PembayaranController@index');
Route::post('/bayar','PembayaranController@store')->name('bayar');
