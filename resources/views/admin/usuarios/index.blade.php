@extends('layouts.admin')

@section('content')
<!-- titulo -->
<div class="row align-items-center mb-3">
    <div class="col">
        <h1 class="mb-0">Listado de usuarios</h1>

    </div>
    <div class="col-auto">
        <a href="{{ url('admin/usuarios/create') }}" class="btn btn-success">
            Crear nuevo usuario
        </a>
    </div>
    </div>


    <!-- tabla -->
    <div class="table-responsive" style="max-height: 600px; overflow-y: auto;" >
        <form class="form-inline mb-3" method="GET" action="{{ route('admin.usuarios.index') }}">
           <input class="form-control mr-2" type="text" name="search" value="{{ request('search') }}" placeholder="Buscar...">
         <button class="btn btn-primary" type="submit">Buscar</button>
       </form>

   

        
        <table id="example1" class="table table-bordered table-striped  table-hover">
         <tr>
           <td>Numero</td>
           <td>Nombre</td>
           <td>Email</td>
           <td>Numero</td>
 
          </tr>
         
        <?php $contador=1; ?>
        @foreach($usuarios as $usuario)
           <tr>
              <td>{{$contador++}}</td>
             <td>{{$usuario->name}}</td>
             <td>{{$usuario->email}}</td>
             <td><a href="{{url('admin/usuarios/'.$usuario->id)}}" class="btn btn-primary">Editar</a></td>
           </tr>
       @endforeach
       
      </table>
      <div class="mt-3 d-flex justify-content-center">
         {{ $usuarios->withQueryString()->links('pagination::bootstrap-4') }}
        </div>

      
      
      
    </div>
      
@endsection
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


