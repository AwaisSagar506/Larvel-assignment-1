<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Show all students
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    // Show single student
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }
    // Show Form
    public function create()
{
    return view('students.create');
}

// Save Data
public function store(Request $request)
{
    Student::create([
        'name' => $request->name,
        'email' => $request->email,
        'age' => $request->age
    ]);

    return redirect()->route('students.index');
}
}