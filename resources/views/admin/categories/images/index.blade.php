@extends('layouts.app')
@section('title', 'Listado de imagenes')
@section('body-class','image-page')

@section('content')


    <div class="container">

    <div class="section text-center">
        <h2 class="title" style="background-color: #d6ffd9">Imagenes de {{$product->name}}</h2>
<hr>
        <form method="post" action="" enctype="Multipart/form-data">
            {{csrf_field()}}
            <input type="file"name="photo" required>
                <button type ="submit" class="btn btn-primary btn-round " style="background-color: #3a9d41"> Subir Nueva imagen
                </button>
                <a href="{{ url('/admin/products') }}" class="btn btn-default btn-round" style="background-color: #f44336"> Volver a Productos</a>
        </form>
<hr>    
            @foreach ($images as $image)
            <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
              <!-- Thumbnail Mary-->
              <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInRight"><a class="thumbnail-mary-figure" href="images/gallery-6-1200x800-original.jpg" data-lightgallery="item"><img src="{{ $image->url }}" alt="" width="311" height="289"/></a>

                <form method="post" action="" enctype="Multipart/form-data">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input type="hidden" name="image_id" value="{{ $image->id}}">
                <div class="thumbnail-mary-caption">
                  <div>
                    <h6 class="thumbnail-mary-title"><button type="submit">eliminar</a></h6>
                        @if($image->featured)
                 
                        <div class="thumbnail-mary-location">favorita</div>
                @else
                    <!-- <a href="{{url('/admin/products/'.$product->id.'/images/select/'.$image->id)}}" > -->
                   
                    <a href="{{url('/admin/products/'.$product->id.'/images/select/'.$image->id)}}" >
                    <div class="thumbnail-mary-location"> colocar como favorita</div>

                        </a>
                                   
                @endif
            </form>
                    
                  </div>
                </div>
              </article>
            </div>


@endforeach
</div>

</div>
  
</div>

</div>

</div>


@endsection

