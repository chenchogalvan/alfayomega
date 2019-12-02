<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{

    protected $guarded = [];


    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function setTitleAttribute($title)
    {
        $this->attributes['title'] = $title;
        $this->attributes['slug'] = str_slug($title);
    }
}
