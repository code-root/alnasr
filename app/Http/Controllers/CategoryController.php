<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\OurClient;
use App\Models\OurTeam;
use App\Models\Projects;
use App\Models\Service;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function  blog () {

    }

    public function portfolio ( ) {
        $projects = Projects::with(['image', 'category' , 'SubCategory' , 'user'])->where('subCategory_id','=' , 0)->latest()->take(12)->get();
        $category = Category::get();
        $services =  Service::with(['category'])->latest()->take(3)->get();

        return view('page-about'
        , compact(
            'projects',
            'category',
            'services',
        ));

    }

    public function contact_us () {

        return view('contact');
    }

    public function showByCategory($category){
        // return 100 ;
        $categoryid = Category::with(['image'])->where('name', 'like' , "%$category%")->first() ?? 0;
        $blog = Blog::with(['image'])->where('category_id', $categoryid->id)->get();
        $projects = Projects::with(['image', 'category' , 'SubCategory' , 'user'])->where('category_id' , $categoryid->id)->latest()->take(12)->get();
        $subCategory = SubCategory::with(['image' , 'category'])->where('category_id' , $categoryid->id)->get();
         $services =  Service::with(['category'])->where('category_id' , $categoryid->id)->get();
        return view('blog_in_category', [
            'services' => $services,
            'blog' => $blog,
            'subCategory' => $subCategory,
            'projects' => $projects,
            'category' => $categoryid]);
    }


    public function showBySudCategory($category){
        // return 100 ;
        $categoryid = SubCategory::with(['image'])->where('name', 'like' , "%$category%")->first() ?? 0;
        $blog = Blog::with(['image'])->where('subCategory_id', $categoryid->id)->get();
        $projects = Projects::with(['image', 'category' , 'SubCategory' , 'user'])->where('subCategory_id' , $categoryid->id)->latest()->take(12)->get();
        return view('blog_in_category', [
            'blog' => $blog,
            'projects' => $projects,
            'category' => $categoryid
        ]);
    }


    public function homePage() {
        $projects = Projects::with(['image', 'category' , 'user'])->where('subCategory_id','=' , 0)->latest()->get();
        $subCategory = SubCategory::with(['image' , 'category'])->latest()->take(10)->get();
        $latestOurTeamMembers = OurTeam::latest()->get();
        $usersCount = DB::table('users')->count();
        $blog = Blog::with(['image', 'category' , 'SubCategory' , 'users'])->latest()->take(10)->get();
        $categoriesCount = DB::table('categories')->count();
        $ourClients = OurClient::with(['image', 'category'])->latest()->get();
        $ourTeamCount = DB::table('our_team')->count();
        $services =  Service::with(['category'])->latest()->take(3)->get();

        return view('home', compact(
            'projects',
            'subCategory',
            'services',
            'latestOurTeamMembers',
            'usersCount',
            'blog',
            'categoriesCount',
            'ourClients',
            'ourTeamCount',
        ));
        }


    //our_work
    //blog
    //services
    public function index(Request $request){
        // return Category::with(['image'])->get();
        return view('dashboard.categories.index')->with('category',Category::with(['image'])->get());
    }


    public function edit($id){
        // return Category::with(['image'])->get();
        return view('dashboard.categories.edit')->with('category',Category::with(['image'])->where('id',$id)->first());
    }



    public function create(){
        $fun = new Controller();
        return view('dashboard.categories.create')->with('token_image' , $fun->generateUniqueTokenImage());
    }

    public function show($id){
        $category = Category::find($id);
        return response()->json($category);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string',
            // 'cat' => 'required|string',
        ]);
        if (!Category::where('name' , $request->name)->exists()) {
            $category = Category::create([
            'name' => $request->input('name'),
            'title' => $request->input('title'),
            'token' => $request->input('token'),
            'type' => $request->input('type') ?? '',
        ]);
            $token =  $category->id;
        }else {
            $token = Category::select('id')->where('title' , $request->type)->first()['id'];
        }
        return $token;
    }

    public function update(Request $request) {
        $data = $request->json()->all();
      $category = Category::where('id',$data['id']);
      $category->update($data);
      return response()->json($category, 200);
  }

    public function destroy($id) {
        $category = Category::find($id);
        $category->delete();
        return response()->json(null, 204);
    }
    public function checkAssociation($id) {
        $category = Category::findOrFail($id);
        $hasSubCategories = $category->subCategories()->exists();
        $hasServices = $category->services()->exists();
        return response()->json([
            'has_subcategories' => $hasSubCategories,
            'has_services' => $hasServices
        ]);
    }

}
