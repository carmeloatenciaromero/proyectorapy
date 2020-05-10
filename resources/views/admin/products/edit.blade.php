@extends('layouts.app')
@section('title','Rapiya | Editar producto')

@section('body-class','product-page')

@section('content')
<div class="wrapper">
    <div class="container">
<div class="section text-center">
  <h4 class="title text-center " style="background-color: #ee10109e; color: #fff; font-family: roboto">Actualizar {{$product->name}}</h4>
  
     </h2>

<form method="post" action="{{ url('/admin/products/'.$product->id.'/edit') }}">
                {{ csrf_field() }}

                 <div class="row">
          <div class="col-sm-6" >
            <div class="form-group label-floating has-success" >
              <label class="control-label"><h8 style="font-family: roboto;"> Nombre del producto</label>
              <input type="text" class="form-control" name="name" value="{{ $product->name }}" required="">
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group label-floating has-success" >
              <label class="control-label"><h8 style="font-family: roboto;">Precio del producto</label>
              <input type="number" class="form-control" name="price" value="{{$product->price}}" required="">
            </div>
          </div>
        
          <div class="col-sm-6">
           <div class="form-group label-floating has-success">
            <label class="control-label"><h8 style="font-family: roboto;">Descripción corta</label>
            <input type="text" class="form-control" name="description" value="{{$product->description }}" required> 
          </div>
        </div>
            <div class="col-sm-6">
            <div class="form-group label-floating has-success">
            <label class="control-label"><h8 style="font-family: roboto;">Categoria</label>
              <select class="form-control" name="category_id">
                <option value="0">GENERAL</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}" @if($category->id == old('category_id', $product->category_id)) selected @endif>
                    
                {{ $category->name}}</option>
                @endforeach
              </select>
        </div>

      </div>

      <textarea style="font-family: roboto;" class="form-control label-floating has-success" placeholder="Descripción extensa del producto" rows="5" name="long_description">{{ $product->long_description }}</textarea>
    </div>
    </br>
      <button class="btn btn-info">Actualizar</button>

      <a href="{{ url('/admin/products') }}" class="btn btn-dark">Cancelar</a>

    </button>
  </form>
</br>
</br>
</div>
</div>
</div>

</div>
@endsection

