<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Department;

class DepartmentController extends Controller
{
       //allDepartment() start

       public function allDepartment(Request $request)
       {
           $allDepartment = Department::all();

           return view('backend.departments.all_department',compact('allDepartment'));
       }
       //allDepartment End

        // starts addDepartment
        public function addDepartment()
        {
            return view('backend.departments.add_department');

        }

        // end addDepartment


         //start addDepartmentStore()

         public function addDepartmentStore(Request $request)
         {
             $request->validate([
                 'department_name'  => 'required|unique:departments',
                 'department_code' => 'required|unique:departments',
             ]);

             Department::create(request()->except('_token'));

             $notification = array(
                 'message' => 'Department insert Successfully',
                 'alert-type' => 'success'
             );

             return  redirect('/all/department')->with($notification);
         }
         //end addDepartmentStore()

        //start editDepartment()
        public function editDepartment(Request $request,$id)
        {
            $department = Department::find($id);

            return view('backend.departments.edit_department',compact('department'));
        }
        //end editDepartment()


        //start updateDepartment()
        public function updateDepartment(Request $request,$id)
        {
            $department = Department::findOrFail($id);

            $department->update(request()->except('_token'));

            $notification = array(
                'message' => 'Department update Successfully',
                'alert-type' => 'success'
            );

            return  redirect('/all/department')->with($notification);
        }
        //end updateDepartment()

            //strat deleteDepartment

        public function deleteDepartment($id)
        {
            $department = Department::findOrFail($id);

            $department->delete();

            $notification = array(
                'message' => 'Department delete Successfully',
                'alert-type' => 'warning'
            );

            return  redirect('/all/department')->with($notification);

        }

        //end deleteDepartment

        //start allDepartmentStudent

        public function allDepartmentStudent(Request $request,$id)
        {
            $students = Department::find($id)->student;

            return view('backend.departments.show_department_student',compact('students'));

        }

        //end allDepartmentStudent



}
