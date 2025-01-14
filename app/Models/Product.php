<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['nameProd','brand_id','descProd','stock','price','imagen'];
}
