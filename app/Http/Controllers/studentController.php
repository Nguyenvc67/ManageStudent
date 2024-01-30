<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentController extends Controller
{
    public function create()
    {
        return view('student.create');
    }
    public function store(Request $request)
    {

        $data = $request->validate([
            'full_name' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'class_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'status' => 'required',
        ]);
        Student::create($data);
        return redirect('/students')->with('success', 'Student created successfully!');
    }
    public function index(Request $request)
    {
        $searchKeyword = $request->input('search'); 
    if ($searchKeyword) {
        $students = Student::where('full_name', $searchKeyword)->get();
    } else {
        $students = Student::all();
    }
    return view('student.index', compact('students'));
    }
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        
        $data = $request->all();
        $student->update($data);

        $students = Student::all();
        return redirect('/students')->with('success', 'Student update successfully!');
    }

    public function edit($id)
    {
        $students = Student::findOrFail($id);

        return view('student.edit', compact('students'));
    }

    public function delete($id){
        $student = Student::findOrFail($id);

        $student->delete();
        return redirect('/students')->with('success', 'success delete user!');
    }

}
