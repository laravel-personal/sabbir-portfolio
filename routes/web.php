<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Home page route.
Route::get( '/', [HomeController::class, 'homePage'] );
