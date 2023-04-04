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

Route::get('/test', 'App\Http\Controllers\TestController@index');
Route::get('/test/{name}', 'App\Http\Controllers\TestController@greeting');

Route::resource('/customer', 'App\Http\Controllers\CustomerController');

Route::get('/', function () {
    return view('welcome');
})->name('hi');

Route::get('/msg/{name_param}/center/{last_name_param}/last', function ($name_param, $last_name_param) {
    $data = [
                'name'=> $name_param,
                'last_name'=> $last_name_param
            ];
    return $data;
});

Route::get('/other/{name?}', function ($name = 'Cliente no enviado') {
    return '<h1>Data: '.$name.' </h1>';
})->where('name','[A-Za-z]+');

Route::get('/other_route', function () {
    return redirect()->route('hi');
});