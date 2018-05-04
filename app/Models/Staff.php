<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use Imagable;

    protected $fillable = [
        'name', 'title', 'body', 'email', 'birthday', 'active'
    ];


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
