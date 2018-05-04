<?php

namespace App\Http\Controllers;

use App\Models\ContactSection;
use App\Models\MainSection;
use App\Models\Message;
use App\Models\ServiceCategory;
use App\Models\ServiceSection;
use App\Models\Staff;
use App\Models\StaffSection;
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

        $contact = ContactSection::all();

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

        alert()->success('Kiitos ' . $message->name . ' viestistäsi. Vastaamme sinulle niin pian kuin voimme')->persistent("OK");

        return redirect()->back();

    }
}
