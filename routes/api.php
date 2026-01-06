<?php

use App\Rest\Resources\UserResource;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:api'], function () {

    Route::post('logout', [AuthController::class, 'logout']);
    Rest::resource('users', UserResource::class)->withSoftDeletes();

});

