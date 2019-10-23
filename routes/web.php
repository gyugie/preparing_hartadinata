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
    return redirect('/dashboard');
});

Route::get('/dashboard', function() {
    return view('dashboard');
})->name('dashboard.index');

Route::get('/inventory/items_management', function() {
    return view('inventory.items_management.index');
})->name('inventory.items_management.index');

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['prefix' => 'admin', 'middleware' => 'auth.isAdmin'], function() {
        Route::get('/', 'HomeController@index')->name('home.index');
    });

    Route::group(['prefix' => 'warehouse', 'middleware' => 'auth.isStockis'], function() {
        Route::get('/', 'HomeController@index')->name('home.index');
    });
});
