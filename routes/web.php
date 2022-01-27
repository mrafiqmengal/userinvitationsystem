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

Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', 'App\Http\Controllers\UsersController@index')->name('users');
Route::get('/users/invite', 'App\Http\Controllers\UsersController@invite_view')->name('invite_view');
Route::post('/users/invite', 'App\Http\Controllers\UsersController@process_invites')->name('process_invite');
Route::get('/registration/{token}', 'App\Http\Controllers\UsersController@registration_view')->name('registration');
Route::POST('/registration', 'App\Http\Controllers\Auth\RegisterController@register')->name('accept');
Route::get('/user/verifyform/{token}', 'App\Http\Controllers\UsersController@verifyform')->name('verifyform');
Route::post('/user/verify/{token}', 'App\Http\Controllers\Auth\RegisterController@verifyUser')->name('verifyuser');
