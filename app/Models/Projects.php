<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Projects extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'projects';

    protected $fillable = [
        'name',
        'token',
        'category_id' ,
        'user_id',
        'subCategory_id' ,
        'title'
    ];
    public function image() {
        return $this->hasMany(ImageItem::class , 'token' , 'token');
    }

    public function country() {
        return $this->belongsTo(Country::class , 'country_id' , 'id');
    }


    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function SubCategory(){
        return $this->hasOne(SubCategory::class , 'id' ,'subCategory_id' );
    }


    public function views(){
        return usersReports::select(DB::raw('count(id) as count'))->where('table', 'projects')
        ->where('table_id', $this->id)
        ->first()['count'] ?? 0;
    }

    public function user(){
        return $this->hasOne(User::class , 'id' ,'user_id' );
    }

    
}
