@extends('layouts.app')
@section('title', 'Listado de imagenes')
@section('body-class','image-page')

@section('content')


    <div class="container">

    <div class="section text-center">
        <hr>
        <h4 class="title" >Imagenes para slider</h4>
<br>
        <form method="post" action="" enctype="Multipart/form-data">
            {{csrf_field()}}
            <input type="file"name="photo" required>
            <br>
            <div class="text-left"><label class="control-label text-left"><h8 style="font-family: roboto;"> Texto Principal</label>
              <input max="30" min="3" type="text" class="form-control" name="texto1" value="{{ old('texto1') }}" required="">
              <br>
              <label class="control-label"><h8 style="font-family: roboto;"> Texto Secundario</label>
              <input max="30" min="3" type="text" class="form-control" name="texto2" value="{{ old('texto2') }}" required="">
            </div>
            <br>
              <div class="text-center"><button type ="submit" class="btn btn-primary btn-round " > Subir Nueva imagen
                </button>
                <a  href="{{ url('/admin/products') }}" class="btn btn-default btn-round" > Volver a Productos</a></div>
                
        </form>
<hr>    
           <section class="section section-lg section-bottom-md-70 bg-default">
        <div class="container">
          
          <div class="row row-lg row-40 justify-content-center">
            <div class="col-sm-6 col-lg-3 wow fadeInLeft" data-wow-delay=".2s" data-wow-duration="1s">
              <!-- Team Modern-->
              @foreach ($sliderrs as $sliderr)
              <article class="team-modern"><a class="team-modern-figure" href="{{ $sliderr->url }}" data-lightgallery="item">
                <img src="{{ $sliderr->url }}" alt="" style="width: 270px; height: 236px;" /></a>

                <form method="post" action="" enctype="Multipart/form-data">
            {{csrf_field()}}
            {{method_field('DELETE')}}
          
            <input type="hidden" name="sliderr_id" value="{{ $sliderr->id}}">
                <div class="team-modern-caption">
                </form>
                <form method="post" action="{{ url('/admin/sliders/'.$sliderr->id) }}">
                  {{csrf_field()}}
            {{method_field('DELETE')}}
                <button type="submit" class="btn btn-default">Eliminar </button>   
                  
            </form>
            
                </div>
              </article>

            </div>

            <div class="col-sm-6 col-lg-3 wow fadeInLeft" data-wow-delay="0s" data-wow-duration="1s">
  @endforeach

@endsection

