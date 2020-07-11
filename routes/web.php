<?php

use App\Http\Controllers\PostController;
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
// Route::resource('admin','UniversityController');
Route::resource('public','PublicController');


Route::group(['namespace' => 'User'], function () {
    Route::get('user/post', 'PostController@index')->name('post');
});

Route::group(['namespace' => 'Admin'], function () {
    Route::get('admin/home',function (){
        return view('admin/home');
    });
    Route::resource('admin/post', 'PostController');
    Route::resource('admin/tag', 'TagController');
    Route::resource('admin/catagory', 'CatagoryController');
});
