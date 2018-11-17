@extends('Site.templates.template')

@section('content')

    <h2 class=""> <a href="{{route('especialidades.index')}}"></a>{{$tela}}</h2>

    @if( isset($errors) && count($errors) > 0 )
        <div class="alert alert-danger">
            @foreach( $errors->all() as $error )
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif
@if(isset($especialidade))
    {!! Form::model($especialidade,['route'=>[('especialidades.update'),$especialidade->id],'class'=>'form-horizontal','method'=>'PUT']) !!}
@else
    {!! Form::open(['route'=>('especialidades.store'), 'class'=>'form form-horizontal'])!!}
@endif
    <div class="panel-body">
        <div class="col-sm-6">
            {!! Form::label('Especialidade:') !!}
            {!! Form::text('ds_especialidades',null,['class'=>'formo-control', 'placeholder'=>'Nome da especialidade']) !!}
        </div>
    </div>
    <div class="panel-body">
        <div class="col-sm-6">
            {!! Form::label('Situação:') !!}
            {!! Form::checkbox('ativo') !!}
        </div>
    </div>
<div id="actions" class="panel-bold">
    <div class="col-md-6">
        {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
        <a href="{!! route('especialidades.index')!!}"><span class="btn btn-default">Cancelar</span></a>
    </div>
</div>

{!! Form::close()!!}
@endsection
