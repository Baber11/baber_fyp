<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\addemployee;
use App\Models\dept;

class infoController extends Controller
{
    //

    // ---------------------------------------------------------------------------
    //                                INFO API
    // ---------------------------------------------------------------------------

	public function info()
	{
		$a= addemployee::all()->count();
		$d= dept::all()->count();

		$total = array(
			'totalemp'  => $a,
			'totaldept' => $d
		);

		return response()->json($total);
	}

}
