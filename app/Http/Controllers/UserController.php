<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{

       //user start
       public function user()
       {
           return view('user.index');
       }
       // user end



    //start allUser
    public function allUser()
    {
        $users = User::all()->where('role','user');
        return view('backend.users.all_user',compact('users'));
    }
    //end allUser


    public function addUser()
    {
        return view('backend.users.add_user');
    }


    public function addUserStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'role' => 'required',
            'password' => 'required'
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);


        $notification = array(
            'message' => 'User insert Successfully',
            'alert-type' => 'info'
        );

        return  redirect('/all/user')->with($notification);


    }


    public function editUser($id)
    {
        $user = User::find($id);
        return view('backend.users.edit_user',compact('user'));
    }

}
