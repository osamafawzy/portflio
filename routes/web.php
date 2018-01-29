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
Route::group(['middleware' => ['web','admin']], function (){

Route::get('/adminpanel','adminController@index');
Route::get('/adminpanel/setting','settingController@index');
Route::post('/adminpanel/setting','settingController@store');

Route::resource('/adminpanel/sliders','sliderController');
Route::get('/adminpanel/sliders/{id}/delete','sliderController@destroy');


Route::resource('/adminpanel/services','serviceController');
Route::get('/adminpanel/services/{id}/delete','serviceController@destroy');
  });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
