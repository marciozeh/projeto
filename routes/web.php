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


Route::resource('/users', 'UserController');
