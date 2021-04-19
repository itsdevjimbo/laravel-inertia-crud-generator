<?php

use Illuminate\Support\Facades\Route;
use JMagusib\CrudGenerator\Http\Controllers\CrudGeneratorController;
Route::get("generator", [CrudGeneratorController::class, 'index']);
