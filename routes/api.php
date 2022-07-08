<?php

use App\Http\Controllers\Api\GameController;
use App\Http\Controllers\Api\GenreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resources([
    'games' => GameController::class,
    'genres' => GenreController::class,
]);
