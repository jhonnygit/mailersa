@extends('layouts.app')

@section('content')
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Agregar ususario</h4>
				</div>

				<div class="panel-body">
                    <form method="post" action="{{route('usuario.store')}}">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label>Correo</label>
                            <input type="email" class="form-control" id="email" name="email">
                            @error('email')
                                <span class="text-danger error">{{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label >Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            @error('password')
                                <span class="text-danger error">{{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nombre</label>
                            <input class="form-control" type="text" id="name" name="name">
                            @error('name')
                                <span class="text-danger error">{{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group" >
                            <label >Celular</label>
                            <input class="form-control" type="text" name="celular" id="celular">
                            @error('celular')
                                <span class="text-danger error">{{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group" >
                            <label >Cedula</label>
                            <input class="form-control" type="text" name="cedula" id="cedula">
                            @error('cedula')
                                <span class="text-danger error">{{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label >Fecha Nacimiento</label>
                            <input  class="form-control" type="date" name="fecha_nacimiento" id="fecha_nacimiento">
                            @error('fecha_nacimiento')
                                <span class="text-danger error">{{$message}} </span>
                            @enderror
                        </div>	
						<div class="form-group">
							<label >codigo ciudad</label>						
                            <input class="form-control" type="text" name="codigo_ciudad" id="codigo_ciudad">                           
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
