<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
     public $timestamps = false;
    protected $fillable = [
        'class_id', 'gender', 'dOB', 'address', 'avatar', 'phone', 'email'
    ];
}
