<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\addemployee;
use App\Models\designation;
use App\Models\designationname;
use App\Models\company;

class empprofileController extends Controller
{
    //
    // ---------------------------------------------------------------------------
    //                             EMP PROFILE API
    // ---------------------------------------------------------------------------

    public function empprofile($id){

        $emp= addemployee::find($id);

        $designation = designation::query()->where('addemployee_id', $id)->first();
        $new= $designation->designationname_id;
            //return $new;

        $designationname = designationname::query()->where('id',$new)->first();
        $empdes= $designationname->designation_names;

        $comp = company::first();

        $emp = array(
            'empid'         => $emp->id,
            'phone'         => $emp->phone_number,
            'email'         => $emp->email,
            'qualification' => $emp->qualification,
            'experience'    => $emp->experience,
            'des'           => $empdes,
            'company'       => $comp->company_name,
        );
        return response()->json($emp);
    }
}
