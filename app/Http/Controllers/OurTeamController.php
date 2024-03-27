<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\OurTeam;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{

    public function index(){
        // return OurTeam::with(['image'])->get();
        return view('dashboard.our_team.index')->with('ourTeam',OurTeam::with(['image' , 'categories'])->get());
    }


    public function edit($id){
        return view('dashboard.our_team.edit')
        ->with('category' , Category::get())
        ->with('ourTeam',OurTeam::with(['image' , 'categories'])->where('id',$id)->first());
    }



    public function create(){
        $fun = new Controller();
        $category = Category::get();
        return view('dashboard.our_team.create')
        ->with('category' , $category)
        ->with('token_image' , $fun->generateUniqueTokenImage());
    }

    public function show($id){
        $ourTeam =  OurTeam::find($id);
        return response()->json($ourTeam);
    }

    public function store(Request $request) {
        $request->validate(['name' => 'required|string']);
        if (!OurTeam::where('name' , $request->name)->where('job_name' , $request->job_name)->exists()) {
            $ourTeam =  OurTeam::create(['name' => $request->input('name'),
            'token' => $request->input('token') ,
            'job_name' => $request->input('job_name') ,
            'categories_id' => $request->input('categories_id')
         ]);
            $token = $ourTeam->id;
        }else {
            $token = OurTeam::select('id')->where('name' , $request->name)->first()['id'];
        }
        return $token;
    }

    public function update(Request $request) {
        $data = $request->json()->all();
        $ourTeam =  OurTeam::find($data['id']);
        $ourTeam->update($data);
        return response()->json($ourTeam, 200);
    }

    public function destroy($id) {
        $ourTeam =  OurTeam::find($id);
       $ourTeam->delete();
        return response()->json(null, 204);
    }
}
