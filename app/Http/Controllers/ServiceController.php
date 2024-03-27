<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index(){
        $data = Service::with(['category'])->get();
        return view('dashboard.services.index', compact('data'));
    }

    public function edit(Service $service)
{
    $categories = Category::all();
    return view('dashboard.services.edit', compact('service', 'categories'));
}

        public function update(Request $request, Service $service) {
            $validatedData = $request->validate([
                'category_id' => 'required|exists:categories,id',
                'name' => 'required|string',
                'price' => 'required',
                'features' => 'required|string',
                'price_before' => 'required',
                'description' => 'required|string',
            ]);
            $validatedData['non_features'] = 'NA';

            $service->update($validatedData);

            return redirect()->route('services.index')->with('success', 'Service updated successfully!');
        }

    public function create()
    {
        $categories = Category::all();
        return view('dashboard.services.create', compact('categories'));
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string',
            'features' => 'required|string',
             'price' => 'required',
             'description' => 'required',
             'price_before' => 'required',
            // 'non_features' => 'required|string',
        ]);
        $validatedData['non_features'] = 'NA';

        Service::create($validatedData);

        return redirect()->route('services.index')->with('success', 'Service added successfully!');
    }

        public function destroy($id) {
        $ourClient =  Service::find($id);
       $ourClient->delete();
        return response()->json(null, 204);
    }
}
