<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PowerScheduleController;
use Illuminate\Support\Facades\Route;

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
 * View all schedules
 */

Route::get('/',[PowerScheduleController::class,'index']);

/**
 * View all  schedules in admin panel
 */
Route::get('/admin',[AdminController::class,'index']);

/**
 * store a single schedule
 */
Route::post('/schedules', [AdminController::class,'store']);


/**
 * create a schedule
 */
Route::get('/schedule/create', [AdminController::class,'create']);

/**
 * edit a single schedule
 */
Route::get('/schedules/{schedule}/edit', [AdminController::class,'edit']);


/**
 * update a single schedule
 */
Route::put('/schedules/{schedule}/update', [AdminController::class,'update']);

/**
 * delete a single schedule
 */
Route::delete('/schedules/{schedule}',[AdminController::class,'destroy']);

/**
 * returns search results to the user
 */

Route::get('/search',[PowerScheduleController::class,'search']);



