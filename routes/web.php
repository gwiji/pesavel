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

Route::get('/', 'MpesaController@index');
Route::get('/stk', 'MpesaController@stk');
Route::get('/register', 'MpesaController@register');
Route::post('/stk_push', 'MpesaController@stk_push');

Route::get('/stk_simulate', 'MpesaController@stk_simulate');
Route::post('/stk_simulation', 'MpesaController@stk_simulation');

Route::post('/ValidationURL', 'MpesaController@validationurl');
Route::post('/ConfirmationURL', 'MpesaController@confirmationurl');

Route::post('/registerurl', 'MpesaController@registerurl');
