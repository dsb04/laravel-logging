<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;

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

Route::get('/', function () {
    logger()->debug('alguem acessou o site');
    logger()->error('Usuario tentou acessar',[
        'user'=>2]);
    return view('welcome');
});
Route::get('/soma/{num1}/{num2}', [LogController::class,'soma']);
Route::get('/sub/{num1}/{num2}', [LogController::class,'sub']);
Route::get('/div/{num1}/{num2}', [LogController::class,'div']);
