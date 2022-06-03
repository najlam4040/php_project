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

Route::view('/','welcome')->name('welcome');
Route::view('w','new')->name('new');
Route::view('a', 'index')->name('index');
Route::view('na','stylepage')->name('stylepage');
Route::view('n','css');
Route::view('s1','cssgrid');
Route::view('g1','grid1');
Route::view('g2','grid2');
Route::view('n1','bootstrap');
Route::view('t1','table'); 
 
