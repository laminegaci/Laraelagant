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

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', 'Admin\DashboardControler@index')->name('dashboard');
    Route::resource('users', 'Admin\UsersController');
    Route::PUT('users/updateavatar/{id}', 'Admin\UsersController@updateavatar')->name('users.updateavatar');
    Route::resource('roles', 'Admin\RolesController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
