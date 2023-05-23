<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboards.index',[
            'competitions' => Competition::all()
        ]);

    }
}
