<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\TasksController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group([], function() {
    Route::get('/',[\App\Http\Controllers\ProjectsController::class, 'index']);
    Route::get('/create',[\App\Http\Controllers\ProjectsController::class, 'create']);
//    Route::post('/',[\App\Http\Controllers\ProjectsController::class, 'store']);
//    Route::get('/',[\App\Http\Controllers\ProjectsController::class, 'edit']);
//    Route::put('/',[\App\Http\Controllers\ProjectsController::class, 'update']);
//    Route::delete('/',[\App\Http\Controllers\ProjectsController::class, 'delete']);
});

Route::group(['prefix' => 'employee'], function() {
    Route::get('/create',[\App\Http\Controllers\EmployeesController::class, 'create']);
    Route::post('/add',[\App\Http\Controllers\EmployeesController::class, 'store'])->name('employee.store');
//    Route::get('/',[\App\Http\Controllers\ProjectsController::class, 'edit']);
//    Route::put('/',[\App\Http\Controllers\ProjectsController::class, 'update']);
//    Route::delete('/',[\App\Http\Controllers\ProjectsController::class, 'delete']);
});

Route::group(['prefix' => 'tasks'], function() {
    Route::get('/create',[\App\Http\Controllers\TasksController::class, 'create']);
//    Route::post('/',[\App\Http\Controllers\ProjectsController::class, 'store']);
//    Route::get('/',[\App\Http\Controllers\ProjectsControl ler::class, 'edit']);
//    Route::put('/',[\App\Http\Controllers\ProjectsController::class, 'update']);
//    Route::delete('/',[\App\Http\Controllers\ProjectsController::class, 'delete']);
});
