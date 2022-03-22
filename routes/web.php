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

Route::get('/', 'HomeController@index')->name('home');


    Route::get('/posts', 'PostController@index')->name('post.index');
//    Route::get('/posts/create', 'CreateController')->name('post.create');
//    Route::post('/posts', 'StoreController')->name('post.store');
    Route::get('/posts/{post}', 'PostController@show')->name('post.show');
//    Route::get('/posts/{post}/edit', 'EditController')->name('post.edit');
//    Route::patch('/posts/{post}', 'UpdateController')->name('post.update');
//    Route::delete('/posts/{post}', 'DestroyController')->name('post.delete');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware'], function () {
    Route::get('/', 'HomeController@index')->name('admin.index');
    Route::get('/posts', 'PostController@index')->name('admin.post.index');
});




//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
