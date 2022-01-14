<?php

namespace App\Http\Controllers;
use App\Models\addemployee;
use App\Models\designation;
use App\Models\designationname;

use Illuminate\Http\Request;

class designationController extends Controller
{
    //
    public function index()
    {
        $new= designationname::all();
        $emp=addemployee::all();
        //return view('hr.designation',['emp'=>$emp]);
        return view('hr.designation',compact('new','emp'));
    }

     public function get_image($id)
    {
        
        $emp=addemployee::find($id);

        if($emp==null)
        {
            return response()->json(['status'=>false]);
        }
        else
        {
            return response()->json(['status'=>true ,  'img'=> $emp->profile_image]);

        }
        
    }
    
    public function create(Request $request)
    {
        $request->validate([
            'id'        => 'required|numeric',
            'des'       => 'required',
            'pay'       => 'required|min:11|numeric',
            'travel'    => 'required|min:11|numeric',
            'medical'   => 'required|min:11|numeric',
        ]);

        $d= $request->des;
        $new=designationname::find($d);
        //dd($d);

        $get= $request->id;
        $emp=addemployee::find($get);
        //dd($emp->profile_image);
        

        $check= designation::where('addemployee_id',$get)->first();

        //dd($check);
        // return view('hr.designation', compact(emp));
        // $emp = addemployee::all();
        // $get = $request->id;

        if($check==null){

           if($get == $emp->id && $d==$new->id) {
            //return view('hr.designation',compact('emp'));

            $add= designation::create([
                'addemployee_id'      =>  $get,
                'designationname_id'  =>  $d,
                'basic_pay'           =>  $request->pay,
                'travel_allowance'    =>  $request->travel,
                'medical_allowance'   =>  $request->medical,
                  //dd("condition true");
            ]);

            $add->save();
        }

        else{
            echo "Emp id does not matches our record";
        }
        return redirect()->back()->with('success','Employee designation added successfully !');
    }
    else{
        echo "Designation Already Exist";
        return redirect()->back()->with('error','Designation Already Exist !');
    }
    
}

    //view all records
public function view()
{
    $view=designation::all();
    return view('hr.viewdesignation', compact('view'));
}

//     //dlt rec
// public function dlt($id)
//     {
//         $d= designation::find($id);
//         $d->forceDelete();
//         return redirect()->back()->with('success','Employee designation deleted successfully !');
//     }

    //edit rec
public function edit($id)
    {
        $e= addemployee::all();
        $d= designationname::all();
        $c= designation::find($id);
        //dd($e->designationname->designation_names);
         return view('hr.editdesignation',compact('e', 'c', 'd'));
    }

        //update rec
public function update(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'empid'   => 'required|numeric',
            'des'     => 'required',
            'pay'     => 'required|min:11|numeric',
            'travel'  => 'required|min:11|numeric',
            'medical' => 'required|min:11|numeric',
        ]);

        $newrec= designation::find($request->des_id);

        $newrec->addemployee_id       =    $request->empid;
        $newrec->designationname_id   =    $request->des;
        $newrec->basic_pay            =    $request->pay;
        $newrec->travel_allowance     =    $request->travel;
        $newrec->medical_allowance    =    $request->medical;


        $newrec->save();

        return redirect('viewdes')->with('success', 'Designation Record updated successfully !');





    //     $d= $request->des;
    //     $new=designationname::find($d);
    //     //dd($d);

    //     $get= $request->id;
    //     $emp=addemployee::find($get);
    //     $check= designation::where('addemployee_id',$get)->first();
    //     //dd($check);
    //     // return view('hr.designation', compact(emp));
    //     // $emp = addemployee::all();
    //     // $get = $request->id;
    //     if($check==null){
    //        if($get == $emp->id && $d==$new->id) {

    //         $add= designation::create([
    //             'addemployee_id'=> $get,
    //             'designationname_id' => $d,
    //             'basic_pay' => $request->pay,
    //             'travel_allowance'=> $request->travel,
    //             'medical_allowance'=> $request->medical,
    //               //dd("condition true");
    //         ]);

    //         $add->save();
    //     }

    //     else{
    //         echo "Emp id does not matches our record";
    //     }
    //     return redirect()->back()->with('success','Employee designation updated successfully !');
    // }
    // else{
    //     echo "Designation Already Exist";
    //     return redirect()->back()->with('error','Designation Already Exist !');
    // }
    }
} 