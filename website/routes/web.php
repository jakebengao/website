<?php

use App\Http\Controllers\RegistrantController;

Route::get('/', [RegistrantController::class, 'create']);
Route::post('/register', [RegistrantController::class, 'store']);
Route::get('/list', [RegistrantController::class, 'index']);