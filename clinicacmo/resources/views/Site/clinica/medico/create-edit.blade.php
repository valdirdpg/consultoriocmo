@extends('Site.templates.template')
@section('content')
    <h2 class=""> <a href="{{route('medicos.index')}}"></a>{{$tela}}</h2>

    @if( isset($errors) && count($errors) > 0 )
        <div class="alert alert-danger">
            @foreach( $errors->all() as $error )
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif

    @if(!isset($medico)):
         {!! Form::open(['route'=>('medicos.store'),'class'=>'form-horizontal']) !!}
    @else:
         {!! Form::model($medico,['route'=>[('medicos.update'),$medico->id],'class'=>'form-horizontal','method'=>'PUT']) !!}
    @endif
    <div class="panel-body">
        <div class="col-sm-6">
            {!! Form::label('Nome:') !!}
            {!! Form::text('nm_medico',null,['class'=>'form-control', 'placeholder'=>'Nome']) !!}
        </div>
    </div>
    <div class="panel-body">
        <div class="col-sm-6">
            {!! Form::label('CPF:') !!}
            {!! Form::number('cpf_medico',null,['class'=>'form-control','placeholder'=>'00000000000']) !!}
        </div>
    </div>
    <div class="panel-body">
        <div class="col-sm-6">
            {!! Form::label('RG:') !!}
            {!! Form::number('rg_medico',null,['class'=>'form-control','placeholder'=>'00000000000']) !!}
        </div>
    </div>
    <div class="panel-body">
        <div class="col-sm-6">
            {!! Form::label('CRM:') !!}
            {!! Form::number('nr_crm',null,['class'=>'form-control','placeholder'=>'0000000000']) !!}
        </div>
    </div>
    <div class="panel-body">
        <div class="col-sm-6">
            {!! Form::label('Email:') !!}
            {!! Form::email('nm_usuario',null,['class'=>'form-control', 'placeholder'=>'seuemail@email.com']) !!}
        </div>
    </div>
    <div class="panel-body">
        <div class="col-sm-6">
            {!! Form::label('Código da Especialidade:') !!}
            {!! Form::number('cd_especialidade',null,['class'=>'form-control', 'placeholder'=>'12345']) !!}
        </div>
    </div>
    <div class="panel-body">
        <div class="col-sm-6">
            {!! Form::label('Situação:') !!}
            {!! Form::checkbox('ativo') !!}
        </div>
    </div>
    <div class="panel-body">
        <div class="col-sm-6">
            {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
            <a href="{{route('medicos.index')}}"><span class="btn btn-default">Cancelar</span></a>
        </div>
    </div>
         {!! Form::close() !!}
@endsection
