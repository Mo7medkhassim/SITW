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

Route::group([
    'prefix' => LaravelLocalization::setLocale(),

    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    //     return view('welcome');
    // });

    Auth::routes();



    // Dashboard
    Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard'], function () {
        // admin login page
        Route::get('/login', 'LoginController@getLogin')->name('dashboard.login');
        Route::post('/login', 'LoginController@Login')->name('dashboard.login');
        // logout
        Route::get('/logout', 'LoginController@Logout')->name('dashboard.logout');
        // dashboard home page
        Route::group(['middleware' => ['admin']], function () {
            Route::get('/home', 'HomeController@index')->name('dashboard.home');

            // blog routes
            Route::get('/blog', 'BlogController@index')->name('blog');

            // Post routes
            Route::get('/post', 'PostController@index')->name('post');
            Route::get('/post/create', 'PostController@create')->name('post.create');
            Route::post('/post', 'PostController@store')->name('post.store');
            Route::get('/post/{id}', 'PostController@show');
            Route::delete('/post/{id}/delete', 'PostController@destroy')->name('post.delete');   
            
            // Category routes
            Route::get('/category', 'CategoryController@index')->name('category');
            Route::get('/category/create', 'CategoryController@create')->name('category.create');
            Route::post('/category', 'CategoryController@store')->name('category.store');
            Route::get('/category/{id}', 'CategoryController@show');
            Route::delete('/category/{id}/delete', 'CategoryController@destroy')->name('category.delete');   

             // Tag routes
             Route::get('/tag', 'TagController@index')->name('tag');
             Route::get('/tag/create', 'TagController@create')->name('tag.create');
             Route::post('/tag', 'TagController@store')->name('tag.store');
             Route::get('/tag/{id}', 'TagController@show');
             Route::delete('/tag/{id}/delete', 'TagController@destroy')->name('tag.delete');   
        });
    });
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
});

// Site
Route::get('/blog', 'Site\BlogController@index')->name('blog');
