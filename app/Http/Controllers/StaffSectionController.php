<?php

namespace App\Http\Controllers;

use App\StaffSection;
use Illuminate\Http\Request;

class StaffSectionController extends Controller
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
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $data = StaffSection::findOrFail(1);
        $pageData = [
            'section'   => 'Staff',
            'route'     => 'staff.setting.update'

        ];
        return view('admin.section.settings.edit', compact('data', 'pageData'));
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

        $requestData = $request->all();

        $staff_section = StaffSection::findOrFail(1);
        
        $staff_section->section()->first()->update($requestData);

        alert()->success('Successfully Updated Staff Section');

        return back();
    }
}
