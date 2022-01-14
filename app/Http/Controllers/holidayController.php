<?php

namespace App\Http\Controllers;
use App\Models\holiday;

use Illuminate\Http\Request;

class holidayController extends Controller
{
    //
    public function insert(Request $request)
    {
         $request->validate([
            'holiday_name'        =>  'required|min:3|max:191',
            'holiday_date'       =>   'required|date',
            
        ]);

          $add= holiday::create([
                'holiday_name'      =>  $request->holiday_name,
                'holiday_date'      =>  $request->holiday_date,
                
            ]);

            $add->save();
            return redirect()->back()->with('success','Holiday added successfully !');

    }

    //view
    public function view()
    {
        $view= holiday::all();
        return view('hr.holidays', compact('view'));
    }

    //delete
    public function delete($id)
    {
        $view= holiday::find($id);
        $view->delete();

        return redirect()->back()->with('success', 'Holiday Record deleted successfully !');
    }

    public function edit($id)
    {
        $edit= holiday::find($id);
        return view('hr.editholiday', compact('edit'));
    }

     public function update(Request $request)
    {
       $request->validate([
            'holiday_name'        =>  'required|min:3|max:191',
            'holiday_date'       =>   'required|date',
            
        ]);
       $newrec= holiday::find($request->id);

         
         $newrec->holiday_name   =   $request->holiday_name;
         $newrec->holiday_date   =   $request->holiday_date;

         $newrec->save();

         return redirect('holidays')->with('success','Hooliday updated successfully !');
    }
}
