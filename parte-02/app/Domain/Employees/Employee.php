<?php

namespace App\Domain\Employees;

use App\Libraries\HttpRequest;

class Employee
{
    public function all()
    {
        $HttpRequest = new HttpRequest(env('API_URI'), 'employees');
        $request = $HttpRequest->get();
        $resource = [];

        if ($request->http_status === 200) {
            $resource = $request->response['data'];
        }

        return $resource;
    }

    public function search($field = 'id', $value = '')
    {
        $HttpRequest = new HttpRequest(env('API_URI'), 'employees');
        $request = $HttpRequest->get(['search_field' => $field, 'search_value' => $value]);
        $resource = [];

        if ($request->http_status === 200) {
            $resource = $request->response['data'];
        }

        return $resource;
    }


    public function find($id = '')
    {
        $HttpRequest = new HttpRequest(env('API_URI'), 'employees/' . $id);
        $request = $HttpRequest->get();
        $resource = [];

        if ($request->http_status === 200) {
            $resource = $request->response['data'];
        }

        return $resource;
    }
}