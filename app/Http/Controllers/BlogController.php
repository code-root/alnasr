<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\SubCategory;

use Illuminate\Http\Request;

class BlogController extends Controller {


    public function  blog () {
        $blog = Blog::with(['image', 'category' , 'SubCategory' , 'users'])->latest()->take(10)->get();
        return view('page-blog'
        , compact(
            'blog',
        ));
    }

    public function blogDetailByName ($blogName) {
        $categories = Category::with(['image'])->get(); // افتراضي
        $popularPosts = Blog::with(['image', 'category', 'SubCategory', 'users'])->orderBy('id', 'desc')->take(10)->get();
            $blog = Blog::with(['image', 'category', 'SubCategory', 'users'])->where('name', 'like' , "%$blogName%")->first();

        return view('page-blog-detail', compact('blog', 'categories', 'popularPosts'));
    }


    public function index(Request $request){
        $data =  Blog::with(['image', 'category' , 'SubCategory' , 'users'])->get();
        return view('dashboard.blogs.index')->with('blog',$data);
    }
  
    public function blog_id($categoryName, $blog) {
        $categories = Category::with(['image'])->get(); // افتراضي
        $popularPosts = Blog::with(['image', 'category', 'SubCategory', 'users'])
            ->orderBy('id', 'desc')
            ->take(10)
            ->get(); // افتراضي

        $category = Category::with(['image'])->where('name', 'like' , "%$categoryName%")->first();
        if ($category) {
            $blog = Blog::with(['image', 'category', 'SubCategory', 'users'])
                ->where('category_id', $category->id)
                ->where('name', 'like' , "%$blog%")
                ->first();
        }
        if (!$blog) {
            // abort(404); // إذا لم يتم العثور على المدونة
        }

        return view('blog', compact('blog', 'categories', 'popularPosts'));
    }

    public function archive(Request $request) {
        $categories = Category::with(['image'])->get(); // افتراضي
        $popularPosts = Blog::with(['image', 'category', 'SubCategory', 'users'])
            ->orderBy('id', 'desc')
            ->take(10)
            ->get(); // افتراضي

            $blog = Blog::with(['image', 'category', 'SubCategory', 'users'])
            ->where('name', 'like' , "%$request->blog%")
            ->first();

        $category = Category::with(['image'])->where('id', $blog->category_id)->first();
        if ($category) {

        }
        if (!$blog) {
            // abort(404); // إذا لم يتم العثور على المدونة
        }

        return view('blog', compact('blog', 'categories', 'popularPosts'));
    }

    public function edit($id){
        $data =Blog::with(['image','category'])->where('id',$id)->first();
        return view('dashboard.blogs.edit')
        ->with('blog',$data)
        ->with('category',Category::get());
    }



    public function create(){
        $fun = new Controller();
        return view('dashboard.blogs.create')->
        with('token_image' , $fun->generateUniqueTokenImage())
        ->with('category',Category::get())
        ->with('sub_category',SubCategory::get());
    }

    public function show($id){
        $category = Blog::find($id);
        return response()->json($category);
    }

    public function store(Request $request) {
        $data = $request->json()->all();
        if (isset($data['name']) && isset($data['title'])) {
            $name = $data['name'];
            $title = $data['title'];
            $category_id = $data['category_id'];
            $sub_category_id = $data['sub_category_id'];
            $description = $data['description'];

            $token = $data['token'] ?? null; // يمكن أن يكون الـ 'token' اختيارياً
            $existingBlog = Blog::where('name','LIKE' , "%$name%")
            ->where('category_id','LIKE' , "%$category_id%")->first();
            if (!$existingBlog) {
                $blog = Blog::create([
                    'name' => $name,
                    'title' => $title,
                    'subCategory_id' => $sub_category_id,
                    'category_id' => $category_id,
                    'description' => $description,
                    'token' => $token,
                ]);
                $token = $blog->id;
            } else {
                $token = $existingBlog->id;
            }
            return response()->json(['token' => $token]);
        } else {
            return response()->json(['error' => 'The data is incorrect'], 400);
        }
    }


    public function update(Request $request) {
          $data = $request->json()->all();
        $category = Blog::where('id',$data['id']);
        $category->update($data);
        return response()->json($data, 200);
    }

    public function destroy($id) {
        $category = Blog::find($id);
        $category->delete();
        return response()->json(null, 204);
    }
}
