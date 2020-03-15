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
    return view('index');
});
Route::get('index', function () {
    return view('index');
});

Route::get('pe9', function () {
    return view('pe9');
});

Route::get('pe10', function () {
    return view('pe10');
});
Route::get('pe30x1x2', function () {
    return view('pe30x1x2');
});

Route::get('pe11', function () {
    return view('pe11');
});
Route::get('pe10x1', function () {
    return view('pe10x1');
});


Route::get('layout', function () {
    return view('layout');
});

Route::get('pe9a', function () {
    return view('pe9a');
});


#routes/web.php

