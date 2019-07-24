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
    return view('welcome');
});
Route::get( '/form', function(){
	return view('form');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('incomereceipt', ['as' => 'incomereceipt', 'uses' => 'IncomeReceiptController@index']);
Route::get('incomereceipt/create', ['as' => 'incomereceipt.create', 'uses' => 'IncomeReceiptController@create']);
Route::post('incomereceipt/store', ['as' => 'incomereceipt.store', 'uses' => 'IncomeReceiptController@store']);
Route::get('incomereceipt/{id}', ['as' => 'incomereceipt.edit', 'uses' => 'IncomeReceiptController@edit']);
Route::put('incomereceipt/{id}', ['as' => 'incomereceipt.update', 'uses' => 'IncomeReceiptController@update']);
Route::delete('incomereceipt/destroy/{id}', ['as' => 'incomereceipt.destroy', 'uses' => 'IncomeReceiptController@destroy']);
