<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\addemployee;

class LeaveRequest extends Model
{
    use HasFactory;

    protected $fillable = [
    	'addemployee_id',
    	'type',
    	'start_date',
    	'end_date',
    	'reason',
    	'status'
    ];

     public function employee()
    {
        return $this->belongsTo(addemployee::class,'addemployee_id','id');
        //$this ki Fk addemployee hai aur PK yahan pe addemployee ki table ki hai
    }
}
