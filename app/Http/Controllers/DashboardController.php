<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addemployee;
use App\Models\dept;

class DashboardController extends Controller
{
    // Admin Dashboad view
	public function dashboard() {
    	//VIEW EMP ON ADMIN DASHBOARD

    	$getrec= addemployee::withTrashed()->get()->count();
        $a= addemployee::all()->count();
        $d= addemployee::onlyTrashed()->get()->count();
        $ad= dept::all()->count();

		$viewemp = addemployee::all();
		$dept = dept::all();
		return view('admin.dashboard', compact('viewemp', 'dept', 'getrec', 'a','d','ad'));

	}
}
