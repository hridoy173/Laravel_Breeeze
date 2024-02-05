<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;
use App\Models\Department;
use App\Models\Hostal;



class StudentController extends Controller
{

    public function allStudent(Request $request)
    {

        $allStudent = Student::all();

        return view('backend.students.all_student',compact('allStudent'));
    }
    //allType End

    //start addType()
    public function addStudent()
    {
        $allDepartment = Department::all();
        $allHostal = Hostal::all();

        return view('backend.students.add_student',compact(['allHostal','allDepartment']));

    }
    //end addTYpe()


    //start addStudentStore()

    public function addStudentStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'age' => 'required',
            'email' => 'required|unique:students',
            'roll_no' => 'required|unique:students',
            'reg_no' => 'required|unique:students',
            'section' => 'required',
            'department_id' => 'required',
            'hostal_id' => 'required'
        ]);

        Student::create(request()->except('_token'));

        $notification = array(
            'message' => 'Student insert Successfully',
            'alert-type' => 'info'
        );

        return  redirect('/all/student')->with($notification);
    }
        //end addStudentStore()

        //start editType()

        public function editStudent(Request $request,$id)
        {
            $student = Student::find($id);

            return view('backend.students.edit_student',compact('student'));

        }
        //end editType()


        //start updateStudent()
        public function updateStudent(Request $request,$id)
        {
            $student = Student::findOrFail($id);

            $student->update(request()->except('_token'));

            $notification = array(
                'message' => 'Student update Successfully',
                'alert-type' => 'info'
            );

            return  redirect('/all/student')->with($notification);
        }
        //end updateStudent()


    //strat deleteStudent

    public function deleteStudent($id)
    {
        $student = Student::findOrFail($id);

        $student->delete();

        $notification = array(
            'message' => 'Student delete Successfully',
            'alert-type' => 'warning'
        );

        return  redirect('/all/student')->with($notification);

    }
}
