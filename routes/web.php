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

Route::get('/hoge', function () {
    return "foolish";
});

Route::get('/helo/{message}', 'HeloController@getIndex');

Route::get('hello/{message}', function($mes)
{
    return 'Hello World' . $mes;
})
->where('message', '[A-Za-z]+');


Route::get('/oth',function() {
    return view('othello');
});

Route::get('/gei',function() {
    return view('geister',['message'=>'hoge','kas'=>'hogeee']);
});