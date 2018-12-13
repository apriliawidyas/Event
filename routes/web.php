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

Route::get('/', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/home_user', function () {
    return view('home_user');
});

Route::get('regisAdmin', function (){
    return view('registerAdmin');
});
Route::get('admin', 'AdminController@index');
Route::get('admin/event', 'EventController@index')->name('event.index');
Route::get('admin/event/create', 'EventController@create')->name('event.create');
Route::post('admin/event/store', 'EventController@store')->name('event.store');
Route::put('admin/event/edit/', 'EventController@store')->name('event.update');
Route::get('admin/event/destroy', 'EventController@destroy')->name('event.destroy');

Route::get('admin/tag', 'TagController@index')->name('tag.index');
Route::get('admin/tag/create', 'TagController@create')->name('tag.create');
Route::post('admin/tag/store', 'TagController@store')->name('tag.store');
Route::put('admin/tag/edit/', 'TagController@store')->name('tag.update');
Route::get('admin/tag/destroy', 'TagController@destroy')->name('tag.destroy');

Route::get('admin/category', 'CategoryController@index')->name('category.index');
Route::get('admin/category/create', 'CategoryController@create')->name('category.create');
Route::post('admin/category/store', 'CategoryController@store')->name('category.store');
Route::put('admin/category/edit/', 'CategoryController@store')->name('category.update');
Route::get('admin/category/destroy', 'CategoryController@destroy')->name('category.destroy');


Route::get('/home_user', 'User@index');
//Route::get('/login', 'User@login');
//Route::post('/loginPost', 'User@loginPost');
//Route::get('/register', 'User@register');
//Route::post('/registerPost', 'User@registerPost');
//Route::get('/logout', 'User@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
