<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('helloworld', function () {
    $name = 'Kamal Norizan';
    $phone = '012-3456789';
    $email = 'kamal@example.com';

    return view('helloworld',compact('name','phone','email'));
});
