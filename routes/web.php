<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FireBaseController;

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
    return view('welcome');
});


 
Route::get('/test', [FireBaseController::class, 'index']);
Route::post('/submit', [FireBaseController::class, 'store']);
Route::get('/view', [FireBaseController::class, 'view']);

Route::get('/temparature', [FireBaseController::class, 'temparature']);
Route::get('/light', [FireBaseController::class, 'light']);
Route::get('/humadity', [FireBaseController::class, 'humadity']);
Route::get('/constrartion', [FireBaseController::class, 'constrartion']);
Route::get('/concetarationhumadity', [FireBaseController::class, 'concetarationhumadity']);
Route::get('/concetarationlight', [FireBaseController::class, 'concetarationlight']);
Route::get('/concetarationtemperature', [FireBaseController::class, 'concetarationtemperature']);
Route::get('/humaditylight', [FireBaseController::class, 'humaditylight']);
Route::get('/temperaturelight', [FireBaseController::class, 'temperaturelight']);
Route::get('/temperaturehumadity', [FireBaseController::class, 'temperaturehumadity']);


