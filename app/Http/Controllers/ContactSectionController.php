<?php

namespace App\Http\Controllers;

use App\Models\ContactSection;
use App\Models\StaffSection;
use Illuminate\Http\Request;

class ContactSectionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $addresses = ContactSection::all();

        $data = $addresses->first();

        $pageData = [
            'section'   => 'Contact',
            'route'     => 'contact.setting.update'
        ];

        return view('admin.contact.section.edit', compact('data', 'pageData', 'addresses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * todo: fix db to allow for multiple address
     * todo: and general UI add/remove location
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request)
    {

        $requestData = $request->only(['title', 'body']);
        //this whole section is hacky must fix for general case!!

        $location1 = json_decode($request->get('location')[0], true);

        $location2 = json_decode($request->get('location')[1], true);

        $contact_section = ContactSection::findOrFail(1);

        $contact_section->section->update($requestData);
        //social media stuff
        $contact_section->update($request->except(['location', 'title', 'body' ]));


        if($location1['formated_address']){
            $contact_section->update($location1);
        }

        if($location2['formated_address']){
            ContactSection::find(2)->update($location2);
        }

        alert()->success('Successfully Updated Staff Section');

        return back();
    }

    
}
