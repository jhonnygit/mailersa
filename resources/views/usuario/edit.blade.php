@extends('layouts.app')

@section('content')
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Editar ususario</h4>
				</div>

				<div class="panel-body">
                    <form method="post" action="{{route('usuario.update',$usuario->id)}}">
                    {{ csrf_field() }}
                    @method('put')
                        <input type="hidden" name="id" value="{{$usuario->id}}">
                        <div class="form-group">
                            <label>Correo</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$usuario->email}}" readonly>
                            @error('email')
                                <span class="text-danger error">{{$message}} </span>
                            @enderror
                        </div>                       
                        <div class="form-group">
                            <label>Nombre</label>
                            <input class="form-control" type="text" id="name" name="name" value="{{$usuario->nombre}}">
                            @error('name')
                                <span class="text-danger error">{{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group" >
                            <label >Celular</label>
                            <input class="form-control" type="text" name="celular" id="celular" value="{{$usuario->num_celular}}" readonly>
                            @error('celular')
                                <span class="text-danger error">{{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group" >
                            <label >Cedula</label>
                            <input class="form-control" type="text" name="cedula" id="cedula" value="{{$usuario->cedula}}">
                            @error('cedula')
                                <span class="text-danger error">{{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label >Fecha Nacimiento</label>
                            <input  class="form-control" type="text" name="fecha_nacimiento" id="fecha_nacimiento" value="{{$usuario->fecha_nacimiento}}">
                            @error('fecha_nacimiento')
                                <span class="text-danger error">{{$message}} </span>
                            @enderror
                        </div>	
						<div class="form-group">
							<label >codigo ciudad</label>						
                            <input class="form-control" type="text" name="codigo_ciudad" id="codigo_ciudad" value="{{$usuario->codigo_ciudad}}">                           
							@error('codigo_ciudad')
								<span class="text-danger error">{{$message}} </span>
							@enderror
						</div> 
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
              
				</div>
			</div>
		</div>
@endsection
