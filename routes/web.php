<?php
use RealRashid\SweetAlert\Facades\Alert;

Route::get('/', function () {
// example:
    alert()->question('Are you sure?','You won\'t be able to revert this!')
        ->showConfirmButton('Yes! Delete it', '#3085d6')
        ->showCancelButton('Cancel', '#aaa')->reverseButtons();

    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/aluno', 'AlunoController');

