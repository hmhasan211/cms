<?php

namespace App\Http\Controllers;

use App\Service;
use App\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $services = Service::where('status',1)->latest()->take(6)->get();
        return view('frontend.service',compact('services'));
    }

    public function team()
    {
        $teams = Team::orderby('id','desc')->take(4)->get();
        return view('frontend.team',compact('teams'));
    }
}
