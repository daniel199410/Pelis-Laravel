<?php
Route::get('/', 'FrontController@index');
Route::get('contacto', 'FrontController@contacto');
Route::get('review', 'FrontController@review');
Route::get('admin', 'FrontController@admin');

Route::resource('usuario', 'UsuarioController');