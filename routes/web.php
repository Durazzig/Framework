<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', 'PaginasController@index');
