@extends('layouts.app')
@section('title', 'Crear Producto')
@section('body-class','product-page')

@section('content')
<div class="wrapper">
    <div class="container">
<div class="section text-center">
  <h4 class="title text-center" style="background-color: #23c6c8" >Registrar Nuevo Producto</h4>
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


      <form method="post" action="{{ url('/admin/users') }}">
        {{ csrf_field() }}


        <div class="row">
          <div class="col-sm-6" >
            <div class="form-group label-floating has-success" >
              <label class="control-label"><h8 style="font-family: roboto;"> name</label>
              <input type="text" class="form-control" name="name" value="{{ old('name') }}" required="">
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group label-floating has-success" >
              <label class="control-label"><h8 style="font-family: roboto;">email</label>
              <input type="email" class="form-control" name="email" value="{{ old('email') }}" required="">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group label-floating has-success" >
              <label class="control-label"><h8 style="font-family: roboto;">contraseña</label>
              <input type="password" class="form-control" name="password" value="{{ old('password') }}" required="">
            </div>
          </div>
        
          <div class="col-sm-6">
           <div class="form-group label-floating has-success">
            <label class="control-label"><h8 style="font-family: roboto;">direccion</label>
            <input type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" required> 
          </div>
        </div>
            <div class="col-sm-6">
           <div class="form-group label-floating has-success">
            <label class="control-label"><h8 style="font-family: roboto;">telefono</label>
            <input type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" required> 
          </div>
        </div>
       <label>Sexo</label>
                <select name="sexo" value="{{ old('sexo') }}" placeholder="SELECCIONE EL SEXO" required>
                        <option value="0">seleccionar</option>
                        <option>Masculino</option>
                        <option>Femenino</option>
                                                       
                        
                        
                    </select>
        
      <div class="col-sm-6">
           <div class="form-group label-floating has-success">
            <label class="control-label"><h8 style="font-family: roboto;">admin</label>
            <input type="text" class="form-control" name="admin" value="{{ old('admin') }}" required> 
          </div>
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

