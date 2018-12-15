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
})->name('index');

Route::post('/makeevent', 'EventController@simpan')->name('makeevent');

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

Route::get('/home_user', 'UserController@index')->name('user.home');
Route::group(['prefix' => 'user'], function () {

});

Route::get('makeevent', function (){
    return view('makeEvent');
});

//Route::get('/login', 'UserController@login');
//Route::post('/loginPost', 'UserController@loginPost');
//Route::get('/register', 'UserController@register');
//Route::post('/registerPost', 'UserController@registerPost');
//Route::get('/logout', 'UserController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/aa', 'HomeController@create')->name('popup');

//Route::get('login', 'HomeController@lamanlogin')->name('login');
//Route::post('login', 'HomeController@formlogin');

//untuk UserController
Route::resource('user', 'UserController');