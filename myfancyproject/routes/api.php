<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\User;
use App\Http\Controllers\UserController;
use Faker\Provider\Base;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users', [UserController::class, 'index']);

Route::get('/user{id}', [UserController::class, 'show']);

