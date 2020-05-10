@extends('layouts.app')
@section('title', 'Listado de categorias')
@section('body-class','category-page')

@section('content')
<div class="wrapper">
    <div class="container">

<div class="section text-center">
    <h4 class="title" style="background-color: #23c6c8">Listado de Categorias</h4>
    <br>
   <a href="{{ url('/admin/categories/create') }}" class="btn btn-success button-circle" style="background-color: #88bdac; border-color:#88bdac">Nueva categoria</a>
  <!--   <div class="team"> -->
    <div class="row">
        <table class="table table-sm">
    <thead>
        <tr class="table-active">
          <th class="text-center ">#</th> 
            <th class="text-center col-md-4">Nombre</th>
            <th class="col-md-4 text-center">Descripción</th>
          
            <th class="text-right">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $key => $category)
        <tr>
            <td>{{($key+1)}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->description}}</td>
            <td class="td-actions text-right">
              
              <form method="post" action="{{ url('/admin/categories/'.$category->id) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a  rel="tooltip" title="ver categoria" class="btn btn-xs btn-info btn-circle text-center" >Ver</a>
                    
                
                <a href="{{url('/admin/categories/'.$category->id.'/edit')}}" rel="tooltip" title="Editar categoria" class="btn btn-xs btn-dark  btn-circle text-center" >Editar</a>
                    
                </a>
                
      
                <button  type="submit" rel="tooltip" title="Eliminar" class="btn btn-xs btn-danger btn-circle text-center" onclick="return confirm('Desea eliminar a {{$category->name}}')">Borrar
               
                </button>
              </form>    


                

  
</div>  

      </div>


</div>
            </td>
        </tr>


        @endforeach

    </tbody>

</table>

       
    </div>
    
</div>
 </div>
 {{ $categories->links() }}
</div>


</div>




    
@endsection

