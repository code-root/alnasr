<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ContactForm;
use App\Models\OurClient;
use App\Models\OurTeam;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


    $subscriber = Subscriber::latest()->get();
    $contactForm = ContactForm::latest()->get();
    $latestBlogs = Blog::latest()->take(10)->get();
    $latestOurClients = OurClient::latest()->take(10)->get();
    $latestOurTeamMembers = OurTeam::latest()->take(10)->get();
    $usersCount = DB::table('users')->count();
    $blogsCount = DB::table('blogs')->count();
    $categoriesCount = DB::table('categories')->count();
    $ourClientsCount = DB::table('our_clients')->count();
    $ourTeamCount = DB::table('our_team')->count();
    return view('dashboard.home', compact(
        'latestBlogs',
        'contactForm',
        'subscriber',
        'latestOurClients',
        'latestOurTeamMembers',
        'usersCount',
        'blogsCount',
        'categoriesCount',
        'ourClientsCount',
        'ourTeamCount',
    ));
    }





}
