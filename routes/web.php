<?php

use Illuminate\Support\Facades\Route;
/*
get /users
get /users/{user_id}

post /users
put/patch /users/{user_id}
delete /users/{user_id}

Route::resource('/users', 'MainController@save');
*/

Route::get('/', 'MainController@index')->name('home');
Route::get('/search', 'MainController@search')->name('search');

Route::post('/adduser', 'MainController@save');


Route::get('/adduser' , function(){
    return view('adduser');
})->name('adduser');







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
