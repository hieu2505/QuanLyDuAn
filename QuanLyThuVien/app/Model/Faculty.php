<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'title', 'phone', 'email', 'room'
    ];
    protected $table = 'facultys';
}
