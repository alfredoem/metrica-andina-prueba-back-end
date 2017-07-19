<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'Employees\EmployeeController@index');
Route::get('/employees/{id}', 'Employees\EmployeeController@show');