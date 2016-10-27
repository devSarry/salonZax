<?php

namespace App\Http\Controllers;

use App\ServiceCategory;
use Illuminate\Http\Request;

use App\Http\Requests;

class ServiceCategoryController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
            'name' => 'required',
        ]);

        $service = ServiceCategory::create($request->all());

        if ($service) {
            return redirect(route('services.index', ['id' => $service->id]))->with('message', 'Successfully created');
        }

        return redirect(route('services.index'))->with('message', 'Failed to create');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param ServiceCategory $category
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function edit(ServiceCategory $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param ServiceCategory|int       $category
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceCategory $category)
    {
        if($request->has('name')){
            $category->update($request->all());
            return redirect('services')->with('message', 'Successfully updated');
        }

        if ($status = $category->approve()){
            return redirect('services')->with('message', 'Category is ' . $status);
        }

        return back()->with('message', 'Failed to update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ServiceCategory $category
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceCategory $category)
    {
        if ( $category->delete()) {
            return redirect(route('services.index'))->with('message', 'Successfully deleted');
        }

        return redirect(route('services.index'))->with('message', 'Failed to delete');
    }
}
