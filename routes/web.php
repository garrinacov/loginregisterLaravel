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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@login');
Route::post('/login', 'HomeController@handleLogin');
Route::post('/submit', 'HomeController@handleRegister');
Route::post('/', 'HomeController@handle');
Route::get('/register', 'HomeController@register');
Route::get('/home', 'HomeController@home');
Route::get('/dashboard', 'HomeController@dashboard');
Route::get('/login', 'HomeController@logout');