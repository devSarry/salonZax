<?php

namespace App\Http\Controllers;

use AnkitPokhrel\LaravelImage\ImageUploadService;
use App\Staff;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;


class StaffController extends Controller
{
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'birthday' => 'date',
            'image' => 'required'
        ]);
        $staff = Staff::create($request->except('image'));

        $input = $request->input('image');

        $this->image->upload(Image::make($input));

        $uploadedFileInfo = $this->image->getUploadedFileInfo();

        $staff->image()->create($uploadedFileInfo);

        return redirect(route('staff.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $staff = Staff::findOrFail($id);

        if($request->has('image') && 'data' === substr($request->input('image'), 0, 4)){

            $this->image->upload(Image::make($request->input('image')));

            $uploadedFileInfo = $this->image->getUploadedFileInfo();
            if (!empty($path = trim($staff->image->upload_dir))) {
                $this->image->clean(public_path($path), true);
            }
            $staff->image()->update($uploadedFileInfo);
        }
        if($request->has('name')){
            $staff->update($request->except('image'));
            alert()->success('Successfully Updated Staff');

            return redirect(route('staff.index'));
        }

        if ( $status = $staff->approve() ) {
            alert()->success($staff->name . ' is ' . $status);

            return redirect('staff')->with('message', 'Category is ' . $status);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::findOrFail($id);
        if (!empty($path = trim($staff->image->upload_dir))) {
            $this->image->clean(public_path($path), true);
        }

        $staff->delete();
    }
}
