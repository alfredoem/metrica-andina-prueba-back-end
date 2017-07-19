<?php

namespace App\Domain\Employees\API;

class Employee
{
    public function all()
    {
        $sourcePath = storage_path('app/public/employees.json');
        $resource = [];

        if (file_exists($sourcePath)) {
            $resource = json_decode(file_get_contents($sourcePath));
        }

        $resource = collect($resource);

        return $resource;
    }
}