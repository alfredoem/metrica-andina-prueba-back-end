<?php

namespace App\Http\Controllers\Employees;

use App\Domain\Employees\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $Employee = new Employee;
        $emailAddress = $request->emailAddress;

        if (is_null($emailAddress) === false) {
            $resource = $Employee->search('email', $request->emailAddress);
        } else {
            $resource = $Employee->all();
        }

        return view('employees.index', ['data' => $resource, 'emailAddress' => $emailAddress]);
    }

    public function show($id)
    {
        $Employee = new Employee;
        $resource = $Employee->find($id);

        if (is_null($resource)) {
            abort(404);
        }

        return view('employees.show', ['data' => $resource]);
    }
}