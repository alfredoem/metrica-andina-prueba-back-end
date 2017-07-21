<?php

namespace App\Http\Controllers\Employees\API;

use App\Domain\Employees\API\Employee;
use App\Http\Controllers\Controller;
use App\Libraries\CurrencyFormat;
use Illuminate\Http\Request;
use Spatie\ArrayToXml\ArrayToXml;

class EmployeeController extends Controller
{
    public function all(Request $request, $format = 'json')
    {
        $Employee = new Employee;
        $resource = $Employee->all();
        $filters = $request->all();

        if (empty($filters) === false){
            $resource = $Employee->filter($request->all(), $resource);
        }

        if ($format == 'xml') {
            $this->response->header('Content-Type', 'application/xml');
            $resource = ArrayToXml::convert(['employee' => $resource], 'employees');
        } else {
            $this->response->header('Content-Type', 'application/json');
            $resource = json_encode($resource);
        }

        return $this->response->setContent($resource);
    }

    public function find($id = '')
    {
        $Employee = new Employee;
        $resource = $Employee->find($id);

        if (empty($resource)) {
            $this->response->setStatusCode(404);
        }

        return $this->response->setContent($resource);
    }
}