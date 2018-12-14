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
use App\event;
Route::get('/', function () {
        $events= event::all();
        return view('index', [
            'events' => $events
        ]);
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
Route::get('admin', 'AdminController@index')->name('admin.home');

Route::group(['prefix' => 'admin'], function () {
    Route::resource('event', 'EventController');
    Route::resource('tag', 'TagController');
    Route::resource('category', 'CategoryController');
});


Route::get('/home_user', 'User@index')->name('user.home');
Route::group(['prefix' => 'user'], function () {

});

//Route::get('/login', 'User@login');
//Route::post('/loginPost', 'User@loginPost');
//Route::get('/register', 'User@register');
//Route::post('/registerPost', 'User@registerPost');
//Route::get('/logout', 'User@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
