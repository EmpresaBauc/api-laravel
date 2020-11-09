<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/uploadfile', 'UploadfileController@index');
Route::post('/uploadfile', 'UploadfileController@upload');
Route::get('/login', 'App\Http\Controllers\MainController@login');
Route::post('/login/checklogin', 'App\Http\Controllers\MainController@checklogin');
Route::get('login/successlogin', 'App\Http\Controllers\MainController@successlogin');
Route::get('login/logout', 'App\Http\Controllers\MainController@logout');