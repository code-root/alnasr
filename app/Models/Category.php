<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'title', 'token'];
    protected $primaryKey = 'id';


     /**
     * Define the relationship between Category and Service.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function services()
    {
        return $this->hasMany(Service::class);
    }

    /**
     * Check if the category has associated services.
     *
     * @return bool
     */
    public function hasAssociatedServices()
    {
        return $this->services()->exists();
    }

  /**
     * Check if the category has associated subcategories.
     *
     * @return bool
     */
    public function hasAssociatedSubcategories()
    {
        return $this->subCategories()->exists();
    }

    /**
     * Define the relationship between Category and Subcategory.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }

    public function image() {
        return $this->hasMany(ImageItem::class , 'token' , 'token');
    }

    public function blog(){
        return $this->hasMany(Blog::class , 'category_id', 'id' );
    }


}
