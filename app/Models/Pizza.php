<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    protected $fillable=['username','pizza_name','topping','sauce','price'];//to control query my table's my added column names
}
