<?php

namespace App\Http\Controllers;

use App\Service;
use App\ServiceCategory;
use App\ServiceSection;
use DebugBar\DebugBar;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{

    public function index()
    {

        $service_section = ServiceSection::first();

        $categories = ServiceCategory::with('services')->get();


        $chunks = $categories->split(2);


        return view('main.index', compact('categories', 'chunks', 'service_section'));
    }
}
