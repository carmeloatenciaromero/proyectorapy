<!DOCTYPE html>
<html class="wide wow-animation" lang="es">
<head>
  <title>@yield('title', config('app.name'))</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="{{ asset('images/rapy.ico' )}}" type="image/x-icon">
  <!-- Stylesheets-->

  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,400,700,400italic%7CJosefin+Sans:400,700,300italic">
<link href="https://fonts.googleapis.com/css2?family=Sacramento&family=Satisfy&display=swap" rel="stylesheet">    
<link href="https://fonts.googleapis.com/css2?family=Bellota:wght@700&family=Lobster&family=Nunito:ital,wght@0,200;1,300&family=Slabo+27px&display=swap&family=Oswald:wght@200&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Emilys+Candy&family=Lobster&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  

@yield('styles')
</head>
<body class="@yield('body-class')">
  <div class="preloader">
    <div class="wrapper-triangle">
      <div class="pen">
        <div class="line-triangle">
          <div class="triangle"></div>
          <div class="triangle"></div>
          <div class="triangle"></div>
          <div class="triangle"></div>
          <div class="triangle"></div>
          <div class="triangle"></div>
          <div class="triangle"></div>
        </div>
        <div class="line-triangle">
          <div class="triangle"></div>
          <div class="triangle"></div>
          <div class="triangle"></div>
          <div class="triangle"></div>
          <div class="triangle"></div>
          <div class="triangle"></div>
          <div class="triangle"></div>
        </div>
        <div class="line-triangle">
          <div class="triangle"></div>
          <div class="triangle"></div>
          <div class="triangle"></div>
          <div class="triangle"></div>
          <div class="triangle"></div>
          <div class="triangle"></div>
          <div class="triangle"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="page">

    <!-- Page Header-->
    <header class="section page-header">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="56px" data-xl-stick-up-offset="56px" data-xxl-stick-up-offset="56px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-inner-outer" >
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel" >
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a href="{{ url('/') }}" ><img src="{{ asset('images/logo.png' )}}"></a></div>
              </div>
              <div class="rd-navbar-right rd-navbar-nav-wrap" >
                <div class="rd-navbar-aside" >
                  <ul class="rd-navbar-contacts-2">
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-left" ><span class="icon mdi mdi-phone"></span></div>
                        <div class="unit-body"><a class="phone" href="tel:#">301 606 8111</a></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                        <div class="unit-body"><a class="address" href="https://goo.gl/maps/YUV7mV4WWcWMA8aD8" target="_blank" style="font-size: 12px">Transversal 4B. #12-133 Calle La Esperanza • Centro Magangué - Bolívar</a></div>
                      </div>
                    </li>
                  </ul>
                  <ul class="list-share-2">
                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                    @if (auth()->user())
                    <li> <a class="icon mdi mdi-cart-outline" href="/home">

                     <span class="badge badge-warning navbar-badge"></span></a>          
                     </li>
                     @else
                     <li> <a class="icon mdi mdi-cart-outline" href="/home"> </a>
                      @endif
                  </ul>
                </div>
                <div class="rd-navbar-main">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav" >
                    <li class="rd-nav-item active"><a style="font-family: Caveat; font-size: 25px" class="rd-nav-link" href="{{ url('/') }}">Inicio</a>
                    </li>

                    @guest
                    <li class="rd-nav-item"><a style="font-family: Caveat; font-size: 25px" class="rd-nav-link" href="{{ route('login') }}">Ingresar</a></li>
                    <li class="rd-nav-item"><a style="font-family: Caveat; font-size: 25px" class="rd-nav-link" href="{{ route('register') }}">Registrarse</a></li>
                    @else
                    <li class="rd-nav-item active">
                      <a style="font-family: Caveat; font-size: 20px" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre >
                        {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <ul class="dropdown-menu" role='Menu'>
                        @if (auth()->user()->admin)
                        <li class="dropdown-item">
                          <a  href="{{url('admin/products')}}">Gestionar Productos</a>
                        </li>
                        <li class="dropdown-item">
                          <a  href="{{url('admin/categories')}}">Gestionar Categorias</a>
                        </li>
                        <li class="dropdown-item">
                          <a  href="{{url('admin/sliders')}}">Gestionar sliders</a>
                        </li>
                        <li class="dropdown-item">
                          <a  href="{{url('admin/users')}}">Gestionar Usuarios</a>
                        </li>
                        <li class="dropdown-item">
                          <a href="{{ url('/home') }}">Dashboard</a>
                        </li>
                        @else
                        <li class="dropdown-item">
                          <a href="{{ url('/home') }}">Carrito de compras</a>
                        </li>
                         @endif
                        <li class="dropdown-item">
                          <a role="separator" class="divider" target="_blank" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                          Cerrar sesión
                        </a>
                       
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                        </form>
                      </li>
                    </ul>
                  </li>
                  @endguest
                </ul>
              </div>
            </div>
            <div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-open rd-navbar-fixed-element-1" data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate="data-multitoggle-isolate">
              
            </div>
            
              <div class="rd-navbar-project-content rd-navbar-content">
                <div>
                  <div class="row gutters-20" data-lightgallery="group">
                    <div class="col-6">

                               
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </nav>
                </div>
              </header>
           
          
          <div class="wrapper">
            @yield('content')
            
          </div>

          <div class="snackbars" id="form-output-global"></div>
          <!-- Javascript-->
          <script src="{{asset('js/core.min.js')}}"></script>
          <script src="{{asset('js/script.js')}}"></script>
          <script src="{{asset('js/functions.js')}}"></script>
          @yield('scripts')
          <!-- coded by Himic-->
        </body>
        </html>