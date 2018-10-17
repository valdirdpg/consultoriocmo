@extends('Site.templates.template')
@section('content')

{!! Form::open(['method'=>'put'])!!}
<h1>Teste</h1>
@section('cont1')
    {!! Form::label('Nome:') !!}
    {!!Form::text('nm_convenio',null,['class'=>'form-control','placeholder'=>'Nome do convênio'])  !!}
@endsection
@section('cont2')
    {!! Form::label('Data ínicio:') !!}
    {!!Form::date('dt_inicio', \Carbon\Carbon::now(),['class'=>'form-control'])  !!}
@endsection
@section('cont3')
    {!! Form::label('Abrangência:') !!}
    {!!Form::text('ds_regioes',null,['class'=>'form-control','placeholder'=>'Região de abrangencia convênio'])  !!}
@endsection
@section('cont4')
    {!! Form::label('Situação:') !!}
    {!!Form::checkbox('ativo','1',['class'=>'checkbox'])  !!}
@endsection
{!! Form::close() !!}

@endsection


