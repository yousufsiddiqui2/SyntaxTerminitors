<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactus;

class ContactController extends Controller
{
    public function contactfun(){
        return view('contact');
    }


    // Contact Us Insert
    public function contactinsert(Request $req){
        $contact=new contactus();
        $contact->conname=$req->contactname;
        $contact->conemail=$req->contactemail;
        $contact->conphone=$req->contactphone;
        $contact->conmessage=$req->contactmessage;
        $contact->save();
        return redirect()->back();

    }
}
