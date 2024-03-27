<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurTeam extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'our_team';

    protected $fillable = [
        'name',
        'token',
        'categories_id',
        'job_name'
    ];
    public function image() {
        return $this->hasMany(ImageItem::class , 'token' , 'token');
    }

    public function categories() {
        return $this->belongsTo(Country::class , 'categories_id' , 'id');
    }



}
