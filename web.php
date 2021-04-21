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



Route::get('/index', function () {
    return view('index');
});
Route::get('/kompany', function () {
    return view('kompany');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/zakazvubor', function () {
    return view('zakazvubor');
});
Route::get('/account_avtor', function () {
    return view('account_avtor');
});

Route::get('/account_1',
//    'App\Http\Controllers\MainController@index',
//    'App\Http\Controllers\MainController@a',
    'App\Http\Controllers\MainController@index'  );


Route::get('/account_2', function () {
    return view('account_2');
});

Route::get('/account_3', function () {
    return view('account_3');
});

Route::get('/account_vibor', function () {
    return view('account_vibor');
});




Route::get('/gotoviesborki', function () {
    return view('gotoviesborki');
});
Route::get('/podvarzhdenie', function () {
    return view('podvarzhdenie');
});

Route::get('/proverka', function () {
    return view('proverka');
});
Route::get('/proverka2', function () {
    return view('proverka2');
});
Route::get('/sam', function () {
    return view('sam');
});

