<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Projects;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    public function index(){
        // return Projects::with(['image'])->get();
        return view('dashboard.projects.index')->with('data',Projects::with(['image', 'category' , 'SubCategory' , 'user'])->get());
    }


    public function edit($id){
        return view('dashboard.projects.edit')
        ->with('category',Category::get())
        ->with('sub_category',SubCategory::get())
        ->with('data',Projects::with(['image' , 'country'])->where('id',$id)->first());
    }



    public function create(){
        $fun = new Controller();
        return view('dashboard.projects.create')
        ->with('category',Category::get())
        ->with('sub_category',SubCategory::get())
        ->with('token_image' , $fun->generateUniqueTokenImage());
    }

    public function show($id){
        $ourTeam =  Projects::find($id);
        return response()->json($ourTeam);
    }

    public function store(Request $request) {
        $request->validate(['name' => 'required|string']);
        if (!Projects::where('name' , $request->name)->where('title' , $request->title)->exists()) {
            $category_id = $request['category_id'];
            $sub_category_id = $request['sub_category_id'];
            $ourTeam =  Projects::create([
            'name' => $request->input('name'),
            'token' => $request->input('token') ,
            'title' => $request->input('title') ,
            'subCategory_id' => $sub_category_id,
            'category_id' => $category_id,
         ]);
            $token = $ourTeam->id;
        }else {
            $token = Projects::select('id')->where('name' , $request->name)->first()['id'];
        }
        return $token;
    }

    public function update(Request $request) {
        $data = $request->json()->all();
        $ourTeam =  Projects::find($data['id']);
        $ourTeam->update($data);
        return response()->json($ourTeam, 200);
    }

    public function destroy($id) {
        $ourTeam =  Projects::find($id);
       $ourTeam->delete();
        return response()->json(null, 204);
    }
}
