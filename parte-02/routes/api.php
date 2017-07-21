<?php
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::get('/employees', 'Employees\API\EmployeeController@all');
Route::get('/employees/format/{format}', 'Employees\API\EmployeeController@all');
Route::get('/employees/{id}', 'Employees\API\EmployeeController@find');