@extends('layouts.app')
@section('body-class','category-page')

@section('content')
<div class="wrapper">
<div class="header header-filter" style="background-image: url('{{ asset('img/citi.jpg' )}}')">

</div>

<div class="main main-raised">
<div class="container">
<!-- <div class="section text-center section-landing">



</div> -->

<div class="section ">
<h4 class="title text-center" style="background-color: #ee10109e; color: #fff; font-family: roboto">Actualizar categoria {{$category->name}} </h4>

<form method="post" action="{{ url('/admin/categories/'.$category->id.'/edit') }}">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating has-success" >
                            <label class="control-label">Nombre de la categoria</label>
                            <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                        </div>
                    </div>

                    

               
                        <textarea class="form-control label-floating has-success" placeholder="Descripción extensa de la categoria" rows="5" name="long_description">{{ $category->description }}</textarea>
                    </div>
<br>
                <button class="btn btn-info">Actualiza la categoria</button>
                <a href="{{ url('/admin/categories') }}" class="btn btn-dark">Cancelar</a>
            </form>


</div>

</div>
</div>

</div>

@include('includes.footer')

</div>
@endsection

