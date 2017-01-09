<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['name', 'body', 'email', 'isRead'];

    public function getBodySummeryAttribute()
    {
        $text = $this->body;

        return substr($text, 0, 100);
        
    }
}
