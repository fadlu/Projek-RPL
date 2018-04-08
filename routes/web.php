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


Route::get('Unknown',  ['as' => 'secret', 'uses' =>"RahasiaController@Unknown"
]);

Route::get('showmesecret','RahasiaController@Unknown');

Route::get('/', 'PagesController@welcome');

Route::get('homepeg', 'PagesController@homepage');

Route::get('about', 'PagesController@about');

Route::get('profil', 'PagesController@profil');
Route::group(['middleware'=>['web']],function(){
Route::get('siswa', 'siswaController@index');
Route::get('siswa/create', 'siswaController@create')->name('siswa.create');
Route::post('siswa', 'siswaController@store');
Route::get('siswa/{siswa}', 'siswaController@show');
Route::get('siswa/{siswa}/edit', 'siswaController@edit');
Route::patch('siswa/{siswa}', 'siswaController@update');
Route::delete('siswa/{siswa}','siswaController@destroy');	
});
