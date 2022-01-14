<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class account extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates= ['deleted_at'];
    
    protected $fillable= [
        'addemployee_id', 'bank_name', 'account_type', 'account_num', 'iban_num', 'branch_address', 'branch_code', 'swift_code',];

        public function emp()
    {
        return $this->belongsTo(addemployee::class,'addemployee_id','id');
        //$this ki Fk addemployee hai aur PK yahan pe addemployee ki table ki hai
    }
}
