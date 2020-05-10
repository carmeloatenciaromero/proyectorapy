@extends('layouts.app')

@section('body-class', 'profile-page')

@section('content')
<section class="section section-lg bg-default">
        <div class="container">
          <h3 class="oh-desktop" style="font-family: Satisfy"><span class="d-inline-block wow slideInUp">{{ $category->name }}</span></h3>
          <div class="row row-lg row-30">
            @foreach($products as $product)
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <!-- Product-->
              
              <article class="product wow fadeInLeft" data-wow-delay=".15s te">
                <div class="product-figure"> <img src="{{ $product->featured_image_url }}" alt="" style="width: 180px; height: 179px; object-fit: cover;"  /> 
                </div>
                
               <div class="product-rating">
                <a style="text-align: center; font-family: Satisfy" href="{{ url('/products/'.$product->id) }}">{{ $product->name }}</a>
               
                            
                
              </article>
             
            </div>
             @endforeach
            </div>
            </div>
            
        </div>
      </section>
      <div style="padding-top: 70px;">
@include('includes.footer')
</div>
@endsection
