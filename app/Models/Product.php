<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['nameProd','descProd','cat_id','stock','price','imagen'];
}
