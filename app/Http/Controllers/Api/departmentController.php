<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\dept;

class departmentController extends Controller
{
    //
    
    // ---------------------------------------------------------------------------
    //                             DEPARTMENT API
    // ---------------------------------------------------------------------------

    public function department()
    {
        $department= dept::all();
        return response()->json($department);

    }


}
