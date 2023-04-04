<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    

    public function index()
    {
       
        $student=Student::paginate(10);
        return view('student_list',['students'=>$student]);
    }
    public function create()
    {
        return view('create_student');
    }
    public function store(Request $request)
    {
        
        $validate = $request->validate([
            'student_name' => 'required|min:2|max:50|unique:students,db_student_name',
            'student_address'=> 'required',
            'phone_number' => 'required|digits:11'
        ], [
            'student_name.required' => 'Student name must not be empty',
            'student_address.required' => 'Address must not be empty',
            'phone_number.required' => 'Phone number must not be empty',
            'student_name.min' => 'Student name must atleast be 2 or more characters',
            'student_name.max' => 'student name must be less than 50 characters'
        ]);

        $student_name = $request-> student_name;
        $student_address = $request-> student_address;
        $phone_number= $request-> phone_number;

        $db_student=new \App\Models\Student;
        $db_student->db_student_name = $student_name;
        $db_student->db_student_address = $student_address;
        $db_student->db_phone_number = $phone_number;

        $db_student->save();
    
        return view('dashboard');

    }
    public function show(Student $student)
    {
        return view('student_view', compact('student'));
    }
    public function edit(Student $student)
    {
        return view('edit_student', compact('student'));
    }
    public function update(Request $request, Student $student)
    {
        $validate = $request->validate([
            'student_name' => 'required|unique:students,db_student_name',
            'student_address'=> 'required',
            'phone_number' => 'required|digits:11'
        ]);
    

        $student_name = $request-> student_name;
        $student_address = $request-> student_address;
        $phone_number= $request-> phone_number;

        

        $db_student= $student;
        $db_student->db_student_name = $student_name;
        $db_student->db_student_address = $student_address;
        $db_student->db_phone_number = $phone_number;

        $db_student->update();
        return redirect()->route('student.index');
    }
    public function destroy(Student $student)
    {
        $student->delete();
        // return view('student_list');
        return redirect()->route('student.index');
    }
}
