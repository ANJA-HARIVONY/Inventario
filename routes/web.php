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

$controller_path = 'App\Http\Controllers';

// Main Page Route

// pages


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
$controller_path = 'App\Http\Controllers';

    Route::get('/', $controller_path . '\pages\HomePage@index')->name('pages-home');
    //Route::get('/page-2', $controller_path . '\pages\Page2@index')->name('pages-page-2');

    // users
    Route::get('/users',  $controller_path . '\pages\Users@index')->name('pages-users');
    Route::get('/users/create', $controller_path . '\pages\users@create')->name('pages-users-create');
    Route::post('/users/store', $controller_path . '\pages\users@store')->name('pages-users-store');
    Route::get('/users/edit/{user_id}',  $controller_path . '\pages\Users@edit')->name('pages-users-edit');
    Route::post('/users/update',  $controller_path . '\pages\Users@update')->name('pages-users-update');
    Route::get('/users/destroy/{user_id}',  $controller_path . '\pages\Users@destroy')->name('pages-users-destroy');

    // types
    Route::get('/types',  $controller_path . '\typeController@index')->name('types');
    Route::get('/types/create', $controller_path . '\typeController@create')->name('types-create');
    Route::post('/types/store', $controller_path . '\typeController@store')->name('types-store');
    Route::get('/types/edit/{types_id}',  $controller_path . '\typeController@edit')->name('types-edit');
    Route::post('/types/update',  $controller_path . '\typeController@update')->name('types-update');
    Route::get('/types/destroy/{types_id}',  $controller_path . '\typeController@destroy')->name('types-destroy');
});
