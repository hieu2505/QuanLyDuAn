<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'category_id', 'publishing_company_id', 'storage_id', 'title', 'avatar', 'author', 'number', 'price', 'isbn', 'description'
    ];
}
