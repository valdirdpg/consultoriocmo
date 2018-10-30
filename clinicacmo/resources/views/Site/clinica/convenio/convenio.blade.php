@extends('Site.templates.template')
<h1>Lista de Convênios</h1>
@section('content')
    <div class="panel panel-default table-responsive col-lg-6">
        {!! Form::open(['route' => 'convenios.index', 'class' => 'form form-inline form-search']) !!}
        {!! Form::text('search', null, ['placeholder' => 'Pesquisar?', 'class' => 'form-control']) !!}
        {!! Form::submit('search', ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}
    <table class="table table-striped">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Situação</th>
            <th>Ações</th>
        </tr>
        @foreach($convenio as $convenios)
        <tr>
            <td>{{$convenios->id}}</td>
            <td> {{$convenios->nm_convenio}}</td>
            <td> {{$convenios->ativo}}</td>
            <td><a href="{{route('convenios.show',$convenios->id )}}"><span class="glyphicon glyphicon-trash"></span></a>
                <a href="{{route('convenios.edit',$convenios->id)}}"><span class="glyphicon glyphicon-eye-open"></span></a>
            </td>
        </tr>

        @endforeach

    </table>
        <a href="{{route('convenios.create')}}" class="btn-add btn btn-primary">Adicionar</a>
    </div>
@endsection
