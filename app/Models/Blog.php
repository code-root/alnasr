<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Blog extends Model {
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'title', 'user_id' ,  'description', 'category_id' , 'subCategory_id' , 'token'];


    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function SubCategory(){
        return $this->hasOne(SubCategory::class , 'id' ,'subCategory_id' );
    }


    public function views(){
        return usersReports::select(DB::raw('count(id) as count'))->where('table', 'blog')
        ->where('table_id', $this->id)
        ->first()['count'] ?? 0;
    }

    public function users(){
        return $this->hasOne(User::class , 'id' ,'user_id' );
    }



    public function image() {
        return $this->hasMany(ImageItem::class , 'token' , 'token');
    }



}
