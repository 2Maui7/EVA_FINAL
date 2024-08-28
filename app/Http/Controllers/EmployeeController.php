<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Position;
use App\Models\Department;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('position', 'department')->get();
        return view('employees.index', compact('employees'));
    }
    public function create()
    {
        $positions = Position::all();
        $departments = Department::all();
        return view('employees.create', compact('positions', 'departments'));
    }
    public function store(Request $request)
    {
        Employee::create($request->all());
        return redirect()->route('employees.index');
    }
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }
    public function edit(Employee $employee)
    {
        $positions = Position::all();
        $departments = Department::all();
        return view('employees.edit', compact('employee', 'positions', 'departments'));
    }
    public function update(Request $request, Employee $employee)
    {
        $employee->update($request->all());
        return redirect()->route('employees.index');
    }
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index');
    }
}