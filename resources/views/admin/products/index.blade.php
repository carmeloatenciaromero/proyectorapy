@extends('layouts.app')
@section('title', 'Listado de Productos')
@section('body-class','product-page')

@section('content')
<div class="wrapper">
    <div class="container">

<div class="section text-center">
    <h4 class="title" style="background-color: #23c6c8">Listado de Productos</h4>
</br>
   <a href="{{ url('/admin/products/create') }}" class="btn btn-success button-circle" style="background-color: #88bdac; border-color:#88bdac ">Nuevo producto</a>
  <!--   <div class="team"> -->
    <div class="row">
        <table class="table table-sm">
    <thead>
        <tr class="table-active">
         <!--    <th class="text-center ">#</th> -->
            <th class="text-center col-md-2">Nombre</th>
            <th class="col-md-4 text-center">Descripción</th>
            <th class="text-center">Categoria</th>
            <th class="text-right">Precio</th>
            <th class="text-center">Opciones</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($products as $product)
        <tr>
            <!-- <td class="text-center" style="background-color: #d6ffd9">{{$product->id}}</td> -->
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->category_name}}</td>
            <td class="text-right">&dollar; {{$product->price}}</td>
            <td class="td-actions text-right">
              
              <form method="post" action="{{ url('/admin/products/'.$product->id) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="#" rel="tooltip" title="ver producto" class="btn btn-xs btn-info btn-circle text-center" >Ver</a>
                    
                
                <a href="{{url('/admin/products/'.$product->id.'/edit')}}" rel="tooltip" title="Editar producto" class="btn btn-xs btn-dark  btn-circle text-center" >Edit</a>
                    
                </a>
                <a href="{{url('/admin/products/'.$product->id.'/images')}}" rel="tooltip" title="Ver Imagenes" class="btn btn-xs btn-success btn-circle text-center"><h8>Img</h8></a>
               
                <button class="btn btn-xs btn-danger btn-circle text-center"   type="submit" rel="tooltip" title="Eliminar"  onclick="return confirm('Desea eliminar a {{$product->name}}')" >Borrar
                </button>
            
              </form>    


                

  
</div>  

      </div>


</div>
            </td>
        </tr>


        @endforeach

    </tbody>

</table>

        {{ $products->links() }}
    </div>

 </div>

</div>


</div>


@include('includes.footer')

    
@endsection

