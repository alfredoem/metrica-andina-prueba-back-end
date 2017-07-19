<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// http://local.ma-parte2.dev/api/v1/employees?search_field=salary&search_gt=1500&search_lt=1800
Route::get('/employees', 'Employees\API\EmployeeController@all');
Route::get('/employees/{id}', 'Employees\API\EmployeeController@find');