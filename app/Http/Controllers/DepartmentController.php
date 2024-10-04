<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    function index () {
        $departments = Department::all();
        return view('department.indexDepartment', [
            "title" => 'Department',
            'departments' => $departments
        ]);
    }

}
