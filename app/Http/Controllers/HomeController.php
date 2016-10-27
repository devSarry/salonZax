<?php

namespace App\Http\Controllers;

use App\ServiceCategory;
use DebugBar\DebugBar;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{

    public function index()
    {
        $categories = ServiceCategory::with('services')->get();

        $numberOfCategories = $categories->count();

        $chunks = $categories->split(2);


        return view('main.index', compact('categories', 'chunks'));
    }
}
