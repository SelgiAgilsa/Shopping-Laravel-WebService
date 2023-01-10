<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adproducts extends Model
{
    protected $fillable = ['nama', 'category', 'subCategory', 'productName', 'productCompany', 'productPrice', 'productPriceBeforeDiscount', 'productDescription', 'productImage1', 'productImage2', 'productImage3', 'shippingCharge', 'productAvailability', 'postingDate', 'updationDate'];
    // use HasFactory;
}
