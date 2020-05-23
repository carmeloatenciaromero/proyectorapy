<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cartDetail;
use App\product;

class cartDetailController extends Controller
{
    public function store(Request $request){
    $cartDetail=new cartDetail();
    
    $cartDetail->cart_id=auth()->user()->cart->id;

    $cartDetail->product_id= $request->product_id;
   
    $cartDetail->quantity= $request->quantity;
    $cartDetail->save();
   return redirect('/home');
}
	public function destroy(Request $request){
    	$cartDetail= cartDetail::find($request->cart_detail_id);
        if($cartDetail->cart_id==auth()->user()->cart->id)

    	$cartDetail->delete();
        $notification='el producto se ha eliminado  corretamente';
     return back()->with(compact('notification'));

    }
}
