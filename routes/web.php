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

/*
Route::get('/', function () {
    return view('user.transaksi');
});
Route::resource('kamera','KameraController');
*/

route::get('/', 'KameraController@index');

//route::get('/transaksi', 'TransaksiController@index');
route::get('/pembayaran', 'PembayaranController@index');
route::get('/transaksi', 'CartsController@index');
route::delete('/{cart}','CartsController@destroy');
route::get('/{cart}/edit', 'CartsController@edit');
route::patch('/{cart}', 'CartsController@update');
