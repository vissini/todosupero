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

// Route::get('/', function () {
//     return view('auth.login');
// });
Route::redirect('/', '/todo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/todo/endpoint', function () {
    return view('todo.endpoint');
});
Route::resource('todo', 'TodoController');
Route::get('todo/{todo}/close', 'TodoController@close')->name('todo.close');
