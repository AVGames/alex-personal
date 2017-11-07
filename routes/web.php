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

Route::prefix('dashboard/admin/')->group(function () {
	Route::resource('games', 'GameController');
	Route::resource('users', 'UserController');
});

//Facebook routes 
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider')->name('facebook.login');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');






Auth::routes(); 

Route::get ('home', 'HomeController@logout')->name('home');

Route::get('/hs.php', 'HomeController@hs');

Route::get('/lol.php', 'HomeController@lol');

Route::get('/Infamous.php', 'HomeController@Infamous');

Route::get('/home', 'HomeController@index');

Route::get('/inicio', 'HomeController@inicio');
