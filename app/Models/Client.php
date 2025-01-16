<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $fillable = ['name','last_name','second_last_name', 'email','phone'];
}
