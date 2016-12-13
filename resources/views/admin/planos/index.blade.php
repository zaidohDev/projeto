@extends('layouts.app')
@section('content')
<div class="class container" style="max-width:80%">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Planos de Aulas</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('planos.create') }}"> Criar Plano</a>
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
                <th>ID</th>
                <th>Curso</th>
                <th>Titulo</th>
                <th>Data</th>
                <th width="280px">Ação</th>
            </tr>
        @foreach ($planos as $plano)
        <tr>
      
            <td>{{ $plano->id}}</td>
  			<td>{{ $plano->curso}}</td>
  			<td>{{ $plano->titulo}}</td>
  			<td>{{ $plano->data_insert}}</td>
           
            <td>
            
                
            <a class="btn btn-info" href="{{ route('planos.show',$plano->id) }}">Show</a>

            <a class="btn btn-primary" href="{{ route('planos.edit',$plano->id) }}">Edit</a>

            {!! Form::open(['method' => 'DELETE','route' => ['planos.destroy', $plano->id],'style'=>'display:inline']) !!}

            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}
               
            </td>

        </tr>
        @endforeach
        </table> 
           <div class="card horizontal blue">
                 {!! $planos->render() !!}
   </div>
        </div>
        </div>
      
    @endsection