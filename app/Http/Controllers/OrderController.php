<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class OrderController extends Controller {

    public function index() {
        $orders = Order::with('service')->orderBy('created_at', 'desc')->get();
        return view('dashboard.orders.index', compact('orders'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'service_id' => 'required|exists:services,id',
            'name' => 'required',
            'email' => 'required|email',
            'number' => 'required',
            'price' => 'sometimes|required|numeric|min:0', // قيمة افتراضية 0 إذا لم ترسل القيمة
            'address' => 'sometimes|required',
            'device' => 'sometimes|required',
            'ip_address' => 'sometimes|required',
        ]);

        // إذا لم ترسل القيمة، ضع القيمة الافتراضية 0
        if (!isset($validatedData['price'])) {
            $validatedData['price'] = 0;
        }

        $ipAddress = $request->ip();

        // الحصول على اسم الجهاز
        $agent = new Agent();
        $deviceName = $agent->device();
        // $response = Http::get("https://api.ipgeolocationapi.com/geolocate/$ipAddress") ?? null;

        // إذا لم ترسل القيمة، ضع القيمة الافتراضية 0
        if (!isset($validatedData['price'])) {
            $validatedData['price'] = 0;
        }

// إضافة القيم إلى البيانات المحقق منها
$validatedData['ip_address'] = $ipAddress;
$validatedData['device'] = $deviceName;
// $validatedData['address'] = $response;
        try {
            $fun = new Controller();
            $serv =  Service::where('id',$validatedData['service_id'] )->first();
            $msg =
            '  number : ' .$validatedData['number'].chr(10).
            ' name  Service : '.$serv->name .chr(10).
            ' price  Service : '.$serv->price .chr(10).
            ' email : '.$validatedData['email'];
            $fun->messageTelegram($msg);
            $order = Order::firstOrCreate([
                'service_id' => $validatedData['service_id'],
                'email' => $validatedData['email'],
                // أضف أي حقول أخرى للتحقق هنا
            ], $validatedData);

            return response()->json(['message' => 'Order placed successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 422);
        }
    }

}
