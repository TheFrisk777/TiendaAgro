<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Product extends Model
{
    //

    protected $fillable = ['nameProd','cat','descProd','stock','price','imagen'];

    public function category():BelongsTo{ //La palabra brand puede ser esa u otra cosa
        return $this->belongsTo(Category::class, 'cat'); 
    }

}
