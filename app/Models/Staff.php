<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'name', 'title', 'body', 'email', 'birthday', 'active'
    ];
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function approve()
    {
        if($this->active){
            $this->update(['active' => false]);

            return 'deactivated';
        }

        $this->update(['active' => true]);
        return 'active';
    }

}
