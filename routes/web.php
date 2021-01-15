<?php

use App\Http\Controllers\reto1Controller;
use App\Http\Controllers\tableroController;
use App\Models\register;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [tableroController::class,'index']);

Route::get('/Reto1', [reto1Controller::class,'index']);

Route::any('/', [registerController::class]);