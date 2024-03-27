<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'flag' , 'currency'];


    public function ourTeam() {
        return $this->hasMany(OurTeam::class , 'country_id' , 'id');
    }


    public function country() {
        return $this->belongsTo(Country::class , 'country_id' , 'id');
    }
}
