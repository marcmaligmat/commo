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

// Route::get('/', function () {
//     return view('home');
// });

//Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('users')->group(function(){
    Route::get('/','UsersController@index')->name('users.index');
    
});
Route::prefix('blog')->group(function(){
    Route::get('/posts/{title}','BlogController@show');
    Route::get('/create','BlogController@create');
    Route::post('/create','BlogController@store')->name('blog.store');
});