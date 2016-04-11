<?php

namespace App\Http\Controllers;

use App\Department;
use App\Employee;

use Illuminate\Http\Request;

use App\Http\Requests;

class DepartmentController extends Controller
{
    // show list of departments
    public function index()
    {
        $departments = Department::all();
        return view('department.index', compact('departments'));
    }
}