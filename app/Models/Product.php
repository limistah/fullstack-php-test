<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['title', 'price', 'image', 'description', 'published'];
   
    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }
}
