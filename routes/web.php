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

Route::get('/', 'CourseController@browse');

Route::get('/testing','TestController@testing1',['name'=>'submitt'])->middleware('auth');;
Route::post('/testing','TestController@testing2');

Route::get('register',['as'=>'register','uses'=>'UsersCustomeController@showregister']);
Route::post('register','UsersCustomeController@makeregisteration');

Route::get('userlogin',['as'=>'login','uses'=>'UsersCustomeController@showuserlogin']);
Route::post('userlogin','UsersCustomeController@loginuser');

Route::get('user',function(){
    
    return \Auth::user();
});

Route::get('institute/add',['as'=>'addinstitute','uses'=>'InstituteController@addNewInstitute']);
Route::post('institute/add','InstituteController@saveNewInstitute');

Route::get('institute/login',function(){
    return view('institutes.login');
});
Route::post('institute/login','InstituteController@institutelogin');
Route::get('institute/dashboard',['as'=>'institutedashboard','uses'=>'InstituteController@dashboard']);

Route::get('institute/courses',['as'=>'inistitutecoursees','uses'=>'InstituteController@showcourses']);
Route::post('institute/courses','InstituteController@submitcourse')->middleware('auth');

Route::get('institute/addnextcourse','InstituteController@addnextcourse')->middleware('auth');
Route::post('institute/addnextcourse','InstituteController@savenextcourse');