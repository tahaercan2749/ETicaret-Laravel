<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;


Route::resource('/users',UserController::class);
