<?php

use App\Http\Controllers\FirstController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test/welcome');
});

Route::get('/first-url', function () {
    return view('test/firstBlade');
})->name('myUrl');

Route::get('/first-url/{userId}', function ($userId) {
    return $userId;
})->name('urlWithPara');

Route::post('/user-create', [FirstController::class, 'responseToTheBlade'])->name('userCreate');
