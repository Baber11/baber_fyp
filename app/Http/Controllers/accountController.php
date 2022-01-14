<?php

namespace App\Http\Controllers;
use App\Models\account;
use App\Models\addemployee;


use Illuminate\Http\Request;

class accountController extends Controller
{
    //

    // public function index()
    // {
    //     $emp= addemployee::all();
    //     return view('hr.accounts', compact('emp'));
    // }

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


   //insert account
    public function create(Request $request)
    {
        $request->validate([

            'id'            =>  'required|numeric',
            'bank_name'     =>  'required|min:3|max:191',
            'account_type'  =>  'required|min:3|max:191',
            'acc_num'       =>  'required|digits:9|numeric',
            'iban_num'      =>  'required|digits:12|numeric',
            'branch_add'    =>  'required|min:3|max:191',
            'branch_code'   =>  'required|digits:4|numeric',
            'swift_code'    =>  'required|max:8',
        ]); 
        
        $get = $request->id;
        $add = addemployee::find($get);
        $a   = addemployee::all();
        // $getname= $request->empname;
        // $g= addemployee::find($add)->where();

        $check= account::where('addemployee_id', $get)->first();
        if($check == null){

            if($get == $add->id){

                $insert= account::create([
                    'addemployee_id'     =>   $get,
                    'bank_name'          =>   $request->bank_name,
                    'account_type'       =>   $request->account_type,
                    'account_num'        =>   $request->acc_num,
                    'iban_num'           =>   $request->iban_num,
                    'branch_address'     =>   $request->branch_add,
                    'branch_code'        =>   $request->branch_code,
                    'swift_code'         =>   $request->swift_code,
                ]);

                $insert->save();


            }
            else{
                echo "Emp id does not matches our record";
            }
            return redirect()->back()->with('success','Employee account added successfully !');

        }
        else{
            echo "Account Already Exist";
            return redirect()->back()->with('error','Account Already Exist !');
        }

    }

    //view account
    public function view()
    {
        $view= account::all();
        return view('hr.viewaccounts', compact('view'));
    }

    //del account
    // public function delete($id)
    // {
    //     $del= account::find($id);
    //     $del->delete();

    //     return redirect()->back()->with('success', 'Employee Account deleted successfully !');
    // }

    //edit account
    public function edit($id)
    {
        $edit= account::find($id);
        return view('hr.editaccount', compact('edit'));
    }

    //update account
    public function update(Request $request)
    {
       $request->validate([

        'empid'         =>  'required|numeric',
        'bank_name'     =>  'required|min:3|max:191',
        'account_type'  =>  'required|min:3|max:191',
        'acc_num'       =>  'required|digits:9|numeric',
        'iban_num'      =>  'required|digits:12|numeric',
        'branch_add'    =>  'required|min:3|max:191',
        'branch_code'   =>  'required|digits:4|numeric',
        'swift_code'    =>  'required|max:8',
    ]); 

      $newrec= account::find($request->id);

        $newrec->addemployee_id     =  $request->empid;
        $newrec->bank_name          =  $request->bank_name;
        $newrec->account_type       =  $request->account_type;
        $newrec->account_num        =  $request->acc_num;
        $newrec->iban_num           =  $request->iban_num;
        $newrec->branch_address     =  $request->branch_add;
        $newrec->branch_code        =  $request->branch_code;
        $newrec->swift_code         =  $request->swift_code;


        $newrec->save();

        return redirect('viewaccounts')->with('success', 'Designation Record updated successfully !');
        }

}

