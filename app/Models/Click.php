<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Click extends Model {
    use HasFactory;

    protected $fillable = [
        'url_id',
        'product_id',
        'ip_address',
        'cookie',
        'type',
        'device_type',
    ];


    public function url() {
        return $this->belongsTo(ProductsUrls::class, 'url_id' ,'id');
    }

}
