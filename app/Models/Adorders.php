<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adorders extends Model
{
    protected $fillable = ['user_id', 'product_id', 'quantity', 'order_date', 'payment_method', 'order_status'];
    // use HasFactory;
}
