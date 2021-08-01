<?php

use Illuminate\Support\Facades\Auth;
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
    return view('guest.home');
});

//queste sono le rotte dell'autenticazione
Auth::routes();


//qua ci gestiamo le rotte admin e relativo CRUD
Route::prefix('admin')
->namespace('Admin')
->middleware('auth')
->name('admin.')
->group(function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/profile', 'ProfileController');
    Route::get('message', 'MessageController@showMessages')->name('message');
    Route::get('review', 'ReviewController@showReviews')->name('review');
    Route::get('plan', 'PlanController@showPlans')->name('plan');
    Route::get('stat', 'StatController@showStats')->name('stat');
    Route::get('/payment/sponsor/{id}', 'PaymentsController@sponsor')->name('payment.sponsor');
});


Route::get('{any?}', function(){

    return view('guest.home');

  })->where('any','.*');
