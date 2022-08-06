<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function lazyload(Request $request)
    {
        if ($request->ajax()) {
            $employees = Employee::paginate(10);
            return response()->json(['data' => $employees]);
        }
        return view('welcome');
    }
}
