@extends('layouts.app')
@section('content')
<div class="container">	
    <div class="row">
        <div class="col-lg-12 margin-tb">
           <div class="pull-left">
                <h2> Show Docente</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('docentes.index')}}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                   {{ $docentes->nome }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sobrenome:</strong>
                   {{ $docentes->sobrenome }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefone:</strong>
                   {{ $docentes->telefone }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>E-mail:</strong>
                   {{ $docentes->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Disciplina:</strong>
                   {{ $docentes->disciplina }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Escola:</strong>
                {{ $docentes->escola }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Turma:</strong>
                {{ $docentes->turma }}
            </div>
        </div>
         
    </div>
    </div>	
@endsection