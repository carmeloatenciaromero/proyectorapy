@extends('layouts.app')
@section('title', 'Listado de imagenes')
@section('body-class','image-page')

@section('content')


    <div class="container">

    <div class="section text-center">
        <hr>
        <h4 class="title" style="background-color: #ee10109e; color: #fff; font-family: roboto" >Imagenes de {{$product->name}}</h4>
<br>
        <form method="post" action="" enctype="Multipart/form-data">
            {{csrf_field()}}
            <input type="file"name="photo" required>
                <button type ="submit" class="btn btn-primary btn-round " > Subir Nueva imagen
                </button>
                <a  href="{{ url('/admin/products') }}" class="btn btn-default btn-round" > Volver a Productos</a>
        </form>
<hr>    
           <section class="section section-lg section-bottom-md-70 bg-default">
        <div class="container">
          
          <div class="row row-lg row-40 justify-content-center">
            <div class="col-sm-6 col-lg-3 wow fadeInLeft" data-wow-delay=".2s" data-wow-duration="1s">
              <!-- Team Modern-->
              @foreach ($images as $image)
              <article class="team-modern"><a class="team-modern-figure" href="{{ $image->url }}" data-lightgallery="item">
                <img src="{{ $image->url }}" alt="" style="width: 270px; height: 236px;" /></a>
                <form method="post" action="" enctype="Multipart/form-data">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input type="hidden" name="image_id" value="{{ $image->id}}">
                <div class="team-modern-caption">
                  <button type="submit" class="btn btn-default">Eliminar </button> 
                  @if($image->featured)
                   <a href="#" >
                  <image src="{{ asset('images/fav.png' )}} " type="button"  rel="tooltip" title="imagen favorita del producto"> 
                  @else
                  <a href="{{url('/admin/products/'.$product->id.'/images/select/'.$image->id)}}" >
                    <image src="{{ asset('images/123.png' )}} " type="button"  rel="tooltip" title="Colocar como favorita"> 

                        </a>
                                   
                  @endif
            </form>
                  
                </div>
              </article>

            </div>

            <div class="col-sm-6 col-lg-3 wow fadeInLeft" data-wow-delay="0s" data-wow-duration="1s">
  @endforeach

@endsection

