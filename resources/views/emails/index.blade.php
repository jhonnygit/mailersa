@extends('layouts.app')

@section('content')

<div class="card">
<div class="card-header">
    <a href="{{route('emails.create')}}" class="btn btn-secondary">Crear Email</a>
    <h1>Lista de emails</h1>
</div>
<div class="card-body">
    
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <table id="emails" class="table table-bordered table-striped dataTable table-sm dtr-inline" role="grid" aria-describedby="example1_info">
                    <thead>
                        <tr role="row">
                            <th>ID</th>
                            <th>Asunto</th>
                            <th>Destinatario</th>
                            <th>Mensaje</th>
                            <th>Estado</th>
                                                        
                        </tr>
                    </thead>
                    <tbody> 
                    @foreach ($emails as $email)
                    <tr class="odd">
                        <td >{{$email->id}}</td>
                        <td> {{$email->asunto}} </td>
                        <td> {{$email->destinatario}} </td>
                        <td> {{$email->mensaje}}</td>
                        <td>
                        @if(($email->estado)==1)
                            <button type="button" class="btn btn-success">Enviado</button>
                        @else
                            <button type="button" class="btn btn-secondary">No enviado</button>
                        @endif
                        
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