@extends('layouts.app')
@section('content')
<div class="container"> 
    <div class="row">
        <div class="col-lg-12 margin-tb">
           <div class="pull-left">
                <h2> Show Planos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('planos.index')}}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Curso:</strong>
                   {{ $planos->curso }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titulo:</strong>
                   {{ $planos->titulo }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Conteudo:</strong>
                   {{ $planos->conteudo }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Objetivo:</strong>
                   {{ $planos->objetivo }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Metodologia:</strong>
                   {{ $planos->metodologia }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Avaliacao:</strong>
                {{ $planos->avaliacao }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Referencia:</strong>
                {{ $planos->referencia }}
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descricao:</strong>
                {{ $planos->descricao }}
            </div>
        </div>
    </div>
    </div>  
@endsection