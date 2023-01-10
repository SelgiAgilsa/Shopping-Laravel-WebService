<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adproductreviews extends Model
{
    protected $fillable = ['product_id', 'quality', 'price', 'value', 'name', 'summary', 'review', 'review_date'];
    // use HasFactory;
}
