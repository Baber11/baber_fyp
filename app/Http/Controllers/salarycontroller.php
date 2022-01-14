<?php

namespace App\Http\Controllers;
use App\Models\dept;
use App\Models\addemployee;
use App\Models\account;
use App\Models\designation;
use App\Models\tax;
use App\Models\salary;
use App\Models\company;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use App; 


class salarycontroller extends Controller
{
    //
 public function salary()
 {   
    $dept= dept::all();
    $emp= addemployee::all();
       //dd($dept);
    return view('hr.salary', compact('dept', 'emp'));
 }

 function get($dep_id, $year, $month)
 {
   $data= addemployee::where("dept_id", $dep_id)->get();
   $emp=[];
   $count=0;
   Foreach($data as $x)
   {
    $check=  salary::where('emp_reg' , $x->id)->where('month',$month)->where('year',$year)->first();
    If($check==null)
    {
      $emp[$count]= $x;
      $count++;
   }
}
$data=$emp;
return Response::json($data);

}

   //proceed
function proceed($emp_id)
{
   $emp= addemployee::where("id", $emp_id)->first();


   $account= account::where("addemployee_id", $emp_id)->first();
   $des= designation::where("addemployee_id", $emp_id)->first();
      //dd($des->designationname, json_encode($des->designationname));
   $new= $des->designationname->designation_names;
   $tax = tax::all();
      //dd($des->basic_pay);

      // $data = array(
      //    "emp" => $emp,
      //    "emp" => $emp,
      //    "emp" => $emp,
      // );
   return Response::json(['emp'=> $emp , 'account' => $account, 'des'=> $des, 'new'=> $new, 'tax'=> $tax]);
   //return view('hr.salary', compact('emp'));
}

   //salary in DB
public function finalsalary(Request $request)
{
   $request->validate([
      'present_days' => 'max:2|required',
   ]);

   //dd("heelllooo guyss");
   $dname=dept::find($request->dept);
   //dd($dname->dept_name);
 //dd($request->emp_reg);
   //dd($request->dept);

   //dd(true == true ? 'yes' : 'no')
   $bonus= $request->bonus ? : 0;
   // dd($bonus);
   $incentives= $request->incentives ? : 0;
   //dd($request->bonus);

   $sal= salary::create([

      'year'                   =>        $request->year,
      'month'                  =>        $request->month,
      'dept'                   =>        $dname->dept_name,
      'emp_name'               =>        $request->emp_name,
      'emp_account'            =>        $request->emp_account,
      'designation'            =>        $request->designation,
      'basic_pay'              =>        $request->basic_pay,
      'travel_allowance'       =>        $request->travel_allowance,
      'medical_allowance'      =>        $request->medical_allowance,
      'total_days'             =>        $request->total_days,
      'present_days'           =>        $request->present_days,
      'absent_days'            =>        $request->absent_days,
      'p_fund'                 =>        $request->p_fund,
      'gst'                    =>        $request->gst,
      'income_tax'             =>        $request->income_tax,
      'bonus'                  =>        $bonus,
      'incentives'             =>        $incentives,
      'final_salary'           =>        $request->final_salary,
      'emp_reg'                =>        $request->emp_reg,
   ]);
   $sal->save();

   return redirect()->back()->with('success','Salary created successfully !');

}

//view salary record
public function viewsal()
{
  $view= salary::all();
  return view('hr.viewsalary', compact('view'));

}
//delete salary 
public function deletesalary($id)
{
   $del= salary::find($id);
   $del->delete();
   return redirect('viewsalary')->with('success', 'Employee Salary deleted successfully !');
}

//PAY SLIP PDF 
public function pdfslip($id)
{
    //dd($id);
  $comp= company::first();
    //dd($comp->company_name);
  $sal = salary::find($id);
     //dd($sal->emp_name);

  $amount= $sal->final_salary;
  return view('hr.pdfslip', compact('comp', 'sal', 'amount'));

}


// //check
// public function hpdf()
// {
//     $pdf= App::make('dompdf.wrapper');
//     $data= salary::all();
//     $pdf->loadView('hr.pdfslip',$data);
//     return $pdf->stream();
// }

//download
public function download($id)
{
   $comp= company::first();
   $sal = salary::find($id);
   $amount= $sal->final_salary;
   $pdf = PDF::loadView('hr.salarypdf',compact('comp', 'sal', 'amount'));
    // dd($pdf);
   return $pdf->download('payslip.pdf');

}

//VIEW SALARY REPORT
public function viewsalreport()
{
  $view= salary::all();
  return view('hr.salaryreport', compact('view'));

}

//VIEW PAY SLIP PDF 
public function viewpdfslip($id)
{
    //dd($id);
  $comp= company::first();
    //dd($comp->company_name);

  $sal = salary::find($id);
     //dd($sal->emp_name);

  $amount= $sal->final_salary;
  return view('hr.pdfslip', compact('comp', 'sal', 'amount'));
}

}
