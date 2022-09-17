<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\{PointServicesController, ServicesController, PointServiceHistoryController};

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

/**
 * Services Router
 */
Route::get('/services/list', array(ServicesController::class, 'showAllServices'));
Route::post('/services/create', array(ServicesController::class, 'createService'));
Route::post('/services/update/{id}', array(ServicesController::class, 'updateService'));
Route::post('/services/delete/{id}', array(ServicesController::class, 'deleteService'));

/**
 * Point Services Router
 */
Route::get('/points/services/{id}', array(PointServicesController::class, 'showPointServices'));
Route::post('/points/services/create', array(PointServicesController::class, 'createPointService'));
Route::post('/points/services/delete/{id}', array(PointServicesController::class, 'deletePointService'));
Route::post('/points/services/toggleEnable/{id}', array(PointServicesController::class, 'toggleEnablePointService'));
Route::post('/points/services/updatePrice/{id}',array(PointServicesController::class,'updatePointServicePrice'));

/**
 * Point Services History Router
 */
Route::get('/points/history',array(PointServiceHistoryController::class,'showHistory'));
