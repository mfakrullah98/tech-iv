<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('/api/users',UserController::class)->only(['index','store','show','update','destroy']);
