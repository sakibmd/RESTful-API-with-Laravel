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

    public function getEmployeeById($id)
    {
        $employee = Employee::find($id);
        if (is_null($employee)) {
            return response()->json(['message' => 'Employee Not Found'], 404);
        }
        return response()->json($employee, 200);
    }

    public function addEmployee(Request $request)
    {
        $employee = Employee::create($request->all());
        return response($employee, 201);
    }

    public function updateEmployee(Request $request, $id)
    {
        $employee = Employee::find($id);
        if (is_null($employee)) {
            return response()->json(['message' => 'Employee Not Found'], 404);
        }
        $employee = $employee->update($request->all());
        return response()->json($employee, 200);
    }

    public function deleteEmployee($id)
    {
        $employee = Employee::find($id);
        if (is_null($employee)) {
            return response()->json(['message' => 'Employee Not Found'], 404);
        }
        $employee->delete();
        return response()->json(null, 204);
    }
}
