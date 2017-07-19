<?php

namespace App\Http\Controllers\Employees\API;

use App\Domain\Employees\API\Employee;
use App\Http\Controllers\Controller;
use App\Libraries\CurrencyFormat;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function all(Request $request)
    {
        $Employee = new Employee;
        $resource = $Employee->all();
        $resource = $this->filterCollection($request, $resource);

        return json_encode($resource);
    }

    public function find($id = '')
    {
        $Employee = new Employee;
        $resource = $Employee->all();

        if (empty($id) === false) {
            $resource = $resource->where('id', $id)->first();
        }

        return json_encode($resource);
    }

    public function filterCollection($request, $collection)
    {
        $searchField = $request->search_field;
        $searchValue = $request->search_value;
        $searchLt = $request->search_lt;
        $searchGt = $request->search_gt;

        if (is_null($searchField) === false && is_null($searchValue) === false) {

            $collection = $collection->filter(function ($item) use ($searchField, $searchValue) {
                return false !== stristr($item->$searchField, $searchValue);
            });

        } elseif(is_null($searchField) === false && is_null($searchLt) === false && is_null($searchGt) === false) {

            $collection = $collection->filter(function ($item) use ($searchField, $searchLt, $searchGt) {
                $CurrencyFormat = new CurrencyFormat;
                $salary = $CurrencyFormat->unformat('en_EN', $item->salary);

                return ($salary >= $searchLt && $salary <= $searchGt);
            });
        }

        return $collection->all();
    }
}