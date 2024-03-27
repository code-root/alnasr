<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurClient extends Model{
    use HasFactory;
   protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'token',
        'category_id',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function image() {
        return $this->hasMany(ImageItem::class , 'token' , 'token');
    }

}
