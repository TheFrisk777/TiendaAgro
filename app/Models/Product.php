<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['nameProd','cat_id','descProd','stock','price','imagen'];
}
