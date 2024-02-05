<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Hostal;

class HostalController extends Controller
{
      //allHostal() start

      public function allHostal(Request $request)
      {
          $allHostal = Hostal::all();

          return view('backend.hostals.all_hostal',compact('allHostal'));
      }
      //allHostal End

       //strat deleteHostal

       public function deleteHostal($id)
       {
           $hostal = Hostal::findOrFail($id);

           $hostal->delete();

           $notification = array(
               'message' => 'Hostal delete Successfully',
               'alert-type' => 'warning'
           );

           return  redirect('/all/hostal')->with($notification);

       }

       //end deleteHostal

           //start allHostalStudent

           public function allHostalStudent(Request $request,$id)
           {
               $students = Hostal::find($id)->students;

               return view('backend.hostals.show_hostal_student',compact('students'));

           }

           //end allHostalStudent

}
