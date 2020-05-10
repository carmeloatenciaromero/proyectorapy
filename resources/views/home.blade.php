@extends('layouts.app')
@section('title','Rapiya | Dashboard')
@section('body-class','product-page')

@section('content')
<div class="wrapper">
  <div class="header header-filter" style="background-image: url('{{ asset('img/citi.jpg' )}}')">

  </div>
</div>
<div class="main main-raised">
  <div class="container">

  </br>
  @if (auth()->user()->admin)
  <div class=" text-left">
  <div class="btn btn-primary btn-lg btn-flat">
   <a class="btn   fas fa-wpforms fa-lg mr-2"   style="color: #fff;" href="{{url('admin/products')}}">Gestionar Productos </a>
 </div>
 <div class="btn btn-success btn-lg btn-flat">
   <a class="btn   fas fa-shopping-bag fa-lg mr-4" style="color: #fff;" href="{{url('admin/categories')}}">GESTIONAR CATEGORIA </a>
 </div>
 <div class="btn btn-info btn-lg btn-flat">
   <a class="btn   fas fa-envira fa-lg mr-4" style="color: #fff;" href="{{url('admin/sliders')}}">IMAGENES DEL SLIDERS</a>
 </div>
 </br>
   </br> 
   <div class="btn btn-dark btn-lg btn-flat">
   <a class="btn   fas fa-user-circle fa-lg mr-2" style="color: #fff;" href="{{url('admin/users')}}">GESTIONAR USUARIOS</a>
 </div>
 </div>
</div>
</br>

@else

 

<div class="row">
  <div class="col-12 table-responsive">
@if (session('notification'))
                <div class="alert alert-success">
                    {{ session('notification') }}
                </div>
            @endif
    <h4> productos de tu carrito de compras </h4>
    <div class="text-left"><div class="btn btn-outline-primary btn-xs btn-flat ">
   <a class="btn   fas fa-first-order " style="color: #fff;" href="{{ url('/') }}"> Seguir comprando</a>
 </div></div>
 
    

    <table class="table table-striped">
      <thead>

       <th>Img</th>
       <th class="text-center col-md-2">Nombre</th>
       <th class="text-right">Precio</th>
       <th class="text-center">cantidad</th>
       <th class="text-center">subtotal</th>
       <th class="text-center">Opciones</th>

     </tr>
   </thead>
   <tbody>
     @foreach(auth()->user()->cart->details as $detail)
     <tr>
      <td><img src="{{ $detail->product->featured_image_url }}" style="width: 70px; height: 60px; object-fit: cover;" >
      </td>

      <td><a href="{{ url('/products/'.$detail->product->id) }}" target="_blank">{{ $detail->product->name }}</a></td>

      <td class="text-right">&dollar; {{$detail->product->price}}</td>
      <td class="text-center">{{ $detail->quantity}}</td>
      <td class="text-center">${{ $detail->quantity*$detail->product->price}}</td>

      <td class="td-actions text-center">

        <form method="post" action="{{ url('/cart') }}">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <input type="hidden" name="cart_detail_id" value="{{ $detail->id }}">

          <a href="{{url('/products/'.$detail->product->id)}}" rel="tooltip" target="_blank" title="Ver" class="btn  btn-success btn-simple btn-xs btn-info btn-circle text-center" >ver</a>

          <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-simple btn-success btn-xs btn-danger btn-circle text-center" >Eliminar

          </button>
        </form>    
      </td>
    </tr>
  </tbody>
  @endforeach
</table>

<p class="text-left"><strong>Importe a pagar:</strong> {{ auth()->user()->cart->total }}</p>



<form method="post" action="{{url('/order')}}">
  {{csrf_field()}}
  <button class=" btn  btn-success btn-simple btn-xs btn-info btn-circle text-center"> realizar pedido
    
  </button>
  
</form>




@endif
</div>


</div>
</div>


</tbody>


</div>


@endsection



