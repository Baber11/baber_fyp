<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dept extends Model
{
    use HasFactory;

    protected $fillable = ['dept_name', ];

     
        //hasone relation with emp table
        public function empdept()
        {
            return $this->hasOne('App\Models\addemployee');
        }

        public function employees()
        {
            return $this->hasMany('App\Models\addemployee');
        }

    
}
