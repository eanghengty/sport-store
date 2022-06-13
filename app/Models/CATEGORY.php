<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CATEGORY extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $fillable=['name','id'];
}
