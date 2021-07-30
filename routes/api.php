<?php

use App\Http\Controllers\Api\DoctorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::namespace('Api')
    ->name('api.')
    ->group(function(){
        Route::get('doctors', 'DoctorController@index')->name('doctors');
        Route::get('doctors/{id}', 'DoctorController@show')->name('show')->where(['id'=>'[0-9]+']);
        Route::get('doctors/specs','SpecController@index')->name('specs');
        Route::get('doctors/all', 'DoctorController@alldoctors')->name('alldocs');
        Route::get('specializations/{spec}','DoctorController@getDocSpec')->name('docWithSpec');
        Route::resource('review','ReviewController');
        Route::resource('message','MessController');
    });


