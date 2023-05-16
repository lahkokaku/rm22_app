<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;
use App\Models\CompetitionPayment;
use App\Http\Controllers\Controller;
use App\Models\CompetitionParticipant;

class CompetitionRegistrationController extends Controller
{

    public function create(Competition $competitionId){
        return view('competition-registrations.create',[
            'competition' => $competitionId,
        ]);
    }

    public function validateRequest($request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'phone_number' => 'required|numeric',
            'gender' => 'required',
            'birth_date' => 'required',
            'additional_notes' => 'nullable|string',
            'account_number' => 'required|numeric',
            'account_name' => 'required|string',
            'transfer_proof_bank' => 'nullable|mimes:jpeg,jpg,png|max:1999',
        ]);
    }
    public function store(Request $request){
        $this->validateRequest($request);
        $pic = $request->name;
        $fileName = str_replace(' ', '-', $pic );
        $fileName = preg_replace('/[^A-Za-z0-9\-]/', '', $fileName);
        $fileName = str_replace('-', '_', $fileName);
        $current = time();

        if ($request->hasFile('transfer_proof_bank')){
            $extension = $request->file('transfer_proof_bank')->getClientOriginalExtension();
            $fixedName = $fileName.'_'.$current.'.'.$extension;
            $path = $request->file("transfer_proof_bank")->storeAs("public/transfer_proof",$fixedName);
        }

        $competitionParticipant = CompetitionParticipant::create([
            'competition_id' => $request->competition_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'gender' => $request->gender,
            'birth_date' => $request->birth_date,
            'additional_notes' => $request->additional_notes,
        ]);
        CompetitionPayment::create([
            'competition_id' => $request->competition_id,
            'competition_participant_id' =>$competitionParticipant->id,
            'account_number' => $request->account_number,
            'account_name' => $request->account_name,
            'is_confirmed' => 0,
            'payment_proof' => $fixedName,
        ]);

        return redirect()->route('competitions.show-competitions')->with('success','Successfuly Registered');
    }

    public function edit(CompetitionParticipant $participantId, CompetitionPayment $paymentId){
        return view('competition-registrations.edit',[
            'participant' =>$participantId,
            'payment' => $paymentId 
        ]);
    }

    public function update(Request $request, CompetitionParticipant $participantId, CompetitionPayment $paymentId ){
        $this->validateRequest($request);
        $participantId->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'gender' => $request->gender,
            'birth_date' => $request->birth_date,
            'additional_notes' => $request->additional_notes,
        ]);

        $paymentId->update([
            'account_number' => $request->account_number,
            'account_name' => $request->account_name,
        ]);
        return redirect()->back()->with('success','Sucessfuly Updated');
    }
}
