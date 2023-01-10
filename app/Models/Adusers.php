<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adusers extends Model
{
    protected $fillable = ['name', 'email', 'contactno', 'password', 'shippingAddress', 'shippingState', 'shippingCity', 'shippingPincode',  'billingAddress', 'billingState', 'billingCity', 'billingPincode', 'regDate', 'updationDate'];
    // use HasFactory;
}
