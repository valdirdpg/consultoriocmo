@extends('Site.templates.template')
@section('content')

@if(isset($convenio))
    {!! Form::model($convenio,['route'=>['convenios.update',$convenio->id], 'class'=>'form-horizontal', 'method'=>'put']) !!}
    <h1> <a href="{{route('convenios.index')}}"><span class="glyphicon glyphicon-fast-backward"></span></a>

        Gerenciar Convênio - {{$convenio->nm_convenio}}  </h1>
@else
    {!! Form::open(['route'=>'convenios.store','class' =>'form-horizontal'])!!}
    <h1> <a href="{{route('convenios.index')}}"><span class="glyphicon glyphicon-fast-backward"></span></a>

        Gerenciar Convênio - {{$cabecalho}}  </h1>
@endif



@if(isset($errors) && count($errors) > 0)

    <div class="alert alert-danger">

        @foreach($errors->all() as $error)

            <p>{{$error}}</p>

        @endforeach

    </div>
@endif
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


