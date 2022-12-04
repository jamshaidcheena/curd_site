<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::paginate(5);
        return view('curd.index',['students'=>$student]);
    }
    public function create()
    {
       return view('curd.create');
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->stuName= $request->stuName;
        $student->stuFatherName= $request->stuFatherName;
        $student->email=$request->email;
        $student->password=bcrypt($request->password);
        $student->phone= $request->phone;
        $student->address = $request->address;
        $student->city=$request->city;
        $student->save();
        return redirect()->route('student');
    }
    public function show(Student $student)
    {
        //
    }
    public function edit(Student $student,$id)
    {
        $student= Student::find('id');
        return view('curd.edit',['students'=>$student]);
    }
    public function update(Request $request, Student $student)
    {

    }
    public function destroy(Student $student)
    {
        //
    }
}
