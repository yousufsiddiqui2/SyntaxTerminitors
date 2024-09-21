<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customize;

class CustomizeController extends Controller
{
    public function customizefun(){
        return view('customize');
    }


    // Customize Insert
    public function customizeinsert(Request $req){
        $customizs=new customize();
        $customizs->Destination=$req->destination;
        $customizs->Days=$req->days;
        $customizs->Start_date=$req->start_date;
        $customizs->End_date=$req->end_date;
        $customizs->Travelmode=$req->travelmode;
        $customizs->Vehicle=$req->vehicle;
        $customizs->Total_persons=$req->total_persons;
        $customizs->Adults=$req->adults;
        $customizs->Children=$req->children;
        $customizs->Totalrooms=$req->totalrooms;
        $customizs->Departure_location=$req->departure_location;
        $customizs->Tour_guide=$req->tour_guide;
        $customizs->Group_category=$req->group_category;
        $customizs->Services=$req->services;
        $customizs->Requirements=$req->requirements;
        $customizs->Full_Name=$req->full_name;
        $customizs->Email_Address=$req->email_Address;
        $customizs->WhatsApp_number=$req->whatsApp_number;
        $customizs->save();
        return redirect()->back();
       
    }
    
}
