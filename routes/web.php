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

Route::group(['prefix' => '/api/v1'], function(){
    // aqui van todas las rutas que react necesita ejecutar
    // de manera asincrona
    Route::get('/', function(){
        return 'API Rest Service';
    });

});

Route::get('/{route?}/{uri?}/{anotherUri?}', function(){
    return view('main');
});

