<?php

namespace App\Http\Controllers;

use App\ContactSection;
use App\StaffSection;
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
        $data = ContactSection::findOrFail(1);
        $pageData = [
            'section'   => 'Contact',
            'route'     => 'contact.setting.update'
        ];

        return view('admin.contact.section.edit', compact('data', 'pageData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request)
    {

        $requestData = $request->only(['title', 'body']);


        $location = json_decode($request->get('location'), true);

        $contact_section = ContactSection::findOrFail(1);

        $contact_section->section->update($requestData);


        $contact_section->update($request->except(['location', 'title', 'body' ]));


        if($location['formated_address']){
            $contact_section->update($location);
        }

        alert()->success('Successfully Updated Staff Section');

        return back();
    }
}
