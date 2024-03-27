<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name_ar', 'name_en', 'product_link', 'price_before_discount', 'price_after_discount', 'description_ar', 'description_en', 'discount_code', 'store_id'];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
