<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dept;

class deptController extends Controller
{
    //
    public function dept()
    {
        $dept= dept::all();
        return view('admin.adddept',compact('dept'));
    }

    //add dept
    public function adddept(Request $request)
    {
        $request->validate([
            'dept' => 'required|min:2|max:30',
        ]);

        $add= dept::create([
            'dept_name'   =>   $request->dept,
        ]);

        $add->save();

        return redirect()->back()->with('success','Department added successfully !');

    }

    //delete dept
    public function delete(Request $request)
    {
        
        $request->validate([
            'id' => 'required|numeric|unique:addemployees,dept_id',
        ]);

        dept::find($request->id)->delete();

        return redirect()->back()->with('success', 'Department deleted successfully !');

    }

    //edit
    function editdept($id)
    {
        
        $edit= dept::find($id);
        // dd($edit);
        return response()->json([
            'status'=>200,
            'edit'=> $edit,
        ]);
    }
    //update dept
     function updatedept(Request $request)
    {
        $update = dept::find($request->dept_id);
        //dd($update);

        $update->dept_name   =   $request->dept;
        

        $update->save();

        return redirect(route('admin.adddept'))->with('success','Department updated successfully !');

    }
}
