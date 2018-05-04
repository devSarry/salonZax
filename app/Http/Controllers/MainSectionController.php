<?php

namespace App\Http\Controllers;

use AnkitPokhrel\LaravelImage\ImageUploadService;
use App\Models\MainSection;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;


class MainSectionController extends Controller {

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
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $data = MainSection::findOrFail(1);
        $pageData = [
            'section' => 'Main',
            'route'   => 'main.setting.update',

        ];


        return view('admin.main.settings.edit', compact('data', 'pageData'));
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

        $image = $request->get('image');

        $main = MainSection::findOrFail(1);
        //check if image has been updated
        if ($request->has('image') && 'data' === substr($request->input('image'), 0, 4))
        {

            $this->image->upload(Image::make($request->input('image')));

            $uploadedFileInfo = $this->image->getUploadedFileInfo();

            $uploadedFileInfo['original_image_name'] = 'banner';


            //delete the old image.
            if ( ! empty($path = trim($main->image->upload_dir)))
            {
                $this->image->clean(public_path($path), true);
            }
            $main->image->update($uploadedFileInfo);
        }
        if ($request->has('title'))
        {
            $main->section->update($request->except('image'));

            alert()->success('Successfully Updated Main Banner');

            return redirect(route('main.setting.edit'));
        }


    }
}
