<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscribersController extends Controller
{
    public function index()
    {
        // قائمة المشتركين
        $subscribers = Subscriber::all();
        return view('subscribers.index', compact('subscribers'));
    }

    public function create()
    {
        // إنشاء مشترك جديد
        return view('subscribers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:subscribers,email',
        ]);

        // حفظ الاشتراك الجديد في قاعدة البيانات
        Subscriber::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        return redirect()->back()->with('subscribed', true);
    }
}
