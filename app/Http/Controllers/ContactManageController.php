<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactus;


class ContactManageController extends Controller
{
    public function contactmanagefun(){
        $contact = contactus::all();
        return view('Dashboard.contactmanage',compact('contact'));
    }

    public function conDelete($record){
        $cdelete = contactus::where('id',$record)->delete();
        return redirect()->back();}


   
}
