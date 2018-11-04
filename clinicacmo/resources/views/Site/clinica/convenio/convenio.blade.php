@extends('Site.templates.listagem')

@section('content')


    <!--  <div class="panel-heading">
           <h1 class="page-header">{{$tela ?? 'Convênio Localizado'}}</h1></div>-->

    <!--<div class="panel table-responsive col-lg-10">
        {!! Form::open(['route' => 'convenios.search', 'class' => 'form-inline form-search'])!!}
        {!! Form::text('search', null, ['placeholder' => 'Pesquisar?', 'class' => 'form-control'])!!}
        {!! Form::submit('search', ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}  </div>-->
    <table class="table table-hover">
        <thead class="thead-light">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Situação</th>
                <th>Ações</th>
            </tr>
        </thead>
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

    <div>{{$convenio->links()}}</div>


@endsection
