@extends('layouts.app')

@section('content')
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Crear Emails</h4>
				</div>

				<div class="panel-body">
                    <form method="post" action="{{route('emails.store')}}">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label>Asunto</label>
                            <input class="form-control" type="text" id="asunto" name="asunto">
                            @error('asunto')
                                <span class="text-danger error">{{$message}} </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Destino</label>
                            <input type="email" class="form-control" id="destinatario" name="destinatario">
                            @error('destinatario')
                                <span class="text-danger error">{{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group" >
                            <label >mensaje</label>
                            <textarea class="form-control" name="mensaje" id="mensaje" rows="3"></textarea>
                           
                            @error('mensaje')
                                <span class="text-danger error">{{$message}} </span>
                            @enderror
                        </div>                        
                        <button type="submit" name="enviar" value="enviar" class="btn btn-primary">Enviar</button>
                        <button type="submit" name="borrador" value="borrador" class="btn btn-secondary">Borrador</button>
                    </form>              
				</div>
			</div>
		</div>
@endsection
