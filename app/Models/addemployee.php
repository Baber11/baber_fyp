<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\LeaveRequest;

class addemployee extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates= ['deleted_at'];

    protected $fillable= [
        'dept_id', 'fname', 'lname', 'cnic', 'date_of_birth', 'gender', 'email', 'phone_number', 'address', 'city', 'qualification', 'experience', 'date_of_joining', 'password', 'confirm_password','profile_image',];
        // protected $hidden=['password','confirm_password'];


        //hasone relation with designation table
        public function designation()
        {
            return $this->hasOne('App\Models\designation');
            //$this k table ki pk is id aur Fk hai $this ki key jo dusre table mai Fk banegi 
        }

        //hasone relation with account table
        public function account()
        {
            return $this->hasOne('App\Models\account');
            //$this k table ki pk is id aur Fk hai $this ki key jo dusre table mai Fk banegi 
        }

     
        //employee id
        public function dept()
        {
            return $this->belongsTo(dept::class,'dept_id','id');
        //$this ki Fk addemployee hai aur PK yahan pe addemployee ki table ki hai
        }

        //employee leave
        public function empleave()
        {
            return $this->hasMany(LeaveRequest::class,'addemployee_id');
        //$this ki Fk addemployee hai aur PK yahan pe addemployee ki table ki hai
        }
}
