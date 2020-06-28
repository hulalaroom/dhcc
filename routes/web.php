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

Route::get('/', function () {
    return view('welcome');
});

//get请求，结果如下图
Route::get('basic1',function (){
    return 'Hello World';
  });
  //post请求，这里不展示结果图
  Route::post('basic2',function (){
    return 'Post';
  });