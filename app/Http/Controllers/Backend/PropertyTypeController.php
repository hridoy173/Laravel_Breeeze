<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\PropertyType;

class PropertyTypeController extends Controller
{
    //allType() start

    public function allType(Request $request)
    {
        $allType = PropertyType::all();

        return view('backend.property.all_type',compact('allType'));
    }
    //allType End

    //start addType()
    public function addType()
    {
        return view('backend.property.add_type');

    }
    //end addTYpe()


    //start addTypeStore()

    public function addTypeStore(Request $request)
    {
        $request->validate([
            'type_name' => 'required|unique:property_types',
            'type_icon' => 'required',

        ]);

        PropertyType::create([
            'type_name' => $request->type_name,
            'type_icon' => $request->type_icon
        ]);

        $notification = array(
            'message' => 'Propery insert Successfully',
            'alert-type' => 'info'
        );

        return  redirect('/all/type')->with($notification);
    }
    //end addTypeStore()

    //start editType()
    public function editType(Request $request,$id)
    {
        $type = PropertyType::find($id);

        return view('backend.property.edit_type',compact('type'));

    }
    //end editType()


    //start updateType()
    public function updateType(Request $request,$id)
    {
        $type = PropertyType::findOrFail($id);

        $type->update([

            'type_name' => request('type_name'),
            'type_icon' => request('type_icon'),

        ]);

        $notification = array(
            'message' => 'Propery update Successfully',
            'alert-type' => 'info'
        );

        return  redirect('/all/type')->with($notification);
    }
    //end updateType()


    //strat deleteType

    public function deleteType($id)
    {
        $type = PropertyType::findOrFail($id);

        $type->delete();

        $notification = array(
            'message' => 'Propery delete Successfully',
            'alert-type' => 'warning'
        );

        return  redirect('/all/type')->with($notification);

    }

    //end deleteType


}
