<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompetitionPayment;

class CompetitionPaymentController extends Controller
{
    public function index(){
        $unConfirmed = CompetitionPayment::where('is_confirmed',0)->get();
        $confirmed = CompetitionPayment::where('is_confirmed',1)->get();
        return view('payments.index',[
            'unConfirmed' => $unConfirmed,
            'confirmed' => $confirmed,
        ]);
    }

    public function confirm(CompetitionPayment $paymentId){
        $paymentId->update([
            'is_confirmed' => 1,
        ]);
        return redirect()->back()->with('success','Successfuly updated');
    }

    public function unConfirm(CompetitionPayment $paymentId){
        $paymentId->update([
            'is_confirmed' => 0,
        ]);
        return redirect()->back()->with('success','Successfuly updated');

    }
}
