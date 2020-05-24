<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Mail\NewOrder;
use Mail;

class carrtController extends Controller
{
    
public function update()
    {
      $client = auth()->user(); 
      $cart = $client->cart;
      $cart->status = 'Pending';
      
      $cart->save(); // UPDATE

      /*$admins = User::where('admin', true)->get();
      Mail::to($admins)->send(new NewOrder($client, $cart));*/
      
      $notification = 'estamos en pruebas prontamente en funcionamiento!';
      return back()->with(compact('notification'));
    }
}
