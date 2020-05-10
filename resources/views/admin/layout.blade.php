@extends('layouts.app')
@section('title','Rapiya | Dashboard')
@section('body-class','product-page')

@section('content')
<div class="wrapper">
<div class="header header-filter" style="background-image: url('{{ asset('img/citi.jpg' )}}')">

</div>
</div>s
<div class="main main-raised">
<div class="container">

<div class="section ">
    @if (auth()->user()->admin)
     <h4 class="subtitle text-left" style="background-color: #d6ffd9"> Hola!..  {{ Auth::user()->name }} Bienvenido a RapiYa administrador</h4>
     @else
     <h4 class="subtitle text-left" style="background-color: #d6ffd9"> Hola!..  {{ Auth::user()->name }} Bienvenido a RapiYa</h4>
     @if (session('notification'))
    <div class="alert alert-success">
        {{ session('notification') }}
    </div>
  @endif
     <h6 class="subtitle text-center">Carrito de compras</h6>
    @endif


 
  @if (auth()->user()->admin)
         <ul>
         
        <a   href="{{url('admin/products')}}">
            <image title="Gestionar productos" src="{{ asset('img/gestion.png' )}} "></image>
           
        </a>

        
        
        </ul>
      

         @else 
        <ul class="nav nav-pills nav-pills-primary" role="tablist">
        <li class="active">
        <a href="#dashboard" role="tab" data-toggle="tab">
            <image src="{{ asset('img/cart.png' )}} " ></image>
        </a>
        
        <li>
        <a href="#tasks" role="tab" data-toggle="tab">
            <image src="{{ asset('img/pedidos.png' )}} "></image>
           
        </a>

        </li>
        </ul>

  

  
  <table class="table">
    <thead>
        <tr>
         <th>Img</th>
            <th class="text-center col-md-2">Nombre</th>
            <th class="text-right">Precio</th>
            <th class="text-center">cantidad</th>
            <th class="text-center">subtotal</th>
            <th class="text-center">Opciones</th>
            <th>total</th>
        </tr>
    </thead>
    <tbody>
       @foreach(auth()->user()->cart->details as $detail)
        <tr>
            <td><img src="{{ $detail->product->featured_image_url }}" style="width: 180px; height: 179px; object-fit: cover;" >
            </td>

            <td><a href="{{ url('/products/'.$detail->product->id) }}" target="_blank">{{ $detail->product->name }}</a></td>
         
            <td class="text-right">&dollar; {{$detail->product->price}}</td>
            <td class="text-center">{{ $detail->quantity}}</td>
             <td class="text-center">${{ $detail->quantity*$detail->product->price}}</td>
             <td></td>
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
        

                

  
             
        
        @endif
        </div>


        </div>
        </div>

    
      </tbody>


</div>

@include('includes.footer')
@endsection



