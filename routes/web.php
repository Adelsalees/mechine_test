<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\EmployeeController;

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

//Designation
Route::get('/designation',[DesignationController::class,'index']);
Route::get('/add_designation',[DesignationController::class,'create']);
Route::get('/new_designation',[DesignationController::class,'store']);
Route::get('designation/update/{id}',[DesignationController::class,'edit']);
Route::get('update_designation/{id}',[DesignationController::class,'update']);
Route::get('designation/delete/{id}',[DesignationController::class,'destroy']);

//Employee
Route::get('/employee',[EmployeeController::class,'index']);
Route::get('/add_employee',[EmployeeController::class,'create']);
Route::get('/new_employee',[EmployeeController::class,'store']);
Route::get('employee/update/{id}',[EmployeeController::class,'edit']);
Route::get('update_employee/{id}',[EmployeeController::class,'update']);
Route::get('employee/delete/{id}',[EmployeeController::class,'destroy']);