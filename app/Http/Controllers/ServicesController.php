<?php

namespace App\Http\Controllers;

use App\Service;
use App\ServiceCategory;
use Debugbar;
use Illuminate\Http\Request;

use App\Http\Requests;

class ServicesController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ServiceCategory::with('services')->get();
        return view('admin.services.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $category_id = $request->input('category_id');
        return view('admin.services.create', compact('category_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'service' => 'required',
           'price' => 'required|numeric'
        ]);

        $service = Service::create($request->all());

        if ($service) {
            return redirect(route('services.index', ['id' => $service->id]))->with('message', 'Successfully created');
        }

        return redirect(route('services.index'))->with('message', 'Failed to create');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);

        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Service::find($id);

        if ($service->update($request->all())) {
            return redirect('services')->with('message', 'Successfully updated');
        }

        return back()->with('message', 'Failed to update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ( Service::destroy($id)) {
            return redirect(route('services.index'))->with('message', 'Successfully deleted');
        }

        return redirect(route('services.index'))->with('message', 'Failed to delete');
    }
}
