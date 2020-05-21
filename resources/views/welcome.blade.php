@extends('layouts.app')
@section('title','Rapiya')
@section('body-class','landing-page')

@section('content')

<style>
  
  .tt-query {
          -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
             -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
                  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        }

        .tt-hint {
          color: #999
        }

        .tt-menu {    /* used to be tt-dropdown-menu in older versions */
          width: 522px;
          margin-top: 4px;
          padding: 4px 0;
          background-color: #fff;
          border: 1px solid #ccc;
          border: 1px solid rgba(0, 0, 0, 0.2);
          -webkit-border-radius: 4px;
             -moz-border-radius: 4px;
                  border-radius: 4px;
          -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
             -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
                  box-shadow: 0 5px 10px rgba(0,0,0,.2);
        }

        .tt-suggestion {
          padding: 3px 20px;
          line-height: 24px;
        }

        .tt-suggestion.tt-cursor,.tt-suggestion:hover {
          color: #fff;
          background-color: #0097cf;

        }

        .tt-suggestion p {
          margin: 0;
        }
</style>


      <section class="section swiper-container swiper-slider swiper-slider-2 swiper-slider-3" data-loop="true" data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade" >
        
        <div class="swiper-wrapper text-sm-left" >
          @foreach($sliderrs as $sliderr)
          <div class="swiper-slide context-dark " data-slide-bg="{{$sliderr->url}}">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">

                  <div class="col-sm-9 col-md-8 col-lg-7 col-xl-7 offset-lg-1 offset-xxl-0">
                    <h3 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="15">{{$sliderr->texto1}}</span></h3>
                    <p class="big swiper-text" data-caption-animate="fadeInLeft" data-caption-delay="300">{{$sliderr->texto2}}</p> <a class="button button-lg button-primary button-winona button-shadow-2" href="#sobre" data-caption-animate="fadeInUp" data-caption-delay="300">Ver Menú</a>

                  </div>

                </div>

              </div>

            </div>
</div>

@endforeach
          </div>
           
            
        <!-- Swiper Pagination-->
        <div class="swiper-pagination" data-bullet-custom="true"></div>

        <!-- Swiper Navigation-->
        <div class="swiper-button-prev">
          <div class="preview">
            <div class="preview__img"></div>
          </div>
          <div class="swiper-button-arrow"></div>
        </div>
        <div class="swiper-button-next">
          <div class="swiper-button-arrow"></div>
          <div class="preview">
            <div class="preview__img"></div>

          </div>

        </div>

      </section>
      <div class="text-center" style="padding: 30px">
              <form method="get" action="{{url('/search')}}">
        <input type="text" placeholder="Busca tu comida favorita" class="linea round pedidos" style="width: 500px; height: 60px; background-color: #fff; color: #c10707; text-align: left;" name="query" id="search">
        <button class="icon fa fa-search  btn btn-xs btn-info btn-circle " type="submit" style="background-color:#c10707; border-color: #c10707 "></button>

      </form>
            </div>
      <!-- What We Offer-->
      <section class="section section-md bg-default" style="padding: 10px;">
        <div class="container">
          <span class="d-inline-block wow slideInUp">
            
                 
          <div> <file class="linea round pedidos"> <h6 style="color: #f44336"></h6>  </file>
             <file class="linea round pedidos"> <h3 style="color: #fff; font-family: Satisfy">NUESTRAS CATEGORIAS</h3></file>
              <file class="linea round pedidos"> <h6 style="color: #f44336"></h6>  </file>
          </div>
           <br>
        </span>
          
         

          <div class="team" >
    <div class="row">

        @foreach($categories as $category)

        <div class="col-md-4">
            <div class=" card card-chart team-player">
              <div class="oh-desktop">
                <!-- Services Terri-->

                <article class="services-terri wow slideInUp">
                  

                  <div class=" card card-chart services-terri-figure"> <img src="{{$category->featured_image_url}}"  alt="" style="background-image: url('{{ asset('/images/default.gif') }}'); max-width: 376px; max-height: 278px; object-fit: cover; width: 376px; height: 278px">
                  </div>
                  <div class="services-terri-caption"><a href="{{url('/categories/' .$category->id)}}"></a>
                    <h5 class="services-terri-title" style="font-family: Satisfy"><a href="{{url('/categories/' .$category->id)}}" style="text-transform: uppercase">{{$category->name}}</a></h5>
                  </div>
                   
                </article>
               
              </div>

            </div>
