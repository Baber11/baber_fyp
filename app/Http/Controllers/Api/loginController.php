<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\addemployee;
use App\Models\designation;
use App\Models\designationname;
use App\Models\dept;

class loginController extends Controller
{
    //
    // ---------------------------------------------------------------------------
    //                             LOGIN API
    // ---------------------------------------------------------------------------
    public function login(Request $request)
    {
        // $request->email


        
        $emp = addemployee::query()->where('email', $request->email)
        ->where('password', $request->password)->first();

        
        if($emp){

            // //$dept = $emp->dept;
            // //return $dept;
            // $designation = designation::query()->where('addemployee_id', $emp->id)->first();
            // $new= $designation->designationname_id;
            // //return $new;

            // $designationname = designationname::query()->where('id',$new)->first();
            // $empdes= $designationname->designation_names;

            // $employee = array(
            //     'id'   => $emp->id,
            //     'name' => $emp->fname.' '.$emp->lname,
            //     // 'dept' => $dept ? $dept->dept_name : 0,
            //     'img'  => $emp->profile_image,
            //     'des'  => $empdes,
            // );

//);
            return response()->json('hello');
            // return true;
        }
        return 'bye';
    }

}
