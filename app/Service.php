<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['service', 'price', 'service_category_id'];

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class);
    }
}
