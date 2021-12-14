@extends('layouts.app')

@section('content')

<div class="card">
<div class="card-header">
            <a href="{{route('usuario.create')}}" class="btn btn-secondary">Agregar Usuario</a>
        </div>
<div class="card-body">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <table id="usuarios" class="table table-bordered table-striped dataTable table-sm dtr-inline" role="grid" aria-describedby="example1_info">
                    <thead>
                        <tr role="row">
                            <th>ID</th>
                            <th>Nombres</th>
                            <th>Cedula</th>
                            <th>Email</th>
                            <th>Celular</th>
                            <th>Accion</th>                             
                        </tr>
                    </thead>
                    <tbody> 
                    @foreach ($usuarios as $usuario)
                    <tr class="odd">
                        <td >{{$usuario->id}}</td>
                        <td> {{$usuario->nombre}} </td>
                        <td> {{$usuario->cedula}} </td>
                        <td> {{$usuario->email}}</td>
                        <td>{{$usuario->num_celular}}</td>
                        <td>
                            <form action="{{ route('usuario.destroy', $usuario->id) }}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="delete">
                                <div class="btn-group">
                                    <a href="{{ route('usuario.edit',$usuario)}}" class="btn btn-primary btn-sm"> Editar</a>
                                    <button onclick="return confirm('Estas seguro?')" type="submit" class="btn btn-danger btn-sm"> Eliminar</button>
                                </div>
                            </form>
                        </td>                        
                    </tr>  
                    @endforeach
                    
                    </tbody>                                    
            </table>          
        </div>        
    </div>         
</div>
</div>

@endsection
