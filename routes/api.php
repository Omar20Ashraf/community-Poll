<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('polls','Api\PollController@index');
Route::get('polls/{poll}','Api\PollController@show');
Route::post('polls','Api\PollController@store');
Route::put('polls/{poll}','Api\PollController@update');
Route::delete('polls/{poll}','Api\PollController@delete');