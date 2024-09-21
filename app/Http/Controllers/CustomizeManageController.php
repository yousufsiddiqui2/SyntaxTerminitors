<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customize;
use PDF;


class CustomizeManageController extends Controller
{
    public function cusmanagefun(){
        $customizefetch= customize::all();
        return view('Dashboard.customizemanage',compact('customizefetch'));
    }


    public function cusDelete($record){
        $pdelete = customize::where('id',$record)->delete();
        return redirect()->back();
}

     //PDF print
     public function print_pdf($id){

        $user = customize::find($id);

        $pdf = PDF::loadView('Dashboard.pdf',compact('user'));

        return $pdf->download('userdata.pdf');
    }
}
