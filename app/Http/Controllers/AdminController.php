<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AdminController extends Controller
{

    //admin start
    public function admin()
    {
        return view('admin.index');
    }
    // admin end


    //adminLogout start
    public function adminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
    //adminLogout end



    //adminLogin strat
    public function adminLogin(Request $request)
    {

    return view('admin.adminLogin');

    }
    //adminLogin End


    //adminProfile start
    public function adminProfile()
    {
       $id = Auth::user()->id;
       $profileData = User::find($id);
       return view('admin.adminProfileView',compact('profileData'));
    }
    //adminProfile End

    //adminProfileStore start

    public function adminProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);

        $data->username = request('username');
        $data->name = request('name');
        $data->email = request('email');
        $data->phone = request('phone');
        $data->address = request('address');

        if($request->hasFile('photo'))
        {
            $destination = "upload/admin_img" ;
            $file = $request->file('photo');
            //remove old image by unlink()
            @unlink( public_path('upload/admin_img/'. $data['photo'] ));
            $fileName = date('YmdHi').$file->getClientOriginalName();
            //move new image in upload folder
            $file->move($destination, $fileName);

            $data->update([
                'photo' => $fileName
            ]);
        }

        $data->save();

        $notification = array(

            'message' => 'Admin Profile Updated Sucessfully ',
            'alert-type' => 'success'
        );

        return back()->with($notification);

    }

    //adminProfileStore end


    //adminChangPassword start

    public function adminChangePassword()
    {

       $id = Auth::user()->id;
       $profileData = User::find($id);
       return view('admin.adminChangePassword',compact('profileData'));
    }

    //adminChangPassword end


    //adminUpdatePassword start
    public function adminUpdatePassword(Request $request)
    {

        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|same:confirm_password',
        ]);



        if(!Hash::check($request->old_password, Auth::user()->password))
        {

            $notification = array(
                'message' => 'Old Password does not match ',
                'alert-type' => 'error'
            );

            return back()->with($notification);
        }


        $id = Auth::user()->id;
        User::whereId($id)->update([
            'password' => Hash::make(request('new_password')),
        ]);

        $notification = array(
            'message' => 'Password Successfully Changed ',
            'alert-type' => 'success'
        );

        return  redirect('/admin/profile')->with($notification);


    }

    //adminUpdatePassword end




}
