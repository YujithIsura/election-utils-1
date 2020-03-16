<?php


Route::get('/', function () {
    return view('index');
});
Route::get('index', function () {
    return view('index');
});


// ----------------------------------------------------
Route::get('/pe9', 'FormController@viewPE9');
Route::get('/pe10', 'FormController@viewPE10');
Route::get('/pe11', 'FormController@viewPE11');
Route::get('/pe10x1', 'FormController@viewPE10X1');
Route::get('/pe30x1x2', 'FormController@viewPE30');

Route::get('/getDistrict', 'FormController@getDistrict');
Route::get('/getBallot', 'FormController@getBallot');

