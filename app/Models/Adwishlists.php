<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adwishlists extends Model
{
    protected $fillable = ['user_id', 'product_id', 'posting_date'];
    // use HasFactory;
}
