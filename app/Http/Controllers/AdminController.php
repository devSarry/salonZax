<?php

namespace App\Http\Controllers;

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

        //how many visitor in 24hr period
        $analyticsData = $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(1))->first()['visitors'];

        return view('admin.dashboard', compact('analyticsData'));
    }
}
