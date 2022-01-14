<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeaveRequest;
use App\Models\addemployee;

class leaveRequestController extends Controller
{
    //view leave request
    public function leaves()
    {
    	
    	$leave = LeaveRequest::all();
    	return view('hr.leaves',compact('leave'));
    }



    //approve leave request
    public function approve(Request $request, $id)
    {  
        $newrec = LeaveRequest::find($id);
        //dd($newrec);
        $status= "approve";

        $newrec->addemployee_id       =   $newrec->addemployee_id;
        $newrec->type                 =   $newrec->type;
        $newrec->start_date           =   $newrec->start_date;
        $newrec->end_date             =   $newrec->end_date;
        $newrec->reason               =   $newrec->reason;
        $newrec->status               =   $status;

        $newrec->save();

        return redirect('leaves')->with('success', 'Leave Request Approved Successfully !');
    }



    //reject leave request
    public function reject(Request $request, $id)
    {
        $newrec = LeaveRequest::find($id);
        //dd($newrec);
        $status= "reject";

        $newrec->addemployee_id       =   $newrec->addemployee_id;
        $newrec->type                 =   $newrec->type;
        $newrec->start_date           =   $newrec->start_date;
        $newrec->end_date             =   $newrec->end_date;
        $newrec->reason               =   $newrec->reason;
        $newrec->status               =   $status;

        $newrec->save();

        return redirect('leaves')->with('not success', 'Leave Request Rejected !');
        
    }
}
