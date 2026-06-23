<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

DB::listen(function ($event) {
    dump($event->sql);
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('helloworld', [TestController::class, 'index']);
