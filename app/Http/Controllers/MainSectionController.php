<?php

namespace App\Http\Controllers;

use App\MainSection;
use Illuminate\Http\Request;

class MainSectionController extends Controller
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
        $data = MainSection::findOrFail(1);
        $pageData = [
            'section'   => 'Service',
            'route'     => 'services.setting.update'

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

        $service_section = MainSection::findOrFail(1);


        $service_section->section()->first()->update($requestData);

        alert()->success('Successfully Updated Service Section');

        return back();
    }
}
