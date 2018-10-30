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

Route::get('/page', function () {
    return view('page');
});

Route::get('/blog', 'blogcontroller@index');
Route::get('/blog/create', 'blogcontroller@create');
Route::get('/blog/{id}', 'blogcontroller@show');
Route::get('/blog/{id}/edit', 'blogcontroller@edit');
Route::put('/blog/{id}', 'blogcontroller@update');
Route::post('/blog/store', 'blogcontroller@store');
Route::delete('/blog/{id}','blogcontroller@delete');


