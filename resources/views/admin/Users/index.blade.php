@extends('layouts.app')
@section('title', 'Listado de Usuarios')
@section('body-class','user-page')

@section('content')
<div class="wrapper">
    <div class="container">

<div class="section text-center">
    <h4 class="title" style="background-color: #23c6c8">Listado de Usuarios</h4>
</br>
   
    <div class="row">
        <table class="table table-sm">
    <thead>
        <tr class="table-active">
            <th class="text-center col-md-2">Nombre</th>
            <th class="col-md-4 text-center">email</th>
            <th class="text-center">direccion</th>
            <th class="text-right">sexo</th>
            <th class="text-right">telefono</th>
            <th class="text-right">administrador</th>
            <th class="text-center">Opciones</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->direccion}}</td>
            <td>{{$user->sexo}}</td>
            <td>{{$user->telefono}}</td>
            <td>{{$user->admin}}</td>
            <td class="td-actions text-right">

              <form method="post" action="{{ url('/admin/users/'.$user->id) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                
                                  
                <a href="{{url('/admin/users/'.$user->id.'/edit')}}" rel="tooltip" title="Editar producto" class="btn btn-xs btn-dark  btn-circle text-center" >Edit</a>
                    
                </a>
                               
                <button class="btn btn-xs btn-danger btn-circle text-center"   type="submit" rel="tooltip" title="Eliminar"  onclick="return confirm('Desea eliminar a {{$user->name}}')" >Borrar
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

        {{ $users->links() }}
    </div>

 </div>

</div>


</div>


@include('includes.footer')

    
@endsection

