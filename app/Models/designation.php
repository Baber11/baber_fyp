<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class designation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates= ['deleted_at'];

    protected $fillable= [
        "addemployee_id","designationname_id", "basic_pay", "travel_allowance", "medical_allowance"];


    public function emp()
    {
        return $this->belongsTo(addemployee::class,'addemployee_id','id');
        //$this ki Fk addemployee hai aur PK yahan pe addemployee ki table ki hai
    }
//Fk aa rae kahan se
    public function designationname()
    {
        return $this->belongsTo(designationname::class, 'designationname_id', 'id');
    }

    // //hasmany
    //   public function designationnames()
    // {
    //     return $this->hasMany('App\Models\designationname');
    // }
}
