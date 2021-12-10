<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'reader_id', 'created_date'
    ];
}
