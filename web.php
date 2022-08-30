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
//Route::get('URI', callback_function);
Route::get('', function (){
  return "<h1>This is the Dashboard</h1>";
});

Route::get('customers', function(){
  return "<h1>This is the Customers List Page</h1>";
});

Route::get('show-customer', function (){
  //$name = $_GET["name"];
  $name = request('name');
  return "<h1>This Page shows the profile of $name</h1>";
});

Route::get('customers/{id}', function(){
  $id = request('id');
  return "<h1>Customer ID: $id</h1>";
});
