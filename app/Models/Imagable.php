<?php
/**
 * Created by PhpStorm.
 * User: Euler
 * Date: 12/30/2016
 * Time: 2:33 PM
 */

namespace App;


trait Imagable {

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}