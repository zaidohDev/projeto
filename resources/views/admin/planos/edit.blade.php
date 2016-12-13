@extends('layouts.app')
@section('content')
<div class="class container">
 <div class="row">
  <div class="col-lg-12 margin-tb">
   <div class="pull-left">
        <h2>Editar Plano de Aula</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('planos.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model($planos, ['method' => 'PATCH','route' => ['planos.update', $planos->id]]) !!}

    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Curso:</strong>
                {!! Form::text('curso', null, array('placeholder' => 'Curso','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titulo:</strong>
                {!! Form::text('titulo', null, array('placeholder' => 'Titulo','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Conteudo:</strong>
                {!! Form::text('conteudo', null, array('placeholder' => 'Conteudo','class' => 'form-control' ,'style'=>'height:100px')) !!}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Objetivo:</strong>
                {!! Form::text('objetivo', null, array('placeholder' => 'Objetivo','class' => 'form-control' ,'style'=>'height:100px')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Metodologia:</strong>
                {!! Form::text('metodologia', null, array('placeholder' => 'Metodologia','class' => 'form-control','style'=>'height:100px' )) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Avaliacao:</strong>
                {!! Form::text('avaliacao', null, array('placeholder' => 'Avaliacao','class' => 'form-control' ,'style'=>'height:100px' )) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Referencia:</strong>
                {!! Form::text('referencia', null, array('placeholder' => 'Referencia','class' => 'form-control','style'=>'height:100px')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection