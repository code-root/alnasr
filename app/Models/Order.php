<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $fillable = [
        'service_id',
        'name',
        'email',
        'number',
        'price',
        'address',
        'device',
        'ip_address',
    ];


    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
