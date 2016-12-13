@extends('layouts.app')
@section('content')
<div class="class container" style="max-width:80%">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Lista de Docentes</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('docentes.create')}}"> Criar Docente</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="table-responsive">
        <table class="table table-hover  table-striped table-hover" >
            <tr class="info" >
                <th>Id</th>
                <th>Nome</th>
                <!-- <th>Sobrenome</th>
                <th>telefone</th>
                <th>email</th> -->
                <th>disciplina</th>
                <th>escola</th>
                <th>turma</th>
                <th width="280px">Ação</th>
            </tr>
        @foreach ($docentes as $d)
        <tr>
      
            <td>{{ $d->id}}</td>
  			<td>{{ $d->nome}}</td>
  			<!-- <td>{{ $d->Sobrenome}}</td>
  			<td>{{ $d->telefone}}</td>
  			<td>{{ $d->email}}</td> -->
  			<td>{{ $d->disciplina}}</td>
  			<td>{{ $d->escola}}</td>
  			<td>{{ $d->turma}}</td>
           
            <td>
            
                
            <a class="btn btn-info" href="{{ route('docentes.show',$d->id) }}">Show</a>

            <a class="btn btn-primary" href="{{ route('docentes.edit',$d->id) }}">Edit</a>

            {!! Form::open(['method' => 'DELETE','route' => ['docentes.destroy', $d->id],'style'=>'display:inline']) !!}

            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}
               
            </td>

        </tr>
        @endforeach
        </table> 
           <div class="card horizontal blue">
                 {!! $docentes->render() !!}
   </div>
        </div>
        </div> 
    @endsection