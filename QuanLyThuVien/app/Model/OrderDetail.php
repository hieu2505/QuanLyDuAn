<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'order_id', 'book_id', 'member_borrow_id', 'member_return_id', 'status_borrow', 'dead_return', 'date_return', 'status_return'
    ];
    protected $table = 'order_details';
}
