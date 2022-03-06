<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['title', 'description', 'teacher', 'image', 'category', 'slug'];


    public function user()
    {
        return $this->hasOne(User::class, 'id', 'teacher');
    }
}
