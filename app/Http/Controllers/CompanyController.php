<?php

namespace App\Http\Controllers;
use App\Models\company;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    function edit()
    {
        $edit= company::first();
        //dd($edit);
        return view('hr.companysetting', compact('edit'));
    }

    //update
    function update(Request $request)
    {
        $update= company::first();
        $update->company_name       =     $request->company_name;
        $update->contact_person     =     $request->contact_person;
        $update->address            =     $request->address;
        $update->country            =     $request->country;
        $update->city               =     $request->city;
        $update->state              =     $request->state;
        $update->postal_code        =     $request->postal_code;
        $update->email              =     $request->email;
        $update->phone_number       =     $request->phone_number;
        $update->fax                =     $request->fax;
        $update->website_url        =     $request->website_url;

        $update->save();

        return redirect('companysetting');
    }
}
