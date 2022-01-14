<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addemployee;
use App\Models\designation;
use App\Models\designationname;
use App\Models\company;
use App\Models\dept;
use App\Models\salary;

class empController extends Controller
{
    // ---------------------------------------------------------------------------
    //                             LOGIN API
    // ---------------------------------------------------------------------------
    public function login(Request $request)
    {
        $emp = addemployee::query()->where('email', $request->email)
        ->where('password', $request->password)->first();

        
        if($emp){

            //$dept = $emp->dept;
            //return $dept;
            $designation = designation::query()->where('addemployee_id', $emp->id)->first();
            $new= $designation->designationname_id;
            //return $new;

            $designationname = designationname::query()->where('id',$new)->first();
            $empdes= $designationname->designation_names;

            $employee = array(
                'id'   => $emp->id,
                'name' => $emp->fname.' '.$emp->lname,
                // 'dept' => $dept ? $dept->dept_name : 0,
                'img'  => $emp->profile_image,
                'des'  => $empdes,
            );

            return $employee;
        }
        return ['message' => "Credentials Wrong"];
    }


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
        return $emp;
    }


    // ---------------------------------------------------------------------------
    //                             DEPARTMENT API
    // ---------------------------------------------------------------------------

    public function department()
    {
        $department= dept::all();
        return $department;

    }


    // ---------------------------------------------------------------------------
    //                                INFO API
    // ---------------------------------------------------------------------------

    public function info()
    {
        $a= addemployee::all()->count();
        $d= dept::all()->count();

        $total = array(
            'totalemp'  => $a,
            'totaldept' => $d
        );

        return $total;
    }


    // ---------------------------------------------------------------------------
    //                                PAYSLIP API
    // ---------------------------------------------------------------------------

    public function payslip($id)
    {
        $sal = salary::query()->where('emp_reg', $id)->first();

        $salary = array(

            'year'                 => $sal->year,
            'month'                => $sal->month,
            'dept'                 => $sal->dept,
            'emp_name'             => $sal->emp_name,
            'emp_account'          => $sal->emp_account,
            'designation'          => $sal->designation,
            'basic_pay'            => $sal->basic_pay,
            'travel_allowance'     => $sal->travel_allowance,
            'medical_allowance'    => $sal->medical_allowance,
            'total_days'           => $sal->total_days,
            'present_days'         => $sal->present_days,
            'absent_days'          => $sal->absent_days,
            'p_fund'               => $sal->p_fund,
            'gst'                  => $sal->gst,
            'income_tax'           => $sal->income_tax,
            'bonus'                => $sal->bonus,
            'incentives'           => $sal->incentives,
            'final_salary'         => $sal->final_salary
        );

        return $salary;
    }
}
