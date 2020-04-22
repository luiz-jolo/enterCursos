<?php
use RealRashid\SweetAlert\Facades\Alert;

Route::get('/', function () {
    Alert::success('Success title', 'Success Message');
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/aluno', 'AlunoController');
