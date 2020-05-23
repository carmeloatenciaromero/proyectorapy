<?php



namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\User;
use App\Mail\NewOrder;
use Mail;
use App\cartDetail;


class cartController extends Controller
{
    public function update()
    {
      $client = auth()->user(); 
      $cart = $client->cart;
      $cart->status = 'Pending';
      
      $cart->save(); // UPDATE

      /*$admins = User::where('admin', true)->get();
      Mail::to($admins)->send(new NewOrder($client, $cart));*/

      $notification = 'estamos en pruebas proximamente estaremos en funcionamiento!';
      return back()->with(compact('notification'));
    }
}