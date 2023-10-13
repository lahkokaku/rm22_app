<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
  
    public function index()
    {
        $competitions = Competition::all();
        return view("competitions.index",[
            'competitions' => $competitions
        ]);
    }
 
    public function create()
    {
        return view("competitions.create");
    }

    public function validateRequest($request){
        $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'price' => 'required',
            'start_time' => 'required|',
            'end_time' => 'required',
            'location' => 'required|string',
        ]);
    }
    public function store(Request $request)
    {
        //validate data 
        $this->validateRequest($request);
        Competition::create([
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'place' => $request->location,
        ]);
        return redirect()->route('competitions.index')->with('success','Competition has successfully added');
    }


 
    public function edit($id)
    {
        $competition = Competition::find($id);
        return view('competitions.edit',['competition' => $competition]);
    }

    
    public function update(Request $request, $id)
    {
        $competition = Competition::find($id);
        $this->validateRequest($request);

        $competition->update([
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'start_time'=> $request->start_time,
            'end_time'=> $request->end_time,
            'place'=> $request->location,

        ]);

        return redirect()->route('competitions.index')->with('success','Competition has successfully updated');
    }
 
    public function destroy($id)
    {
        $competition = Competition::find($id);
        $competition->delete();
        return redirect()->back()->with('success','Competition has successfully deleted');
    }

    public function showCompetition(){
        $competitions = Competition::all();
        
        if (request('search')){
            $competitions=Competition::where('name','LIKE','%'.request('search').'%')
            ->orWhere('category','LIKE','%'.request('search').'%')
            ->get();
        }

        return view('competitions.competitions-list',[
            'competitions' => $competitions
        ]);
    }


}
