<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class humanresource extends Model
{
    use HasFactory;
    protected $fillable= ['hrname','date_of_birth','gender','email','phone_number','address','date_of_joining', 'profile_image','emergency_name','relationship','emergency_contact','emergency_address','bank_name','account_num','iban_num','swift_code',];

    //hasone relation with users table
        public function usertable()
        {
            return $this->hasOne('App\Models\User');
            //$this k table ki pk is id aur Fk hai $this ki key jo dusre table mai Fk banegi 
        }
}
