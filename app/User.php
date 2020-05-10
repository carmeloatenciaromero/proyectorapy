<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use App\cart;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','direccion', 'telefono', 'sexo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

public function carts()
{
   return $this->hasMany(cart::class); 
}
    public function getCartAttribute()
{
    $cart= $this->carts()->where('status', 'active')->first();
    if($cart)
        return $cart;

    //else
    $cart= new Cart();
    $cart->status='active';
    $cart->user_id= $this->id;
    $cart->save();
    return $cart;


}
}

