<?php
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/status', function () {
    return response()->json(['status' => 'OK']);
});
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);    