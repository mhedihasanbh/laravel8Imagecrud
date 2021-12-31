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

Route::get('/',[
    'uses'=>'App\Http\Controllers\ImageCrudController@index',
    'as'=>'Home'
]);
Route::post('/store',[
    'uses'=>'App\Http\Controllers\ImageCrudController@store',
    'as'=>'store'
]);
Route::get('/dataView',[
    'uses'=>'App\Http\Controllers\ImageCrudController@dataviwe',
    'as'=>'dataView'
]);
Route::get('/dataEdit/{id}',[
    'uses'=>'App\Http\Controllers\ImageCrudController@dataedit',
    'as'=>'dataEdit'
]);
Route::post('/update/{id}',[
    'uses'=>'App\Http\Controllers\ImageCrudController@dataupdate',
    'as'=>'update'
]);
Route::get('/dataDelete/{id}',[
    'uses'=>'App\Http\Controllers\ImageCrudController@datadelete',
    'as'=>'dataDelete'
]);




