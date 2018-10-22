@extends('Site.templates.template')
<h1>Lista de Convênios</h1>
@section('content')
    <div class="panel panel-default table-responsive col-lg-6">
    <table class="table table-striped">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Situação</th>
            <th>Ações</th>
        </tr>
        @foreach($convenio as $convenios)
        <tr>
            <td>{{$convenios->idconvenios}}</td>
            <td> {{$convenios->nm_convenio}}</td>
            <td> {{$convenios->ativo}}</td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a>
                <a href="#"><span class="glyphicon glyphicon-eye-open"></span></a>
            </td>
        </tr>

        @endforeach

    </table>
        <a href="{{route('convenios.create')}}" class="btn-add btn btn-primary">Adicionar</a>
    </div>
@endsection
