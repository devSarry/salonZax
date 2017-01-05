<?php

namespace App\Http\Controllers;

use App\ContactSection;
use App\MainSection;
use App\Service;
use App\ServiceCategory;
use App\ServiceSection;
use App\Staff;
use App\StaffSection;
use DebugBar\DebugBar;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index()
    {

        $main_section = MainSection::first();

        $service_section = ServiceSection::first();

        $categories = ServiceCategory::with('services')->get();

        $staff_section = StaffSection::first();

        $contact = ContactSection::first();
        
        $staff = Staff::with('image')->get();

        $chunks = $categories->split(2);

        Mail::send('emails.send', ['title' => "hello world", 'content' => "It's greate to meed you"], function ($message)
        {

            $message->from('me@gmail.com', 'Christian Nwamba');

            $message->to('jsarry@gmail.com');

        });


        return view('main.index', compact('categories', 'chunks', 'service_section', 'staff' , 'staff_section', 'main_section', 'contact'));
    }
}
