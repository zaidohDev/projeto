@extends('layouts.app')
@section('content')
<div class="class container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Criar Docente</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('docentes.index')}}"> Back</a>
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

    {!! Form::open(array('route' => 'docentes.store','method'=>'POST'))!!}

    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Nome:</strong>
                {!! Form::text('nome', null, array('placeholder' => 'Inserir nome','class' => 'form-control'))!!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sobrenome:</strong>
                {!! Form::text('sobrenome', null, array('placeholder'=>'Inserir sobrenome','class'=> 'form-control')) !!}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>telefone:</strong>
                {!! Form::text('telefone', null, array('placeholder' =>'Inserir telefone','class' => 'form-control'))!!}
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>E-mail:</strong>
                {!! Form::text('email', null, array('placeholder' =>'Inserir email','class' => 'form-control')) !!}
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Disciplina:</strong>
                {!! Form::text('disciplina', null, array('placeholder' =>'Inserir disciplina','class' => 'form-control')) !!}
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Escola:</strong>
                {!! Form::text('escola', null, array('placeholder' =>'Inserir escola','class' => 'form-control')) !!}
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Turma:</strong>
                {!! Form::text('turma', null, array('placeholder' =>'Inserir turma','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </div>
    {!! Form::close() !!}

@endsection