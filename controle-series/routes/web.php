<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;


Route::get('/series', [SeriesController::class, 'index']);
Route::get('/series/adicionar', [SeriesController::class, 'create']);
Route::post('/series/adicionar', [SeriesController::class, 'store']);
Route::delete('/series/{id}', [SeriesController::class, 'destroy']);
