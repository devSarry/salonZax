<?php

namespace App\Http\Controllers;

use App\ContactSection;
use App\MainSection;
use App\Message;
use App\ServiceCategory;
use App\ServiceSection;
use App\Staff;
use App\StaffSection;
use Illuminate\Http\Request;

use App\Http\Requests;


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

        return view('main.index', compact('categories', 'chunks', 'service_section', 'staff' , 'staff_section', 'main_section', 'contact'));
    }

    public function message(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'body' => 'required'
        ]);

        $message = Message::create($request->all());

        /*  TODO
            1. Create an email view
            2. Pass data to mailer
            3. Mail message
        */

        alert()->success('Thanks ' . $message->name . ' your message was recieved and we\'ll get back to you soon');

        return redirect()->back();

    }
}
