<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'Comics';
    protected $fillable = ['title', 'description', 'thumb', 'thumb', 'price', 'series', 'sale_date', 'type'];
}
