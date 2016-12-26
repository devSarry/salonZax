<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /*
     *  image               : Saved image name
        upload_dir          : Image upload path
        original_image_name : Real name of uploaded image
        size                : Size of the uploaded image
        extension           : Extension of the uploaded image
        mime_type           : Mime type of the uploaded image
    */

    protected $fillable = [
        'image', 'upload_dir', 'original_image_name', 'size', 'extension', 'mime_type'
    ];

    public function imageable()
    {
        return $this->morphTo();
    }
}
