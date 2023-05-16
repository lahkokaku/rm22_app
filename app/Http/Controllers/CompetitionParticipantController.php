<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;
use App\Models\CompetitionParticipant;

class CompetitionParticipantController extends Controller
{
    public function index(Competition $competitionId){
        $participants = CompetitionParticipant::where('competition_id',$competitionId->id)->get();
        
        return view('participants.index',[
            'participants' =>$participants,
            'competitions' => $competitionId,
        ]);
    }

    
}
