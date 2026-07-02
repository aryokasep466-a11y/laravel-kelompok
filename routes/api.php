<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DosenApiController;
use App\Http\Controllers\Api\TugasApiController;

Route::apiResource('tugas', TugasApiController::class);

Route::apiResource('dosen', DosenApiController::class);