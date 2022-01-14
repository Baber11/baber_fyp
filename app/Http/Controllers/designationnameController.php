<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\designationname;

class designationnameController extends Controller
{
    //

    //add designation name
      public function adddn(Request $request)

    {
         $request->validate([
            'add'=> 'required|min:3|max:191',
         ]);

         $a=designationname::create([
            'designation_names' => $request->add,
         ]);

         $a->save();
         return redirect()->back()->with('success','Designation name added successfully !');
    }

    //view all designations
      public function add()

    {
         $add=designationname::all();
         //dd($add);
          return view('hr.adddesignation',compact('add'));
    }

//delete designation name
      public function del($id)

    {
         $add=designationname::find($id);
         $add->forceDelete($id);
         return redirect()->back()->with('success','Designation name deleted successfully !');
    }

     public function edit($id)

    {
         $edit=designationname::find($id);
         return view('hr.editdesignationname',compact('edit'));
    }

    public function update(Request $request)
    {
         $request->validate([
            'add'=> 'required|min:3|max:191',
         ]);

         //$chck= designationname::all();
         //dd($chck->id);
         $newrec= designationname::find($request->id);

         // if($chck->designation_names != $request->add)
         // {
         $newrec->designation_names= $request->add;

         $newrec->save();

         return redirect('adddes')->with('success','Designation name updated successfully !');
        
     // }
     // else{
     //    echo "Designation Name Already Exist";
     //    return redirect()->back()->with('error','Designation Name Already Exist !');
     // }
    }

}
