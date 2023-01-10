<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adordertrackhistorys extends Model
{
    protected $fillable = ['order_id', 'status', 'remark', 'posting_date'];
    // use HasFactory;
}
