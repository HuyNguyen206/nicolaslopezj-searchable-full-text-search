<?php

use App\FullTextSearch;
use App\Http\Controllers\FullTextSearchController;
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
Route::post('searches/full-text','FullTextSearchController@searchFullText')->name('search-full-text');
Route::post('searches/normal','FullTextSearchController@searchNormal')->name('normal-search');
Route::resource('searches', 'FullTextSearchController');

Route::get('/', function () {
    return view('welcome');
});
