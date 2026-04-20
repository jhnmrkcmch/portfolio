<?php
use App\Http\Controllers\CardController;
use Illuminate\Support\Facades\Route;


Route::get('/cards', [CardController::class, 'index']);
Route::post('/cards', [CardController::class, 'apiStore']);
Route::delete('/cards/{id}', [CardController::class, 'apiDelete']);