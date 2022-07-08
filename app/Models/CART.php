<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CART extends Model
{
    use HasFactory;
    protected $table="carts";
    protected $fillable=['product_name','price','total_price','quantity','total_quantity','location','image'];
}
