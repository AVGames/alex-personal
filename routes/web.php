<?php
use Illuminate\Http\Request;
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

Route::get('/', function(){
	return view('inicio');

});
Route::get('/inicio.php', function () {
	return view('inicio');

});

Route::get('/welcome',function () {
	return view('welcome');
});

Route::get('/json', function () {
	$ejemplo = \App\User::all();
	return $ejemplo;
});


Route::get('/json', function () {
	$juegos = \App\User::all();
	return $juegos;
});


Route::resource('games', 'GameController');
Route::resource('users', 'UserController');




Auth::routes(); 

Route::get ('home', 'HomeController@logout')->name('home');

Route::get('/hs.php', 'HomeController@hs')->name('home');

Route::get('/lol.php', 'HomeController@lol')->name('home');

Route::get('/Infamous.php', 'HomeController@Infamous')->name('home');

Route::get('/home', 'HomeController@index')->name('home');