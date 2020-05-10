@extends('layouts.app')
@section('title','Rapiya | Comprar')

@section('body-class', 'profile-page')

@section('content')

<section class="section section-lg bg-default text-md-left">
        <div class="container">
          <div class="row row-60 justify-content-center flex-lg-row-reverse">
            <div class="col-md-8 col-lg-6 col-xl-5">
              <div class="offset-left-xl-70">
                <h3 class="heading-3">{{ $product->name }}</h3>
                <div class="slick-quote">
                  <!-- Slick Carousel-->
                  <div class="slick-slider carousel-parent" data-autoplay="true" data-swipe="true" data-items="1" data-child="#child-carousel-5" data-for="#child-carousel-5" data-slide-effect="true">
                    <div class="item">
                      <!-- Quote Modern-->
                      <article class="quote-modern">
                        <h5 class="quote-modern-text"><span class="q">{{ $product->description }}</span></h5>
                        @if (session('notification'))
                        <div class="alert alert-success">
                            {{ session('notification') }}
                        </div>
                    @endif
                        <h5 class="quote-modern-author">$ {{ $product->price }}</h5>
                        <br>
                        @if (auth()->check())
                        <div class="btn btn-danger btn-lg btn-flat" style="padding: 0.5rem 2rem" data-toggle="modal" data-target="#modalAddToCart"><a class="btn   fas fa-cart-plus fa-lg mr-2" style="color: #ffffff" href="#">  Comprar</a>
                  </div>
                  @else
                  <div class="btn btn-danger btn-lg btn-flat" style="padding: 0.5rem 2rem; " ><a class="btn   fas fa-cart-plus fa-lg mr-2" style="color: #ffffff"   href="{{ url('/login?redirect_to='.url()->current()) }}">Comprar </a>
                
                  </div>
                  
               
                 @endif
                      </article>
                    </div>
                    <div class="item">
                      <!-- Quote Modern-->
                      
                      <!-- Quote Modern-->
                      
                    </div>
                    <div class="item">
                      <!-- Quote Modern-->
                      
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-xl-7"><img src="{{ $product->featured_image_url }}" alt="" width="669" height="447"/>
            </div>
          </div>
        </div>
      </section>
      <div class="modal fade" id="modalAddToCart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h6 class="modal-title" id="myModalLabel">Seleccione la cantidad que desea agregar</h6>
      </div>
      <form method="post" action="{{ url('/cart') }}">
        {{ csrf_field() }}
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <div class="modal-body">
            <input min="0"  type="number" name="quantity" value="1" class="form-control">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-info btn-simple">Añadir al carrito</button>
          </div>
      </form>
    </div>
  </div>
</div>   
<div style="padding-top: 70px;">

@endsection
