<?php

namespace App\Http\Controllers;

use AnkitPokhrel\LaravelImage\ImageUploadService;
use App\Staff;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;


class StaffController extends Controller {

    protected $image;

    /**
     */
    public function __construct(ImageUploadService $image)
    {
        $this->middleware('auth');
        //set properties for file upload
        $this->image = $image;
        $this->image->setUploadField('image'); //default is image
        $this->image->setUploadFolder('images'); //default is public/uploads/images
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::with('image')->get();

        return view('admin.staff.index', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $staff = new Staff;

        return view('admin.staff.create', compact('staff'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $image = $request->get('image');

        if ($this->image->upload(Image::make($image)))
        {
            //image is uploaded, get uploaded image info
            $uploadedFileInfo = $this->image->getUploadedFileInfo();

            //do whatever you like with the information
            $staff = Staff::create($request->except('image'));

            $staff->image()->create($uploadedFileInfo);

            return redirect(route('staff.index'));

        } else //Validation failed
        {
            //get validator object
            $validator = $this->image->getValidationErrors();

            //get error messages
            $errors = $validator->messages()->all();

            return redirect(route('staff.create'))
                ->withErrors($validator)
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = Staff::find($id);

        return view('admin.staff.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $staff = Staff::findOrFail($id);

        if ($request->has('image') && 'data' === substr($request->input('image'), 0, 4))
        {

            $this->image->upload(Image::make($request->input('image')));

            $uploadedFileInfo = $this->image->getUploadedFileInfo();
            if ( ! empty($path = trim($staff->image->upload_dir)))
            {
                $this->image->clean(public_path($path), true);
            }
            $staff->image()->update($uploadedFileInfo);
        }
        if ($request->except('image'))
        {
            $staff->update($request->except('image'));
            alert()->success('Successfully Updated Staff');

            return redirect(route('staff.index'));
        }

        if ($status = $staff->approve())
        {
            alert()->success($staff->name . ' is ' . $status);

            return redirect('staff')->with('message', 'Category is ' . $status);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::findOrFail($id);
        if ( ! empty($path = trim($staff->image->upload_dir)))
        {
            $this->image->clean(public_path($path), true);
        }

        $staff->delete();

        return redirect()->back()->with('message', 'Post deleted!');
    }
}
