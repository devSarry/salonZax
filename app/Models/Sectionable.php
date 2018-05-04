<?php
/**
 * Created by PhpStorm.
 * User: Euler
 * Date: 12/17/2016
 * Time: 12:00 PM
 */

namespace App\Models;


trait Sectionable {


    /**
     * Gets the sectionable model.
     *
     * NOTE: morphOne will not check if an existing model exists related to the parent
     * That means methods like create() will create a new model but upon retreival only
     * the first will be returned.
     */
    public function section()
    {
        return $this->morphOne(Section::class, 'sectionable');
    }

}