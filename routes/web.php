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

use Illuminate\Support\Facades\Route;

Route::get('pass', function () {
    return bcrypt(123);
});
Route::get('/', 'Auth\LoginController@showLoginForm')->middleware('guest');
Route::resource('/daftar', 'DaftarController');
Route::get('/daftar/detail/{id}/{has}', 'DaftarController@detail');
//after login
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', ['middleware' => 'level:admin|operator', 'uses' => 'DashboardController@index']);
    // resource
    Route::resource('/tmpasien','TmpasienController');
    Route::resource('/obat','ObatController');
    Route::resource('/satuan','TrsatuanController');



});

Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});

Auth::routes();
