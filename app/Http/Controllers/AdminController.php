<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Analytics;
use Spatie\Analytics\Period;

class AdminController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //show how many messages there are.
        $messagesCount = Message::all()->count();

        //how many visitor in 24hr period
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(1))->pluck('visitors')->sum();
        
        if(!$analyticsData){
            $analyticsData = 0;
        }

        return view('admin.dashboard', compact('analyticsData', 'messagesCount'));
    }
}
