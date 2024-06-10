<?php

namespace App\Http\Controllers;
use App\Models\home;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardHome extends Controller
{
    public function index(){
        $home = home::all();
        return view('dashboardhome', ['home'=>$home]);
    }
    
}
