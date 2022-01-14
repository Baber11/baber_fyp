<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\salary;

class payslipController extends Controller
{
    //
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

        return response()->json($salary);
    }
}
