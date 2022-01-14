<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\humanresource;

class hrprofileController extends Controller
{
    //
    public function hrprofile()
    {
        $profile = humanresource::first();

        // if(!$profile){
        //     return abort(404);
        // }

        return view('hr.hrprofile',compact('profile'));
    }

    //sidenav hr display
    public function sidenavhr()
    {
        $hrname = humanresource::first();
        //dd($hrname->hrname);
        return view('hr.sidenav',compact('hrname'));
    }
}
