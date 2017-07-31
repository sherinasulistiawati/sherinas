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

Route::get('/Orangtua', function(){
	$or = App\Orangtua::all();
	foreach ($or as $data) {
		echo $data->nama_ibu." dengan ";
		echo $data->nama_ayah." ";
		foreach ($data->anak as $key) {
			echo "<li>$key->nama</li><br>";
		}
	}
});

Route::get('/percobaan', 'MyController@index');

Route::get('/percobaan2', 'MyController@tampilan');

Route::get('/percobaan3', 'MyController@tampilmodel');

Route::resource('orangtua','OrangtuaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
