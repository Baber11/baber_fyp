<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salary extends Model
{
    use HasFactory;
    protected $fillable=['year', 'month', 'dept', 'emp_name', 'emp_account' ,'designation', 'basic_pay' ,'travel_allowance' ,  'medical_allowance' ,  'total_days' , 'present_days',    'absent_days', 'p_fund',  'gst' ,'income_tax', 'bonus', 'incentives', 'final_salary', 'emp_reg',];
}
