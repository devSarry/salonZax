<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ServiceSection;
use Illuminate\Http\Request;
use Session;

class ServiceSettingsController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $service = ServiceSection::findOrFail(1);

        return view('admin.services.settings.edit', compact('service'));
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
        
        $service_section = ServiceSection::findOrFail(1);
        $service_section->section()->first()->update($requestData);

        alert()->success('Successfully Updated Service Section');

        return back();
    }

}
