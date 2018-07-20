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

Route::get('/testing','TestController@testing1',['name'=>'submitt'])->middleware('auth');;
Route::post('/testing','TestController@testing2');

Route::get('register','UsersCustomeController@showregister');
Route::post('register','UsersCustomeController@makeregisteration');

Route::get('userlogin',['as'=>'login','uses'=>'UsersCustomeController@showuserlogin']);
Route::post('userlogin','UsersCustomeController@loginuser');

Route::get('user',function(){
    return \Auth::user();
});

Route::get('institute/add',['as'=>'addinstitute','uses'=>'InstituteController@addNewInstitute']);
