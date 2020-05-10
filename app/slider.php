<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
  public function getUrlAttribute()
	{
		if(substr($this->sliderr, 0, 4)==="http"){
			return $this->sliderr;
		}
		return '/images/sliders/'. $this->sliderr;
	} 
}
