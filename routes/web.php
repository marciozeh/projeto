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
//    $users = \DB::table('users')
//        ->get();
//    $users = \App\User::all();
//    dd($users);
    return view('welcome');
});

//users
//Route::get('/users', "UserController@index");
//
//Route::get('/users/{id}', "UserController@show");
//
//Route::post('/users', 'UserController@save');

//Route::view('/view', 'view', ['name' => 'teste'])->middleware('test');

//Route::resource('/users', 'UserController')->middleware('test');


Route::prefix('admin')->group(function(){

    Route::get('users', 'Admin\\UserController@index')->name('user.index');
    Route::get('users/new', 'Admin\\UserController@new')->name('user.new');
    Route::post('users/store', 'Admin\\UserController@store')->name('user.store');
    Route::get('users/edit/{user}', 'Admin\\UserController@edit')->name('user.edit');
    Route::post('users/update/{id}', 'Admin\\UserController@update')->name('user.update');
    Route::post('users/remove/{id}', 'Admin\\UserController@delete')->name('user.remove');

    });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
