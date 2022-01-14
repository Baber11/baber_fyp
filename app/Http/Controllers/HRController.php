<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\humanresource;
use App\Models\addemployee;
use App\Models\salary;
use App\Models\LeaveRequest;

class HRController extends Controller
{
    //
    public function addhrview()
    {
        return view('admin.addhr');
    }

    //add new hr
    public function createhr(Request $request)
    {
        $request->validate([

            'hrname'                 =>      'required|min:3|max:191',
            'dob'                    =>      'required|date',
            'gender'                 =>      'required|min:3|max:191',
            'email'                  =>      'required|email|unique:humanresources',
            'number'                 =>      'required',
            'address'                =>      'required|min:3|max:191',
            'dateofjoining'          =>      'required|min:3|max:191',
            'profile_image'          =>      'required',
            'ename'                  =>      'required|min:3|max:191',
            'relationship'           =>      'required|min:3|max:191',
            'econtact'               =>      'required',
            'eaddress'               =>      'required|min:3|max:191',
            'bank_name'              =>      'required|min:3|max:191',
            'acc_num'                =>      'required|digits:9|numeric',
            'iban_num'               =>      'required|digits:12|numeric',
            'swift_code'             =>      'required|max:8',

        ]);

        if($request->hasfile('profile_image'))
        {
            $file= $request->file('profile_image');
            $extension= $file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $file->move('uploads/hrpic/', $filename);


        }

        $add=humanresource::create([


            'hrname'                    =>  $request->hrname,
            'date_of_birth'             =>  $request->dob,
            'gender'                    =>  $request->gender,
            'email'                     =>  $request->email,
            'phone_number'              =>  $request->number,  
            'address'                   =>  $request->address,  
            'date_of_joining'           =>  $request->dateofjoining,   
            'profile_image'             =>  $filename,
            'emergency_name'            =>  $request->ename,   
            'relationship'              =>  $request->relationship,
            'emergency_contact'         =>  $request->econtact ,   
            'emergency_address'         =>  $request->eaddress,
            'bank_name'                 =>  $request->bank_name,
            'account_num'               =>  $request->acc_num,
            'iban_num'                  =>  $request->iban_num,
            'swift_code'                =>  $request->swift_code,
            
        // 'password' =>\Hash::make($request->password) ,   
        // 'confirm_password' => \Hash::make($request->cpassword),
        ]);

        $add->save();

        return redirect()->back()->with('success','HR added successfully !');
    }


    //view data of hr
    public function allhr()
    {
        $allhr= humanresource::all();
        return view('admin.viewhr', compact('allhr'));
    }

    //delete data of hr
    public function deletehr($id)
    {
        $del= humanresource::find($id);
        $del->delete();

        return redirect()->back()->with('success', 'HR deleted successfully !');
    }

    //edit hr
    public function edithr($id)
    {
        $edit= humanresource::findOrFail($id);
        return view('admin.edithr', compact('edit'));
    }

    //now updating HR in DB
    public function updatehr(Request $request)
    {
   //dd($request->all());
        $request->validate([

            'hrname'                 =>      'required|min:3|max:191',
            'dob'                    =>      'required|date',
            'gender'                 =>      'required|min:3|max:191',
            'email'                  =>      'required|email',
            'number'                 =>      'required',
            'address'                =>      'required|min:3|max:191',
            'dateofjoining'          =>      'required|min:3|max:191',
            'profile_image'          =>      'required',
            'ename'                  =>      'required|min:3|max:191',
            'relationship'           =>      'required|min:3|max:191',
            'econtact'               =>      'required',
            'eaddress'               =>      'required|min:3|max:191',
            'bank_name'              =>      'required|min:3|max:191',
            'acc_num'                =>      'required|digits:9|numeric',
            'iban_num'               =>      'required|digits:12|numeric',
            'swift_code'             =>      'required|max:8',

        ]);
        $update= humanresource::find($request->hr_id);

        if($request->hasfile('profile_image'))
        {
            if(isset($update->id)){
                unlink(public_path('uploads\hrpic\\'. $update->profile_image));
            }

            $file= $request->file('profile_image');
            $extension= $file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $file->move('uploads/hrpic/', $filename);


            $update->hrname             =     $request->hrname;
            $update->date_of_birth      =     $request->dob;
            $update->gender             =     $request->gender;
            $update->email              =     $request->email;
            $update->phone_number       =     $request->number;
            $update->address            =     $request->address; 
            $update->date_of_joining    =     $request->dateofjoining;
            $update->profile_image      =     $filename;
            $update->emergency_name     =     $request->ename;   
            $update->relationship       =     $request->relationship;   
            $update->emergency_contact  =     $request->econtact;
            $update->emergency_address  =     $request->eaddress;   
            $update->bank_name          =     $request->bank_name;
            $update->account_num        =     $request->acc_num;
            $update->iban_num           =     $request->iban_num;
            $update->swift_code         =     $request->swift_code;

            $update->save();

            return redirect(route('admin.viewhr'))->with('success', 'HR Record updated successfully !');
        }
    }

//VIEW EMP IN ADMIN PANEL
    public function viewemp()
    {
        $viewemp = addemployee::all();
        return view('admin.viewemp', compact('viewemp'));
    }

//VIEW SALARY REPORT IN ADMIN PANEL
    public function viewsalary()
    {
        $sal = salary::all();
        return view('admin.viewsalary', compact('sal'));
    }

    //VIEW LEAVE REQUEST IN ADMIN PANEL
    public function viewleaves()
    {
        $leave = LeaveRequest::all();
        return view('admin.viewleaves',compact('leave'));
    }

    //VIEW COMPANY SITE IN ADMIN PANEL
    public function viewcompanysite()
    {
        return view('admin.companysite');
    }


    
}
