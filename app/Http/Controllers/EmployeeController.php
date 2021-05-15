<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function getAllEmployees()
    {
        return response()->json(Employee::all(), 200);
    }

    public function getEmployeeNyId($id)
    {
        $employee = Employee::find($id);
        if(is_null($employee)){
            return response()->json(['message' => 'Employee Not Found'], 404);
        }
        return response()->json($employee, 200);
    }

    public function addEmployees(Request $request){
        $employee = Employee::create($request->all());
        return response($employee, 201);
    }
}
