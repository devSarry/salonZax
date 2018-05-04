<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSection extends Model
{
    use Sectionable;

    protected $guarded = [
        'id'
    ];

    public function getSocialMediaAttribute()
    {
        /* TODO make social media table */
        $socialMedia = ['facebook', 'twitter', 'instagram'];

        $data = [];

        foreach ($socialMedia as $link){
            if ($this->getAttribute($link.'_url')){
                array_push($data, [
                    'name' => $link,
                    'link' => $this->getAttribute($link.'_url'),
                    'label' => $this->getAttribute($link.'_label')
                ]);
            }
        }

        return $data;
    }


}
