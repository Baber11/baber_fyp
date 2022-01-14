<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;
    protected $fillable= [
        'company_name','contact_person','address','country', 'city', 'state', 'postal_code', 'email', 'phone_number', 'fax', 'website_url',];
    }
