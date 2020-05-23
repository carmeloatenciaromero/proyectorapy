<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
  public function details()
  {
  	return $this->hasMany(cartDetail::class);
  	  }

  	  public function user()
    {
        return $this->belongsTo(user::class);
    }
    public function getTotalAttribute()
    {
    	$total = 0;
    	foreach ($this->details as $detail) {
    		$total += $detail->quantity * $detail->product->price;
    	}
    	return $total;
    }
}


