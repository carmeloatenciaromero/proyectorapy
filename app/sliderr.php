<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sliderr extends Model
{
    public function getUrlAttribute()
	{
		if(substr($this->name, 0, 4)==="http"){
			return $this->name;
		}
		return '/images/sliders/'. $this->name;
	}
}
