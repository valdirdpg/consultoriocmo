@extends('Site.templates.template')
@section('content')

@if(isset($convenio))
    {!! Form::model($convenio,['route'=>['convenios.update',$convenio->id], 'class'=>'form-horizontal', 'method'=>'put']) !!}

@else
    {!! Form::open(['route'=>'convenios.store','class' =>'form-horizontal'])!!}

@endif

<h1 class=""> <a href="{{route('convenios.index')}}"><span class="glyphicon glyphicon-fast-backward"></span></a>{{$tela}}</h1>

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
<div id="actions" class="row">
    <div class="col-md-12">
{!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
<a href="{{route('convenios.index')}}"><span class="btn btn-default">Cancelar</span></a>

    </div>
</div>
{!! Form::close() !!}

@endsection

