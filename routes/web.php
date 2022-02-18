<?php

use App\Http\Controllers\HomeController;
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

//come secondo argomento dovra esserci nome del controller + @ + nome del metodo

Route::get('/', 'HomeController@index')->name('index');

Route::get('/movies', 'HomeController@movies')->name('movies');
