<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClassStudent extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'faculty_id', 'title'
    ];
    protected $table = 'class_students';
}
