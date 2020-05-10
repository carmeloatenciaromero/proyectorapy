@extends('layouts.app')
@section('title', 'crear categoria')
@section('body-class','product-page')

@section('content')
<div class="wrapper">
    <div class="container">
<div class="section text-center">
  <h4 class="title text-center" style="background-color: #ee10109e; color: #fff; font-family: roboto" >Registrar Nueva categoria</h4>
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

      <form method="post" action="{{ url('/admin/categories') }}">
        {{ csrf_field() }}


        <div class="row">
          <div class="col-sm-6" >
            <div class="form-group label-floating has-success" >
              <label class="control-label"><h8 style="font-family: roboto;"> Nombre del categoria</label>
              <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            </div>
          </div>

               
          
      <textarea style="font-family: roboto;" class="form-control label-floating has-success" placeholder="Descripción extensa del producto" rows="5" name="description">{{ old('description') }}</textarea>
    </div>
</br>
      <button class="btn btn-info">Registrar categoria</button>

      <a href="{{ url('/admin/categories') }}" class="btn btn-dark">Cancelar</a>

    </button>
  </form>
</br>
</br>
</div>
</div>
</div>

</div>
@endsection

