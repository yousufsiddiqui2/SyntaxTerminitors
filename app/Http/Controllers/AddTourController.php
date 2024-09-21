<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addtour;

class AddTourController extends Controller
{
    public function addtourfun()
    {
        return view('dashboard.addtour');
    }
    public function tourdetailsfun()
    {
        return view('/tourdetail');
    }
    // Add tour
    public function adtourfun(Request $req)
    {
        $file = $req->gallery;
        $filename = time().".".$file->extension();
        $file->move(public_path("tours"),$filename);
        $c = new addtour();
        $c->Listing_title = $req->list_title;
        $c->Category = $req->category;
        $c->City = $req->city;
        $c->Address = $req->address;
        $c->State = $req->state;
        $c->Zip_code = $req->zipcode;
        $c->upload_Gallery = $filename;
        $c->Description = $req->description; 
        $c->Phone = $req->phone;
        $c->Website = $req->website;
        $c->Email = $req->email;
        $c->Price_title = $req->title_price;
        // $c->Price_description = $req->price_description; // Corrected here
        $c->Price = $req->price;
       
        $c->save();
        return redirect()->back();
    }
}
