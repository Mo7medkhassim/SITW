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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();



// Dashboard
Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard'],function () {
    // admin login page
    Route::get('/login', 'LoginController@getLogin')->name('dashboard.login');
    Route::post('/login', 'LoginController@Login')->name('dashboard.login');
    // logout
    Route::get('/logout', 'LoginController@Logout')->name('dashboard.logout');
    // dashboard home page
    Route::group(['middleware' => ['admin']],function(){
        Route::get('/home', 'HomeController@index')->name('dashboard.home');

        // blog routes
        Route::get('/blog', 'BlogController@index')->name('blog');
        Route::get('/post', 'PostController@index')->name('post');
        Route::get('/post/create', 'PostController@create')->name('post.create');
        Route::get('/post/{id}', 'PostController@show');
        
    });
});


// Site
Route::get('/blog', 'Site\BlogController@index')->name('blog');