</br>
          </div>

            @endforeach
          </section>


            <section class="primary-overlay section parallax-container" data-parallax-img="images/slide-1-1920x753.jpg">
        <div class="parallax-content section-xxl context-dark text-md-left">
          <div class="container">
            <div class="row justify-content-end">
              <div class="col-sm-9 col-md-7 col-lg-5">
                <div class="cta-modern">
                  <h3 class="cta-modern-title cta-modern-title-2 oh-desktop"><span class="d-inline-block wow fadeInLeft">martes compra 2 y lleva 4 hamburguesas</span></h3>
                  <p class="cta-modern-text cta-modern-text-2 oh-desktop" data-wow-delay=".1s"><span class="cta-modern-decor cta-modern-decor-2 wow slideInLeft"></span><span class="d-inline-block wow slideInUp">todas estas delicias en tus manos</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> 
      <section class="section section-lg bg-default" id="sobre">
        <div class="container">

          <span class="d-inline-block wow slideInUp"><div> <file class="linea round pedidos">   </file>
             <file > <h2 class="linea round pedidos" style="color: #ffff; font-family: Satisfy; font-size:40px">NUESTRO MENÚ</h2></file>
              <file class="linea round pedidos">  </file>
          </div></span></h3>
          <div class="row row-lg row-30">
            @foreach($products as $product)
            <div class="col-sm-6 col-lg-4 col-xl-3">

               
              <article class="product wow fadeInLeft text-center" data-wow-delay=".15s">
                <a href="{{url('/products/' .$product->id)}}" class="product-title text-center">{{$product->category_name}}</a>
                <div class="product-figure"> <a data-lightgallery="item" href="{{$product->featured_image_url}}"><img src="{{$product->featured_image_url}}" alt="" style= " height: 310px; height: 150px;" ></a>
                </div>
                <div class="product-rating text-center">
                </div>
                <a  href="{{url('/products/' .$product->id)}}" class="product-title text-center">{{$product->name}}</a>

                <div class="product-price-wrap text-center">
                  <div class="product-price text-center">${{$product->price}}</div>
                </div>
                
              </article>
             



            </div>
             @endforeach
             <br>
             
            
        </div>
        <div class="text-center">
            {{$products->links()}}
            </section>
            
        <section class="section section-sm bg-default">
               <hr>
        <div class="container" >
          <div class="owl-carousel owl-style-11 dots-style-2" data-items="1" data-sm-items="1" data-lg-items="2" data-xl-items="4" data-margin="30" data-dots="true" data-mouse-drag="true" data-rtl="true">
            <article class="box-icon-megan wow fadeInUp">
              <div class="box-icon-megan-header">
                <div class="box-icon-megan-icon linearicons-bag"></div>
              </div>
              <h5 class="box-icon-megan-title"><a  href="#">Entrega Gratis</a></h5>
              <p class="box-icon-megan-text" style=" font-family: Emilys Candy; font-size: 17px;color: black">Si pide más de 3 productos, con gusto se las entregaremos de forma gratuita.</p>
            </article>
            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".05s">
              <div class="box-icon-megan-header">
                <div class="box-icon-megan-icon linearicons-map2"></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="#">Buena ubicacion</a></h5>
              <p class="box-icon-megan-text" style="font-family: Emilys Candy; font-size: 17px; color: black">Nuestra restaurante está situado en el centro de la ciudad y es muy fácil llegar incluso los fines de semana.</p>
            </article>
            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".1s">
              <div class="box-icon-megan-header">
                <div class="box-icon-megan-icon linearicons-radar"></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="#"> Wi-Fi gratis</a></h5>
              <p class="box-icon-megan-text" style=" font-family: Emilys Candy; font-size: 17px;color: black">Tenemos Wi-Fi gratuito disponible para todos los clientes y visitantes de nuestro restaurante.</p>
            </article>
            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".15s">
              <div class="box-icon-megan-header">
                <div class="box-icon-megan-icon linearicons-thumbs-up"></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="#">Buen Servicio</a></h5>
              <p class="box-icon-megan-text" style=" font-family: Emilys Candy; font-size: 17px;color: black">El cliente es nuestra prioridad número 1, ya que brindamos un cliente de primer nivel service.</p>
            </article>
          </div>
        </div>

     </section>
      <section class="section "id="mapa">
        


          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15752.543864064755!2d-74.7442775!3d9.2321348!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe6085b6b76cef57e!2sRapi-ya%20la%20revolucion%20del%20sabor!5e0!3m2!1ses!2sco!4v1587740011499!5m2!1ses!2sco" width="1366" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        </div>
      </section>
        @include('includes.footer')
@endsection
@section('scripts')
<script src="{{ asset('/js/typeahead.bundle.min.js') }}"></script>
    <script>
        $(function () {
            // 
            var products = new Bloodhound({
              datumTokenizer: Bloodhound.tokenizers.whitespace,
              queryTokenizer: Bloodhound.tokenizers.whitespace,
              prefetch: '{{ url("/products/json") }}'

            });            

            // inicializar typeahead sobre nuestro input de búsqueda
            $('#search').typeahead({
                hint: true,
                highlight: true,
                minLength: 1
            }, {
                name: 'products',
                source: products
            });
        });
    </script>

@endsection