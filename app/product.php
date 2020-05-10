<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //produc-categoria relaciones
    public function Category()
    {
    	return $this->belongsTo(Category::class);
	}
//produc-images
	 public function images()
    {
    	return $this->hasMany(ProductImage::class);
	}
	public function getFeaturedImageUrlAttribute()
    {
        $featuredImage = $this->images()->where('featured', true)->first();
        if (!$featuredImage)
            $featuredImage = $this->images()->first();

        if ($featuredImage) {
            return $featuredImage->url;
        }
        return '/images/sinimagen.png';
}
public function getCategoryNameAttribute()
    {
      if($this->category)
      return $this->category->name;
            return 'GENERAL';

    }
}