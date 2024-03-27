<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $table = 'subـcategories';

    protected $fillable = ['name', 'category_id' , 'token'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function image() {
        return $this->hasMany(ImageItem::class , 'token' , 'token');
    }

    public function blog(){
        return $this->hasMany(Blog::class , 'subCategory_id', 'id' );
    }

}

