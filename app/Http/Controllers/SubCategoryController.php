<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{

    //our_work
    //blog
    //services
    public function index(Request $request){
        $category = Category::get();
        return view('dashboard.subCategory.index')->with('subCategory',SubCategory::with(['image' , 'category'])->get())
        ->with('category' ,$category);

    }


    public function edit($id){
        // return SubCategory::with(['image'])->get();
        $category = Category::get();
        return view('dashboard.subCategory.edit')->with('subCategory',SubCategory::with(['image' , 'category'])->where('id',$id)->first())
        ->with('category' ,$category);

    }



    public function create(){
        $fun = new Controller();
        $category = Category::get();
        return view('dashboard.subCategory.create')
        ->with('token_image' , $fun->generateUniqueTokenImage())
        ->with('category' ,$category);
    }

    public function show($id){
        $category = SubCategory::find($id);
        return response()->json($category);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'category_id' => 'required|string',
        ]);
        if (!SubCategory::where('name' , $request->name)->where('category_id' , $request->category_id)->exists()) {
            $category = SubCategory::create([
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),
            'token' => $request->input('token'),

        ]);
            $token =  $category->id;
        }else {
            $token = SubCategory::select('id')->where('category_id' , $request->category_id)->first()['id'];
        }
        return $token;
    }

    public function update(Request $request) {
        $data = $request->json()->all();
      $category = SubCategory::where('id',$data['id']);
      $category->update($data);
      return response()->json($category, 200);
  }

    public function destroy($id) {
        $category = SubCategory::find($id);
        $category->delete();
        return response()->json(null, 204);
    }
}
