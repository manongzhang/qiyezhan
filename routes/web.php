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


Route::get("/register","info\InfoController@register");
Route::any("/doregister","info\InfoController@doregister");

Route::any("/addcard","info\InfoController@addcard")->middleware("checkLogin");
Route::any("/getuserid","info\InfoController@getuserid");
Route::any("/douserinfo","info\InfoController@douserinfo");

Route::any("/goodsadd","info\InfoController@goodsadd");
Route::any("/addgoods","info\InfoController@addgoods");


Route::any("/goodslist","info\InfoController@goodslist");
Route::any("/showgoods","info\InfoController@showgoods");