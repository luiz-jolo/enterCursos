<?php
use RealRashid\SweetAlert\Facades\Alert;

Route::get('/', function () {
//    Alert::success('Success title', 'Success Message');
//    alert()->info('InfoAlert', 'Lorem Ipsun Dolor sit amet');
    toast('Success Toast', 'success');
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/aluno', 'AlunoController');

