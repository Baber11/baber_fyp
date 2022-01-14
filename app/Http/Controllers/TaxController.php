<?php

namespace App\Http\Controllers;
use App\Models\tax;

use Illuminate\Http\Request;

class TaxController extends Controller
{
    //
    function insert(Request $request)
    {
        $request->validate([
            'taxname'       => 'required|min:3|max:191',
            'taxpercent'    => 'required|min:2|max:191',
            'status'        => 'required',
        ]);

        $tax= tax::create([
            'tax_name'      => $request->taxname,
            'tax_percent'   => $request->taxpercent,
            'status'        => $request->status,
        ]);

        // $tax= new tax;
        // $tax->tax_name      =   $request->input('taxname');
        // $tax->tax_percent   =   $request->input('taxpercent');
        // $tax->status        =   $request->input('status');
        $tax->save();

        return redirect()->back()->with('success','Tax added successfully !');
    }

    //view
    public function view()
    {
        $view= tax::all();
        return view('hr.tax', compact('view'));
    }

    //edit
    function edit($id)
    {
        $edit= tax::find($id);
        return response()->json([
            'status'=>200,
            'edit'=> $edit,
        ]);
    }

    //     $edit->tax_name           = $request->taxname;
    //     $edit->tax_percent        = $request->taxpercent;
    //     $edit->status             = $request->status;


    //     $edit->save();

    //     return redirect('viewtax')->with('success','tax updated successfully !');
    // }

    function update(Request $request)
    {
        $update = tax::find($request->tax_id);
        //dd($update);

        $update->tax_name           = $request->taxname;
        $update->tax_percent        = $request->taxpercent;
        $update->status             = $request->status;
        

        $update->save();

        return redirect('viewtax')->with('success','Tax updated successfully !');

    }

    //delete tax
    function delete(Request $request)
    {
        $tax_id = $request->input('deletetaxid');
        $dlt    = tax::find($tax_id);
        $dlt->delete();
        return redirect('viewtax')->with('success','Tax deleted successfully !');
    }

}
