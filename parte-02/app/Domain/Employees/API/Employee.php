<?php

namespace App\Domain\Employees\API;

use App\Libraries\CurrencyFormat;

class Employee
{
    /**
     * @return array|mixed
     */
    public function all()
    {
        $sourcePath = public_path('files/employees.json');
        $resource = [];

        if (file_exists($sourcePath)) {
            $resource = json_decode(file_get_contents($sourcePath), true);
        }

        return $resource;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        $Employee = new Employee;
        $collection = $Employee->all();

        $resource = array_filter($collection, function($item) use ($id) {
            return $item['id'] == $id;
        });

        return array_first($resource);
    }

    /**
     * @param array $filters
     * @param array $collection
     * @return array
     */
    public function filter($filters = array(), $collection = array())
    {
        $searchField = (isset($filters['search_field'])) ? $filters['search_field'] : null;
        $searchValue = (isset($filters['search_value'])) ? $filters['search_value'] : null;
        $searchLt = (isset($filters['search_lt'])) ? $filters['search_lt'] : null;
        $searchGt = (isset($filters['search_gt'])) ? $filters['search_gt'] : null;

        if (is_null($searchField) === false && is_null($searchValue) === false) {

            $collection = array_filter($collection, function($item) use ($searchField, $searchValue) {
                return stristr($item[$searchField], $searchValue) !== false;
            });


        } elseif(is_null($searchField) === false && is_null($searchLt) === false && is_null($searchGt) === false) {

            $collection = array_filter($collection, function($item) use ($searchField, $searchLt, $searchGt) {

                $CurrencyFormat = new CurrencyFormat;
                $salary = $CurrencyFormat->unformat('en_EN', $item['salary']);

                return ($salary >= $searchLt && $salary <= $searchGt);

            });

            $collection = array_values($collection);

        }

        return $collection;
    }
}