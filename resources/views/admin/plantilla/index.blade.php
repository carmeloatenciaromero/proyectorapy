@extends('layouts.app')
@section('title','Rapiya')
@section('body-class','landing-page')

@section('content')

 <div class="encabezado">
<img src="img-encabezado.png" alt="image" height="100px" width="1152px">
</div>
 
<div class="contenido">

              <div class="menu">
              <ul>
              <li><a href="ejercicio1.html" target="formularios">Ejercicio1</a></li>
              </ul>  
              <ul>
              <li><a href="ejercicio2.html" target="formularios">Ejercicio1</a></li>
              </ul>  
              </div>
   
              <div class="principal">
              <h2>Div de contenido, aqui se mostraran las paginas HTML</h2>
<iframe src="principal.html" style="width: 90%; height: 80%" name="formularios"></iframe>
              </div>

</div>


@endsection