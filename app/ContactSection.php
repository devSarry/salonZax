<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactSection extends Model
{
    use Sectionable;

    protected $guarded = [
        'id'
    ];


}
