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
Route::view('style_properties','style_properties');
Route::view('css_grid_layout','css_grid_layout');
Route::view('css_grid_layout_2','css_grid_layout_2');
Route::view('css_grid_layout_3','css_grid_layout_3');
Route::view('bootstrap_grid','bootstrap_grid');
Route::view('t1','table');
Route::view('t','test');
Route::view('javascript_1','javascript_1');
Route::view('js-test','js-test');
Route::view('iftest','js-if-else');
Route::view('js-1','js-test1');
Route::view('js-2','js-2');
Route::view('loops','loops');
Route::view('else_if_grade','else_if_grade');
Route::view('function_largest_second_last','function_largest_second_last');
Route::view('fn-2','function2');
Route::view('content_changed_and_color','content_changed_and_color');
Route::view('answer','answer');
Route::view('switch','switch');
Route::view('dom3','dom_hw');
Route::view('calculator','calculator');
Route::view('check_password_strong_and_weak','check_password_strong_and_weak'); 
Route::view('remove_item_from_list','remove_item_from_list');
Route::view('form','form');
Route::view('js_string','js_string');
Route::view('js_string_word count','js_string_word count');
Route::view('js_string_hw','js_string_hw');



 
