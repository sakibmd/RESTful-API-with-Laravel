<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// get all employees
Route::get('employees', 'EmployeeController@getAllEmployees');


// get employee details by id
Route::get('employee/{id}', 'EmployeeController@getEmployeeNyId');

//add new emloyees
Route::post('addEmployees', 'EmployeeController@addEmployees');



