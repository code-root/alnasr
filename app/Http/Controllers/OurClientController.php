<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\OurClient;
use Illuminate\Http\Request;

class OurClientController extends Controller
{

    public function index(){
        // return OurClient::with(['image'])->get();
        return view('dashboard.our_client.index')->with('OurClient',OurClient::with(['image'])->get());
    }


    public function edit($id){
        // return OurClient::with(['image'])->get();
        return view('dashboard.our_client.edit')->with('OurClient',OurClient::with(['image'])->where('id',$id)->first())
        ->with('category' , Category::get());
    }



    public function create(){
        $fun = new Controller();
        return view('dashboard.our_client.create')
        ->with('category' , Category::get())
        ->with('token_image' , $fun->generateUniqueTokenImage());
    }

    public function show($id){
        $ourClient =  OurClient::find($id);
        return response()->json($ourClient);
    }

    public function store(Request $request) {
        $request->validate(['name' => 'required|string']);
        if (!OurClient::where('name' , $request->name)->exists()) {
            $ourClient =  OurClient::create([
                'name' => $request->input('name'),
                'categories_id' => $request->input('categories_id'),
            'token' => $request->input('token')
         ]);
            $token = $ourClient->id;
        }else {
            $token = OurClient::select('id')->where('name' , $request->name)->first()['id'];
        }
        return $token;
    }

    public function update(Request $request) {
        $data = $request->json()->all();
        $ourClient =  OurClient::find($data['id']);
        $ourClient->update($data);
        return response()->json($ourClient, 200);
    }

    public function destroy($id) {
        $ourClient =  OurClient::find($id);
       $ourClient->delete();
        return response()->json(null, 204);
    }
}
