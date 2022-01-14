<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class designationname extends Model
{
    use HasFactory;
    protected $fillable= [
        'designation_names',];


    public function designation()

    {
        return $this->hasOne('App\Models\designation'); 
    }

    //  public function designations()
    // {
    //     return $this->hasMany('App\Models\designation');
    // }
}
