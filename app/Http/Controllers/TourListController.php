<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addtour;

class TourListController extends Controller
{
    public function tourlistfun(){
        $list= addtour::all();
        return view('Dashboard.tourlist',compact('list'));
    }
}
