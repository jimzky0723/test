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
Route::get('logout',function(){
    \Illuminate\Support\Facades\Session::flush();
    return redirect('/');
});

Route::get('/', 'HomeCtrl@index');
Route::get('/about', 'HomeCtrl@about');

Route::post('/validateLogin','HomeCtrl@validateLogin');

Route::get('/home','MainCtrl@index');

Route::get("/admin/home",'AdminCtrl@index');
Route::get("/user/home",'UserCtrl@index');