<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //category->producto relacion
    public function products()
    {
    	return $this->hasMany(product::class);
	}
	public function getFeaturedImageUrlAttribute()
    {
        $featuredProduct= $this->products()->first();
        
            return $featuredProduct->featured_image_url;
        
        
}
}
