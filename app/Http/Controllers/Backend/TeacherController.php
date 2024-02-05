<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Teacher;

class TeacherController extends Controller
{

    //allTeacher() start

    public function allTeacher(Request $request)
    {
        $allTeacher = Teacher::all();

        return view('backend.teachers.all_teacher',compact('allTeacher'));
    }
    //allTeacher End


    // starts addTeacher
    public function addTeacher()
    {
        return view('backend.teachers.add_teacher');

    }

    // end addTeacher



      //start addTeacherStore()

      public function addTeacherStore(Request $request)
      {
          $request->validate([
              'name'  => 'required',
              'email' => 'required|unique:teachers',
              'department' => 'required',

          ]);

         Teacher::create(request()->except('_token'));

          $notification = array(
              'message' => 'Teacher insert Successfully',
              'alert-type' => 'success'
          );

          return  redirect('/all/teacher')->with($notification);
      }
      //end addTeacherStore()


          //start editTeacher()
    public function editTeacher(Request $request,$id)
    {
        $teacher = Teacher::find($id);

        return view('backend.teachers.edit_teacher',compact('teacher'));
    }
    //end editTeacher()


        //start updateTeacher()
        public function updateTeacher(Request $request,$id)
        {
            $teacher = Teacher::findOrFail($id);

            $teacher->update(request()->except('_token'));

            $notification = array(
                'message' => 'Teacher update Successfully',
                'alert-type' => 'success'
            );

            return  redirect('/all/teacher')->with($notification);
        }
        //end updateTeacher()

          //strat deleteTeacher

    public function deleteTeacher($id)
    {
        $type = Teacher::findOrFail($id);

        $type->delete();

        $notification = array(
            'message' => 'Teacher delete Successfully',
            'alert-type' => 'warning'
        );

        return  redirect('/all/teacher')->with($notification);

    }

    //end deleteTeacher


}
