<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();


// Dashboard
Route::prefix('dashboard')->name('dashboard.')->group( function(){
    Route::get('/home', 'HomeController@index')->name('home'); //(dashboard/home) for home page

    Route::get('/blog', 'Dashboard\BlogController@index')->name('blog');
});
// Site
Route::get('/blog', 'Site\BlogController@index')->name('blog');
