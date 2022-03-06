<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'content', 'image'];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
