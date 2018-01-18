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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'HomeController@index');
Route::get('animal', function(){
  return array( 'animal'=>['dog', 'cat', 'ant', 'bat', 'giraffe', 'pig', 'chicken', 'fish', 'buffalo']);
});
Route::put('add', function(Request $request){
  $data = $request->all();
  return $data;
});
