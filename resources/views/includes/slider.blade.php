<style >
  .carousel{
    .carousel-control{
        &.left,
        &.right{
            background-image: none;
        }

        &.right{
            i{
                right: 0;
            }
        }
    }

    .card{
        margin-top: 0;
    }

    .item{
        text-align: center;
    }
    &.carousel-full-nagivation{
      .carousel-control{
          width: 50%;

          &.left,
          &.right{
              background-image: none;
          }

          .material-icons,
          .fa{
              display: none;
          }
      }
  }

    .carousel-control{
        height: 15%;
        margin: auto;
    }

    .carousel-control-prev,
    .carousel-control-next{
        .material-icons{
            z-index: 5;
            display: inline-block;
            font-size: 50px;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            height: 50px;
            margin: auto;
        }
    }
    .carousel-indicators{
        bottom: 5px;

        li,
        .active{
            margin: 11px 10px;
        }

        li{
            display: inline-block;
            width: 10px;
            height: 10px;
            text-indent: -999px;
            cursor: pointer;
            border: 1px solid #fff;
            border-radius: 10px;
            background: #FFFFFF;
            @include shadow-2dp();
            @extend .animation-transition-general;
            border-radius: $border-radius-small;
        }
        .active{
            margin-top: 10px;
            @include transform-scale(1.5);
            @include shadow-4dp();
        }
    }

    .carousel-caption{
        padding-bottom: 45px;

        .material-icons{
            position: relative;
            top: 5px;
        }
    }

}

</style>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('img/citi.jpg' )}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/christian.jpg' )}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/avatar.jpg' )}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

