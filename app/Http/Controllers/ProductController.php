<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }

    public function store(Request $request)
    {
        // استخراج البيانات من الطلب
        $data = $request->only([
            'name_ar',
            'name_en',
            'product_link',
            'price_before_discount',
            'price_after_discount',
            'description_ar',
            'description_en',
            'discount_code',
            'store_id',
        ]);

        // قم بالبحث عن المنتج باستخدام البيانات المستلمة من الطلب
        $product = Product::firstOrCreate([
            'product_link' => $data['product_link'],
            'store_id' => $data['store_id'],
            'discount_code' => $data['discount_code'],
            'name_en' => $data['name_en'],
            // أضف المزيد من الحقول هنا
        ], $data); // استخدم البيانات المستخرجة من الطلب كقيم افتراضية للحقول

        // إذا تم إنشاء المنتج بنجاح أو تم العثور عليه بالفعل، قم بإرجاع الاستجابة
        return response()->json($product, 201);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return response()->json($product, 200);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->json(null, 204);
    }
}
