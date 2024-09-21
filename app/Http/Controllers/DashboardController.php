<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboardfun(){
        $userfetch= User::all();
        return view('Dashboard.dashboard',compact("userfetch"));
    }

    
}
