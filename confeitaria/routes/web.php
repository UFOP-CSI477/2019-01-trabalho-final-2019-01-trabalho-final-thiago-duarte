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
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('admin', function () {
    return view('admin');
});

Route::get('adminlogin', function () {
    return view('adminlogin');
});

Route::get('monte', function () {
    return view('monte');
});

Route::get('register', function () {
    return view('register');
});

Route::get('login', function () {
    return view('login');
});

Route::get('pedidos', function () {
    return view('pedidos');
});

Route::get('clientes', function () {
    return view('clientes');
});

Route::get('produtos', function () {
    return view('produtos');
});

Route::get('addproduto', function () {
    return view('addproduto');
});

Route::get('novologin', function () {
    return view('novologin');
});

Route::post('loginadministrador', 'loginadminController@index');
Route::post('login', 'loginadminController@logincliente');
