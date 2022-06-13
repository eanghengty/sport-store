<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CLUB extends Model
{
    use HasFactory;
    protected $table='clubs';
    protected $fillable=['id','en_name','kh_name','image'];
}