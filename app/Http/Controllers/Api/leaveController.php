<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\addemployee;
use App\Models\LeaveRequest;

class leaveController extends Controller
{
    //
    // ---------------------------------------------------------------------------
    //                             LEAVE REQUEST API
    // ---------------------------------------------------------------------------
    public function leave(Request $request, addemployee $employee)
    {
    	$leave = LeaveRequest::create([
    		'addemployee_id' => $employee->id,
    		'type' => $request->type,
    		'start_date' => $request->start_date,
    		'end_date' => $request->end_date,
    		'reason' => $request->reason,
    		'status' => $request->status,
    	]);

    	if($leave){
    		return "Leave added";
    	}
    	return 0;
    }
}
