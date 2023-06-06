<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


   
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('gymIndividual/{Gym_id}', 'App\Http\Controllers\GymController@show');

Route::get('/gymAll','App\Http\Controllers\GymController@list');

Route::get('/gyms/create', 'App\Http\Controllers\GymController@create');

Route::post('storeGym',  'App\Http\Controllers\GymController@store');