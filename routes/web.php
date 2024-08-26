<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\basicController;
use App\Http\Controllers\singleActionController;
use App\Http\Controllers\resourcesController;


//BASIC CONTROLLER:

Route::get('/', [basicController::class, 'index']);
Route::get('/about', [basicController::class, 'about']);
Route::get('/service', [basicController::class, 'service']);

//SINGLE ACTION CONTROLLER:

Route::get('/team', singleActionController::class );

// RESOURCE CONTROLLER :
Route::resource ('photo',resourcesController::class);
?>
