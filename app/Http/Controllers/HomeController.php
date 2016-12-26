<?php

namespace App\Http\Controllers;

use App\Service;
use App\ServiceCategory;
use App\ServiceSection;
use App\Staff;
use App\StaffSection;
use DebugBar\DebugBar;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{

    public function index()
    {

        $service_section = ServiceSection::first();

        $categories = ServiceCategory::with('services')->get();

        $staff_section = StaffSection::first();
        
        $staff = Staff::with('image')->get();

        $chunks = $categories->split(2);


        return view('main.index', compact('categories', 'chunks', 'service_section', 'staff' , 'staff_section'));
    }
}
