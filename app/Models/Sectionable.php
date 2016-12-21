<?php
/**
 * Created by PhpStorm.
 * User: Euler
 * Date: 12/17/2016
 * Time: 12:00 PM
 */

namespace App;


trait Sectionable {


    /**
     * Get all of the owning sectionable models.
     */
    public function section()
    {
        return $this->morphMany(Section::class, 'sectionable');
    }

}