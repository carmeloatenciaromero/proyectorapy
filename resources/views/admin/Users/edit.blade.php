@extends('layouts.app')
@section('title', 'Crear Producto')
@section('body-class','product-page')

@section('content')
<div class="wrapper">
    <div class="container">
<div class="section text-center">
  <h4 class="title text-center" style="background-color: #ee10109e; color: #fff; font-family: roboto">actualizar informacion del usuario</h4>
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


      <form method="post" action="{{ url('/admin/users/'.$user->id.'/edit') }}">
        {{ csrf_field() }}


        <div class="row">
          <div class="col-sm-6" >
            <div class="form-group label-floating has-success" >
              <label class="control-label"><h8 style="font-family: roboto;"> name</label>
              <input type="text" class="form-control" name="name" value="{{ $user->name }}" required="">
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group label-floating has-success" >
              <label class="control-label"><h8 style="font-family: roboto;">email</label>
              <input type="email" class="form-control" name="email" value="{{ $user->email}}" required="">
             
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group label-floating has-success" >
              <label class="control-label"><h8 style="font-family: roboto;">contraseña</label>
              <input readonly="readonly" type="password" class="form-control" name="password" value="{{$user->password }}">
            </div>
          </div>
        
          <div class="col-sm-6">
           <div class="form-group label-floating has-success">
            <label class="control-label"><h8 style="font-family: roboto;">direccion</label>
            <input type="text" class="form-control" name="direccion" value="{{ $user->direccion}}" required> 
          </div>
        </div>
            <div class="col-sm-6">
           <div class="form-group label-floating has-success">
            <label class="control-label"><h8 style="font-family: roboto;">telefono</label>
            <input type="text" class="form-control" name="telefono" value="{{ $user->telefono }}" required> 
          </div>
        </div>
        <label>Sexo</label>
                <select name="sexo" value="{{$user->sexo}}" placeholder="SELECCIONE EL SEXO" required>
                        <option>{{$user->sexo}}</option>
                        <option>Masculino</option>
                        <option>Femenino</option>
                                                       
                        
                        
                    </select>
       
        
      <div class="col-sm-6">
           <div class="form-group label-floating has-success">
            <label class="control-label"><h8 style="font-family: roboto;">admin</label>
            <input type="number" min="0"  max="1" class="form-control" name="admin" value="{{ $user->admin}}" required> 
          </div>
    </div>
  </div>
    </br>
    <div> 
      <button class="btn btn-info">Registrar</button>

      <a href="{{ url('/admin/users') }}" class="btn btn-dark">Cancelar</a>

    </button>
    </div>
      
  </form>
</br>
</br>
</div>
</div>
</div>

</div>

@endsection

