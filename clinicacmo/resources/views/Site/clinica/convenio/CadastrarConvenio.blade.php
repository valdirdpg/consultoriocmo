@extends('Site.templates.template')
@section('content')

<h1>Teste</h1>
{!! Form::open(['route'=>'convenios.store','class' =>'form-horizontal'])!!}

<div class="panel-body">
    <div class="col-sm-6">
    {!! Form::label('Nome:') !!}
    {!!Form::text('nm_convenio',null,['class'=>'form-control','placeholder'=>'Nome do convênio'])  !!}
    </div>
</div>
<div class="panel-body">
    <div class="col-sm-6">
    {!! Form::label('Data ínicio:') !!}
    {!!Form::date('dt_inicio', \Carbon\Carbon::now(),['class'=>'form-control'])  !!}
    </div>
</div>
<div class="panel-body">
    <div class="col-sm-6">
    {!! Form::label('Abrangência:') !!}
    {!!Form::text('ds_regioes',null,['class'=>'form-control','placeholder'=>'Região de abrangencia convênio'])  !!}
    </div>
</div>
<div class="panel-body">
    <div class="col-sm-6">
    {!! Form::label('Situação:') !!}
    {!!Form::checkbox('ativo','1',['class'=>'checkbox'])  !!}
    </div>
</div>
<div class="panel-body">
    <div class="col-sm-6">
{!! Form::submit('Enviar',['class'=>'btn btn-primary']) !!}
    </div>
</div>
{!! Form::close() !!}

@endsection


