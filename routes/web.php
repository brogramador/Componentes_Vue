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

Route::get('/caso2', function () {
    return view('caso2');
});
Route::get('/caso1', function () {
    return view('caso1');
});

Route::get('/caso3', function () {
    return view('caso3');
});
Route::get('/caso4', function () {
    return view('caso4');
});
