<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'title', 'body'
    ];
    /**
     * Get all of the owning sectionable models.
     */
    public function sectionable()
    {
        return $this->morphTo();
    }
}
