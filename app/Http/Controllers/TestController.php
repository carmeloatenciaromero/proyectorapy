<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\product;
use App\Category;
use App\sliderr;
use App\cartDetail;
class TestController extends Controller
{


	 public function getUrlAttribute()
	{
		if(substr($this->sliderr, 0, 4)==="http"){
			return $this->sliderr;
		}
		return '/images/sliders/'. $this->sliderr;
	} 
	public function welcome(){
		
		$categories=category::has('products')->get();

    	$sliderrs=sliderr::all();

    $products=product::paginate(12);

    return view('welcome')->with(compact('products', 'categories', 'sliderrs'));
}
}
