<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ForController;
use App\Http\Controllers\WhileController;
use App\Http\Controllers\DowhileController;
use App\Http\Controllers\ForeachController;


Route::get('/', [HomeController::class, "index"])->name("home");
Route::get('/for', [ForController::class, "index"])->name("for.index");
Route::get('/while', [WhileController::class, "index"])->name("while.index");
Route::get('/dowhile', [DowhileController::class, "index"])->name("dowhile.index");
Route::get('/foreach', [ForeachController::class, "index"])->name("foreach.index");
