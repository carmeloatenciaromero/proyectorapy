@extends('layouts.app')
@section('title', 'Crear Producto')
@section('body-class','product-page')

@section('content')
<div class="wrapper">
    <div class="container">
<div class="section text-center">
  <h5 class="title text-center" style="background-color: #ee10109e; color: #fff; font-family: roboto" >Registrar Nuevo Producto</h5>
  <br>
   @if ($errors->any())
                <div class="alert alert-danger" style="text-align: left;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


      <form method="post" action="{{ url('/admin/products') }}">
        {{ csrf_field() }}


        <div class="row">
          <div class="col-sm-6" >
            <div class="form-group label-floating has-success" >
              <label class="control-label"><h8 style="font-family: roboto;"> Nombre del producto</label>
              <input type="text" class="form-control" name="name" value="{{ old('name') }}" required="">
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group label-floating has-success" >
              <label class="control-label"><h8 style="font-family: roboto;">Precio del producto</label>
              <input type="number" class="form-control" name="price" value="{{ old('price') }}" required="">
            </div>
          </div>
        
          <div class="col-sm-6">
           <div class="form-group label-floating has-success">
            <label class="control-label"><h8 style="font-family: roboto;">Descripción corta</label>
            <input type="text" class="form-control" name="description" value="{{ old('description') }}" required> 
          </div>
        </div>
            <div class="col-sm-6">
            <div class="form-group label-floating has-success">
            <label class="control-label"><h8 style="font-family: roboto;">Categoria</label>
              <select class="form-control" name="category_id" >
                
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{ $category->name}}</option>
                @endforeach
              </select>
        </div>

      </div>

      <textarea style="font-family: roboto;" class="form-control label-floating has-success" placeholder="Descripción extensa del producto" rows="5" name="long_description">{{ old('long_description') }}</textarea>
    </div>
    </br>
      <button class="btn btn-info">Registrar</button>

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

