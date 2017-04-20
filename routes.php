<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('showallstu/{classNum}' , 'StuInfo\MainController@showAllStu');

Route::get('showstuinfo/{stuNum}' , 'StuInfo\MainController@showStuInfo');

Route::get('insert' , 'StuInfo\MainController@getInfo');

Route::get('search/{key}' , 'StuInfo\MainController@search');