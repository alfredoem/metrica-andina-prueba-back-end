<?php

namespace App\Domain\Employees;

use App\Libraries\HttpRequest;

class Employee
{
    /**
     * @return array
     */
    public function all()
    {
        $HttpRequest = new HttpRequest(env('API_URI') . '/api/v1', 'employees');
        $request = $HttpRequest->get();
        $resource = [];

        if ($request->http_status === 200) {
            $resource = $request->response['data'];
        }

        return $resource;
    }

    /**
     * @param string $field
     * @param string $value
     * @return array
     */
    public function search($field = 'id', $value = '')
    {
        $HttpRequest = new HttpRequest(env('API_URI') . '/api/v1', 'employees');
        $request = $HttpRequest->get(['search_field' => $field, 'search_value' => $value]);
        $resource = [];

        if ($request->http_status === 200) {
            $resource = $request->response['data'];
        }

        return $resource;
    }

    /**
     * @param string $id
     * @return array
     */
    public function find($id = '')
    {
        $HttpRequest = new HttpRequest(env('API_URI') . '/api/v1', 'employees/' . $id);
        $request = $HttpRequest->get();
        $resource = [];

        if ($request->http_status === 200) {
            $resource = $request->response['data'];
        }

        return $resource;
    }
}