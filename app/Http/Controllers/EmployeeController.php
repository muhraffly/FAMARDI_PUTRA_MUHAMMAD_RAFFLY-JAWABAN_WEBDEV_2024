<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        // Ambil semua data employee
        $employees = Employee::all();
        return view('employee.indexEmployee', [
            "title" => 'Employee',
            'employees' => $employees
        ]);
    }
}
