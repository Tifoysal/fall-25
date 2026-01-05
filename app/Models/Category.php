<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    // DDOS, XSS,  SQLi

    // protected $fillable = ['unit_price','qty'];
    protected $guarded = [];

}
