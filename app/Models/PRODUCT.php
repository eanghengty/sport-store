<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PRODUCT extends Model
{
    use HasFactory;

    protected $table= 'products';
    protected $fillable = ['id','product_name','product_quantity','image','size','color','price','description','type_of_product'];
}
