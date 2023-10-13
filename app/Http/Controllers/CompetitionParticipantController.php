<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;
use App\Models\CompetitionParticipant;

class CompetitionParticipantController extends Controller
{
    public function index(){  
        $participants = CompetitionParticipant::all();
        $competitions = Competition::all();
        
        return view('participants.index',[
            'participants' =>$participants,
            'competitions' => $competitions,
        ]);
    }

    
}
