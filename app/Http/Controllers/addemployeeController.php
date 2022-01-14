<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addemployee;
use App\Models\dept;
use App\Models\account;
use App\Models\designation;

class addemployeeController extends Controller
{
    //

    public function index()
    {
        $new= dept::all();
        //dd($new);
        return view('hr.addemployee', compact('new'));
    }
    public function create(Request $request)
    {
        //dd($request->all());

        $request->validate([

            'fname'           => 'required|min:3|max:191',
            'lname'           => 'required|min:3|max:191',
            'cnic'            => 'regex:/^[0-9]{5}-[0-9]{7}-[0-9]$/|unique:addemployees',
            'dob'             => 'required|date',
            'gender'          => 'required|min:3|max:191',
            'email'           => 'required|email|unique:addemployees',
            'number'          => 'required|min:11|numeric',
            'address'         => 'required|min:3|max:191',
            'city'            => 'required|min:3|max:191',
            'qualification'   => 'required|min:3|max:191',
            'ex'              => 'required|numeric|min:1',
            'dept'            => 'required',
            'dateofjoining'   => 'required|min:3|max:191',
            'password'        => 'required|min:6',
            'cpassword'       => 'required|same:password',
            'profile_image'   => 'required',
// regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/
        ]);
       // dd("done");

        if($request->hasfile('profile_image'))
        {
            $file= $request->file('profile_image');
            $extension= $file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $file->move('uploads/emppic/', $filename);


        }


        $add=addemployee::create([


            'dept_id'          =>  $request->dept,
            'fname'            =>  $request->fname,
            'lname'            =>  $request->lname,
            'cnic'             =>  $request->cnic,
            'date_of_birth'    =>  $request->dob,
            'gender'           =>  $request->gender,  
            'email'            =>  $request->email,  
            'phone_number'     =>  $request->number,   
            'address'          =>  $request->address,
            'city'             =>  $request->city, 
            'qualification'    =>  $request->qualification, 
            'experience'       =>  $request->ex,   
            'date_of_joining'  =>  $request->dateofjoining,
            'password'         =>  $request->password ,   
            'confirm_password' =>  $request->cpassword,
            'profile_image'    =>  $filename,
        // 'password' =>\Hash::make($request->password) ,   
        // 'confirm_password' => \Hash::make($request->cpassword),
        ]);

        $add->save();

        return redirect()->back()->with('success','Employee added successfully !');
    }
//view data of emp
    public function allemp()
    {
        $allemp= addemployee::all();
    //dd($allemp[0]->dept->dept_name);
    //compact k andar var aayega
        return view('hr.viewemployee', compact('allemp'));
    }



// VIEW TERMINATED EMPLOYEES
    //--------------------------
    //view emp to terminate
    public function viewterminateemp()
    {
        $allemp= addemployee::all();
    //dd($allemp[0]->dept->dept_name);
    //compact k andar var aayega
        return view('hr.teremp', compact('allemp'));
    }



// TERMINATE emp
    public function terminate($id)
    {
        $del= addemployee::find($id);
        $delacc=$del->account;
        $delacc->delete();
        $deldes=$del->designation;
        $deldes->delete();
        $del->delete();
        return redirect()->back()->with('success', 'Employee Terminated !');
    }

    //view terminated emp only
    public function terminatedemp()
    {
        $allemp= addemployee::onlyTrashed()->get();
        return view('hr.terview', compact('allemp'));
    }

//get record of emp by edit link
    public function getrec($id)
    {
        $getrec= addemployee::findOrFail($id);
        $d= dept::all();
        //dd($d);
    //dd($getrec);
        return view('hr.editemp', compact('getrec','d'));

    }
//now updating emp in DB
    public function update(Request $request)
    {
   //dd($request->all());

        $request->validate([

            'fname'            => 'required|min:3|max:191',
            'lname'            => 'required|min:3|max:191',
            'cnic'             => 'regex:/^[0-9]{5}-[0-9]{7}-[0-9]$/',
            'dob'              => 'required|date',
            'gender'           => 'required|min:3|max:191',
            'email'            => 'required|email',
            'number'           => 'required|min:11|numeric',
            'address'          => 'required|min:3|max:191',
            'city'             => 'required|min:3|max:191',
            'qualification'    => 'required|min:3|max:191',
            'ex'               => 'required|numeric|min:1',
            'dept'             => 'required',
            'dateofjoining'    => 'required|min:3|max:191',
            'password'         => 'required|min:6',
            'cpassword'        => 'required|same:password',
            'profile_image'    => 'required',
// regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/
        ]);

        $newrec= addemployee::find($request->emp_id);

        if($request->hasfile('profile_image'))
        {
            if(isset($newrec->id)){
                unlink(public_path('uploads\emppic\\'. $newrec->profile_image));
            }

            $file= $request->file('profile_image');
            $extension= $file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $file->move('uploads/emppic/', $filename);


            $newrec->fname             =   $request->fname;
            $newrec->lname             =   $request->lname;
            $newrec->cnic             =   $request->cnic;
            $newrec->date_of_birth     =   $request->dob;
            $newrec->gender            =   $request->gender;
            $newrec->email             =   $request->email;
            $newrec->phone_number      =   $request->number; 
            $newrec->address           =   $request->address;
            $newrec->city              =   $request->city;
            $newrec->qualification     =   $request->qualification;
            $newrec->experience        =   $request->ex;   
            $newrec->dept_id           =   $request->dept;   
            $newrec->date_of_joining   =   $request->dateofjoining;
            $newrec->password          =   $request->password;   
            $newrec->confirm_password  =   $request->cpassword;
            $newrec->profile_image     =   $filename;

            $newrec->save();

            return redirect('allemp')->with('success', 'Employee Record updated successfully !');
        }
    }

//------------------------------------------------------------------
    //DASHBOARD
//============================================================
//view rec on dashboard
    public function viewrec()
    {
        $getrec= addemployee::withTrashed()->get()->count();
        $a= addemployee::all()->count();
        $d= addemployee::onlyTrashed()->get()->count();
        $ad= dept::all()->count();
        return view('/hr.dashboard', compact('getrec','a','d','ad'));
    }

} 
