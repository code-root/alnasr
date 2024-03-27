<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\ContactMessage;
use App\Models\Country;
use App\Models\OurClient;
use App\Models\OurTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ApiController extends Controller
{

    public function getBlogId ($id) {
        $data = Blog::with(['category' , 'image'])->where('id',$id)->get();
        return response()->json(['data' => $data]);
    }

    public function   getCountryId ($id) {
        $data = Country::with(['ourTeam' , 'ourTeam.image'])->where('id',$id)->get();
        return response()->json(['data' => $data]);
    }

    public function  getCountry () {
        return response()->json(['data' => Country::get()]);

    }


    public function email_send(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $contactMessage = new ContactMessage;
        $contactMessage->name = $data['name'];
        $contactMessage->email = $data['email'];
        $contactMessage->subject = $data['subject'];
        $contactMessage->message = $data['message'];
        $contactMessage->save();
        Mail::send('emails.contact', ['data' => $data], function($message) use ($data) {
            $message->to('zxsofazx@email.com', 'Mostafa')
                    ->subject($data['subject']);
        });
        return response()->json(['message' => 'تم إرسال الرسالة بنجاح.']);
    }

    public function getOurClients() {
        $data = OurClient::with(['image'])->get();
        return response()->json(['data' => $data]);
    }

    public function getLatestOurTeamMembers()
    {
        $latestOurTeamMembers = OurTeam::latest()->take(10)->get();
        return response()->json(['latestOurTeamMembers' => $latestOurTeamMembers]);
    }

    public function getCategoriesServices() {
        $category = Category::with('image' ,'blog')->where('type' , 'services')->get();
        return response()->json(['data' => $category]);
    }
    public function getCategoriesBlog() {
        $category = Category::with('image' ,'blog')->where('type' , 'blog')->get();
        return response()->json(['data' => $category]);
    }

    public function getCategoriesOur_work() {
        $category = Category::with('image' ,'blog')->where('type' , 'Our_work')->get();
        return response()->json(['data' => $category]);
    }

    public function getOurTeam(){
        $data = Country::with(['ourTeam' , 'ourTeam.image'])->get();
        return response()->json(['data' => $data]);
    }

}
